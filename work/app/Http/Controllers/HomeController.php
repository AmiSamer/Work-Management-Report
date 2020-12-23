<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = DB::table('projects')
                   ->count();

        $runnings = DB::table('projects')
                    ->where('end_date','=',NULL)
                    ->count();

         $com = DB::table('projects')
                    ->whereNotNull('end_date')
                    ->count();

    return view('admin.admin-home',['runnings'=>$runnings,'projects'=>$projects,'com'=>$com]);
    }

    public function backDash()
    {


$projects = DB::table('projects')
                   ->count();
        // return view('admin.admin-home',['projects'=>$projects]);

        $runnings = DB::table('projects')
                    ->where('end_date','=',NULL)
                    ->count();

         $com = DB::table('projects')
                    ->whereNotNull('end_date')
                    ->count();

    return view('admin.admin-home',['runnings'=>$runnings,'projects'=>$projects,'com'=>$com]);
        // return view('admin.admin-home');
    }



    
    public function running()
    {
        $runs = DB::table('projects')
                ->where('end_date','=',NULL)
                ->get();

         return view('admin.project.running-project',['runs'=>$runs]);       
    }


public function complete()
    {
        $coms = DB::table('projects')
                ->whereNotNull('end_date')
                ->get();

         return view('admin.project.completed-project',['coms'=>$coms]);       
    }






}
