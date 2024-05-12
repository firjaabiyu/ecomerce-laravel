<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index(){

        $data = Profile::where('id_user', auth()->user()->id)->get()->all();
        return view('dashboard', compact('data'));
    }
}
