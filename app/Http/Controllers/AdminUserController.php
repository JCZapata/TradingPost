<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
  /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         $users = User::orderBy('name')->get();
         return view('admin.users.index', compact('users'));
     }
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $genres = ['Hombre','Mujer','Otro'];
         $user = User::find($id);
         return view('admin.users.edit',compact('user','genres'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $this->validate($request, [
             "name" => 'required',
         ]);

         $user = User::find($id);

         $user->name = $request->input("name");

         $path = $request->file('avatar');
         //dd($path);

         if (!is_null($path)) {
             $user->avatar = $path ->store('public/avatars');
         }

         $user->save();

         return redirect()->route('users.edit',['id' => $id]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $user = User::find($id);
         $user->delete();

         return redirect()->route("users.index");
     }
}
