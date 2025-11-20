<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function birthdayKids()
    {
        return view('invitations.birthday-kids');
    }

    public function birthdayAdult()
    {
        return view('invitations.birthday-adult');
    }

    public function baptism()
    {
        return view('invitations.baptism');
    }

    public function quinceanera()
    {
        return view('invitations.quinceanera');
    }

    public function religiousCelebration()
    {
        return view('invitations.religious-celebration');
    }
}
