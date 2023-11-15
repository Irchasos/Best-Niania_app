<?php

namespace App\Http\Controllers;
use App\Interfaces\GuardianRepositoryInterface;
use App\Models\Guardian;

class SearchController extends Controller
{
    public function __construct(GuardianRepositoryInterface $guardianRepository)
    {
        $this->GuardianRepository = $guardianRepository;
    }

    public function index()
    {

        return view('search.index');
    }

    public function list()
    {
        $allGuardians = $this->GuardianRepository->allGuardians();
        return view('search.list', ['guardians' => $allGuardians]);
    }
    public function show(Guardian $guardian)
    {


        return view('search.show', ['guardian' => $guardian]);
    }
}
