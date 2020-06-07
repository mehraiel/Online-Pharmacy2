<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\UserData;
class UserDataController extends Controller
{
    public function index()
    {
       return view ('UserPages.UserData') ;
    }

    public function store (Request $request)
    {
    $validatedData = $request->validate([
        'User_name' => 'required',
        'Address' => 'required',
        'Mobile' => 'required|numeric',

    ]);
      
      UserData::create($request->all());

      return redirect('/userData');


    }
}
