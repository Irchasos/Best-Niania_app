<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\District;
use App\Models\Option;

class SearchController extends Controller
{
    public function index()
    {
        $districts = District::all();
        $options = Option::all(); // Pobieramy wszystkie opcje
        return view('search.index', compact('districts', 'options'));
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $district = $request->input('district');
        $selectedOptions = $request->input('options', []);

        $query = Guardian::query();

        // Filtrowanie według nazwy
        if ($name) {
            $query->where('name', 'LIKE', "%{$name}%");
        }

        // Uzyskaj listę opiekunów po filtracji nazwy
        $guardiansByName = $query->get();

        // Filtrowanie według dzielnicy, z uwzględnieniem opcji "Wszystkie"
        if ($district && $district !== 'Wszystkie') {
            $guardiansByName = $guardiansByName->filter(function ($guardian) use ($district) {
                return $guardian->districts->contains('name', $district);
            });
        }

        // Filtrowanie według opcji
        if (!empty($selectedOptions)) {
            $guardiansByName = $guardiansByName->filter(function ($guardian) use ($selectedOptions) {
                return $guardian->options->pluck('id')->intersect($selectedOptions)->count() == count($selectedOptions);
            });
        }

        // Po filtracji
        $guardians = $guardiansByName;

        return view('search.results', compact('guardians', 'name', 'district', 'selectedOptions'));
    }
}
