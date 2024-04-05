<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Interfaces\GuardianRepositoryInterface;
use App\Models\Guardian;


class GuardianRepository implements GuardianRepositoryInterface
{

    final public function getGuardiansOfWeek()
    {
        // return Guardian::where('rank', '=', '9')->get();
    }

    final public function newGuardians()
    {
        // return Guardian::latest()->limit(2)->get();
    }

    final public function allGuardians()
    {
        return Guardian::all();
    }
    final public function Hour_price()
    {
        return Guardian::all();
    }

}
