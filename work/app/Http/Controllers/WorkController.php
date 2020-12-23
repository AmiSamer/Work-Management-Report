<?php

namespace App\Http\Controllers;
use App\Project;
use App\Work;
use Session;
use DB;

use Illuminate\Http\Request;

class WorkController extends Controller
{
   public function index()
    {
        $projects = DB::table('projects')
                    ->where('end_date','=',NULL)
                    ->get();
    // 	$projects=Project::all();
    	return view('work.add-work',['projects'=>$projects]);
    }




public function saveWork(Request $request)
    {
        $work = new Work();
        $work->project_id = $request->project_fullname;
        $work->work_title = $request->work_title;
        $work->work_desc = $request->work_desc;
        $work->ustart_date = $request->ustart_date;
        $work->uend_date = $request->uend_date;

        $work->user_id = Session::get('empId');

        $wh = $request->work_hour;
        // $work->work_hour = $wh;


        $wm = $request->ex_min;
        // $work->ex_min = $wm;

        // $th = floor($wm / 60);
        // $hh = $wh+$th;
        // $tm = ($wm % 60); 

         $total = sprintf('%02d hours %02d minutes',$wh,$wm);
         $work->total_time = $total;

        $work->save();
            return redirect('/add-work')->with('message','work added successfully') ;
        
    
    }













// $work = new Work();
//         $work->project_id = $request->project_fullname;
//         $work->work_title = $request->work_title;
//         $work->work_desc = $request->work_desc;
//         $work->start_date = $request->start_date;
//         $work->end_date = $request->end_date;

//         $work->user_id = Session::get('empId');

//         $wh = $request->work_hour;
//         $work->work_hour = $wh;


//         $wm = $request->ex_min;
//         $work->ex_min = $wm;

//         $th = floor($wm / 60);
//         $hh = $wh+$th;
//         $tm = ($wm % 60); 

//          $total = sprintf('%02d hours %02d minutes',$hh,$tm);
//          $work->total_time = $total;

//         $work->save();
//             return redirect('/add-work')->with('message','work added successfully') ;
















    // public function saveWork(Request $request)
    // {
    // 	$work = new Work();
    //     $work->project_id = $request->project_fullname;
    //     $work->work_title = $request->work_title;
    //     $work->work_desc = $request->work_desc;
    //     $work->start_date = $request->start_date;
    //     $work->end_date = $request->end_date;
    //     $work->work_hour = $request->work_hour;
    //     $work->ex_min = $request->ex_min;
    //     $work->user_id = Session::get('empId');
    //     $work->save();
    //         return redirect('/add-work')->with('message','work added successfully') ;
        
    
    // }

      public function viewWork()
    {
        
             $n = Session::get('empId');
        $ws = DB::table('projects','works')
              ->leftJoin('works', 'works.project_id', '=', 'projects.id')
              ->where('works.user_id', '=', $n)
              ->get();


            $t1 = DB::table('works')
                    ->where('user_id','=',$n)
                    ->sum('work_hour');


           
            $t2 = DB::table('works')
                    ->where('user_id','=',$n)
                    ->sum('ex_min');



        $th = floor($t2 / 60);
        $hh = $t1+$th;

        $tm = ($t2 % 60); 

         $g = sprintf('%02d hours %02d minutes',$hh,$tm);

        return view('work.view-work',['ws'=>$ws,'g'=>$g]);
    }










    public function updateWork(Request $request)
    {
        // $n = Session::get('empId');

        $w = Work::find($request->id);
        $w->work_title = $request->work_title;
        $w->work_desc = $request->work_desc;
        $w->ustart_date = $request->ustart_date;
        $w->uend_date = $request->uend_date;

         $wh = $request->work_hour;
         $w->work_hour = $wh;


        $wm = $request->ex_min;
        $w->ex_min = $wm;

        $th = floor($wm / 60);
        $hh = $wh+$th;
        $tm = ($wm % 60); 

         $total = sprintf('%02d hours %02d minutes',$hh,$tm);
         $w->total_time = $total;





        // $w->work_hour = $request->work_hour;
        // $w->ex_min = $request->ex_min;
        $w->save();
        

        return redirect('/view-work')->with('message','Work updated successfully');
    }





}
