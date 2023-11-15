<?php

namespace App\Http\Controllers;

use App\Interfaces\GuardianRepositoryInterface;

class MainPageController extends Controller
{
    public function __construct(GuardianRepositoryInterface $guardianRepository)
    {
        $this->GuardianRepository = $guardianRepository;
    }

    public function index()
    {
        $guards_of_the_week =  $this->GuardianRepository->getGuardiansOfWeek();
        $latest_guardians =  $this->GuardianRepository->newGuardians();
        return view('index', ['guards' => $guards_of_the_week,'latest_guardians' => $latest_guardians]);
    }
    public function version()
    {

        return view('version');
    }

}
