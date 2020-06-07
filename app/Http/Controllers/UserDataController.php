<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\UserData;
class UserDataController extends Controller
{
    public function index()
    {
      $UserData = $UserData::all()->toArray();
      return view ('UserPages.retrieve',compact('UserData')) ;
       
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

      return redirect()->route('UserPages.retrieve')->with('success','User Added');

    }

    public function edit($id)
    {
      $UserData = UserData::find($id);
      return view('UserPages.edit',compact('UserData','id'));

    }


    

    
    public function update(Request $request ,$id)
    {
      $this->validate($request ,[
        'User_name' => 'required',
        'Address' => 'required',
        'Mobile' => 'required|numeric'
      ]);

      $UserData = $UserData::find($id);
      $UserData -> User_name = $request->get('User_name');
      $UserData -> Address = $request->get('Address');
      $UserData -> Mobile = $request->get('Mobile');
      $UserData->save();
      
      return redirect()->route('UserPages.retrieve')->with('success','information updated');

    }



}
