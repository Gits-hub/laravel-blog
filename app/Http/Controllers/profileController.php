<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    //Show all profiles
    public function index() {
        return view('welcome', [
            'Name' => 'Profiles',
            'profile' => profile::all()
        ]);
    }
    //Show one profile
    public function show($id){
        return view('profile', [
            'person' => profile::find($id)
        ]);
    }
}
