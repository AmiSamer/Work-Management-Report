<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Project;
use DB;
use App\User;

class ChangeController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }




     public function index()
    {
        return view('admin.chadmin-password');
    } 


    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);



      $projects = DB::table('projects')
                   ->count();

        $runnings = DB::table('projects')
                    ->where('end_date','=',NULL)
                    ->count();

         $com = DB::table('projects')
                    ->whereNotNull('end_date')
                    ->count();

   
        // dd('Password change successfully.');
        return view('admin.admin-home',['runnings'=>$runnings,'projects'=>$projects,'com'=>$com]);
    }

    
}
