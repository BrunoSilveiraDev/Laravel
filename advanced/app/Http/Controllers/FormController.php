<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFormValidation;
use App\User;
class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(StoreFormValidation $request)
    {

    }

    public function search($searchKey)
    {
        $users = User::search($searchKey)->get(); // return $users;

        return view('search', compact('users'));
        // dd($users);
        // print_r($users);
    }
}
