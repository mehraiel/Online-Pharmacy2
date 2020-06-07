<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\UserData;
class UserDataController extends Controller
{
    public function index()
    {
       return view ('UserPages.addUser') ;
    }

    public function store (Request $request)
    { $UserData = new UserData();
    $validatedData = $request->validate([
        'User_name' => 'required',
        'Address' => 'required',
        'Mobile' => 'required|numeric'

    ]);
    $UserData->save();

    
    UserData::create($request->all());

      return redirect('/userData');


    }
}
