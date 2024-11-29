<?php

namespace App\Http\Middleware;

use Closure;

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Guardian;
use App\Models\Option;

use App\Models\OptionGuardian;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {


        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess(Auth::user()->name);


        }

        return redirect("login")->withError('Login details are not valid');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        Auth::login($check);

        return redirect('/')->withSuccess(__('auth.registration_success'));
    }

    public function create(array $data)
{
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'guardian' => isset($data['guardian']) && $data['guardian'] == '1' ? 1 : 0,
        'password' => Hash::make($data['password']),
    ]);

    if ($user->guardian == 1) {
        Guardian::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
    }

    return $user;
}



    public function dashboard()
    {

        if (Auth::check()) {
            $user = Auth::user();
            $user_email = $user->email;
            $guardian = Guardian::where('email', $user_email)->first();
            $districts = District::all();
            $options = Option::all();
            return view('dashboard')->with('user', $user)->with('guardian', $guardian)->with('districts', $districts)->with('options', $options);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function updateDistrictStatus(Request $request)
    {
        // Sprawdź, czy użytkownik jest zalogowany
        if (Auth::check()) {
            // Pobierz zalogowanego użytkownika
            $user = Auth::user();
            $user_email = $user->email;

            // Znajdź opiekuna (Guardian) na podstawie adresu e-mail
            $guardian = Guardian::where('email', $user_email)->first();

            // Sprawdź, czy udało się znaleźć opiekuna
            if ($guardian) {

                // Pobierz dane z formularza
                $districtId = $request->input('district_id');
                $status = $request->input('status');

                // Sprawdź, czy dane są kompleksowe
                if ($districtId && $status) {

                    // Znajdź rejon (District) na podstawie id
                    $district = District::find($districtId);

                    // Sprawdź, czy rejon istnieje
                    if ($district) {

                        // Sprawdź, czy relacja już istnieje
                        $hasRelation = $guardian->districts()->where('district_id', $districtId)->exists();
                        // W zależności od statusu dodaj lub usuń relację
                        if ($status === 'unset') {


                            $guardian->districts()->attach($district);
                        } elseif ($status === 'set') {


                            $guardian->districts()->detach($district);
                        }

                        // Tutaj możesz dodać odpowiednie przekierowanie lub odpowiedź JSON itp.
                        return redirect()->back()->with('success', 'Operacja zakończona sukcesem!');
                    }
                }
            }
        }

        // Jeśli coś poszło nie tak, możesz przekierować użytkownika na odpowiednią stronę błędu
        return redirect()->back()->with('error', 'Wystąpił błąd podczas przetwarzania żądania.');
    }

    public function updateOptionStatus(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user_email = $user->email;

            $guardian = Guardian::where('email', $user_email)->first();

            if ($guardian) {
                $optionId = $request->input('option_id');

                if ($optionId !== null) {
                    $option = Option::find($optionId);

                    if ($option) {
                        $hasRelation = $guardian->options()->where('option_id', $optionId)->exists();

                        if ($hasRelation) {
                            $guardian->options()->detach($option);
                            $message = 'Operacja zakończona sukcesem! Opcja została odznaczona.';
                        } else {
                            $guardian->options()->attach($option);
                            $message = 'Operacja zakończona sukcesem! Opcja została zaznaczona.';
                        }


                        return redirect()->back()->with('success', $message);
                    }
                }
            }
        }

        return redirect()->back()->with('error', 'Wystąpił błąd podczas przetwarzania żądania.');
    }


    public function updateDescription(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        if ($guardian) {
            $guardian->description = $request->description;
            $guardian->save();
        }
        return redirect()->back()->with('success', 'Description updated successfully.');
    }

    public function updateYearsOfWork(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        if ($guardian) {
            $guardian->years_of_work = $request->years_of_work;
            $guardian->save();
        }
        return redirect()->back()->with('success', 'Years of Work updated successfully.');
    }

    public function updatePhoneNumber(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        if ($guardian) {
            $guardian->phone_number = $request->phone_number;
            $guardian->save();
        }
        return redirect()->back()->with('success', 'Phone Number updated successfully.');
    }


    public function updateDegree(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        if ($guardian) {
            $guardian->degree = $request->degree;
            $guardian->save();
        }
        return redirect()->back()->with('success', 'Degree updated successfully.');
    }

    public function updatePhoto(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        if ($guardian && $request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('photos'), $filename);
            $guardian->src = 'photos/' . $filename;
            $guardian->save();
        }
        return redirect()->back()->with('success', 'Photo updated successfully.');
    }




}
