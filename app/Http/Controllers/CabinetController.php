<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user $user */
        $user = $request->user();

        $programm = $user->getReferrals();
        $link = $programm->first() ? $programm->first()->code : null;

        return view('cabinet.cabinet')
            ->with('link', $link);
    }
}
