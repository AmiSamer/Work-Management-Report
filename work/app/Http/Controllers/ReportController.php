<?php

namespace App\Http\Controllers;
use App\Report;
use App\Work;
use DB;
use Carbon;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function viewReport()
    {
       
        
// $time = new Carbon($shift_start_time);
// $shift_end_time =new Carbon($shift_end_time);
// $time->diffForHumans($shift_end_time);

         $works = DB::table('emps','projects')
            ->leftJoin('works', 'emps.id', '=', 'works.user_id')
            ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->get();
         return view('admin.reports.view-report',['works'=>$works]);
    }









    public function searchResult(Request $request)
    {

       

if (($s = $request->get('worker_name')) && ($request->get('project'))  && ($request->get('from')) && ($request->get('to'))) {
    # code...
    $works = DB::table('emps','projects')
            ->leftJoin('works', 'emps.id', '=', 'works.user_id')
            ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.project_id','=',$request->get('project'))
            ->where('works.ustart_date','>=',$request->get('from'))
            ->where('works.uend_date','<=',$request->get('to'))
            
            ->get();

// dd($works);

            return view('admin.reports.view-report',['works'=>$works]);

}



elseif (($s = $request->get('worker_name')) && ($n = $request->get('project')) && ($e = $request->get('from'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.project_id','=',$n)
            ->where('works.ustart_date','>=',$e)
            ->get();

// dd($works);
             return view('admin.reports.view-report',['works'=>$works]);
}





elseif (($s = $request->get('worker_name')) && ($n = $request->get('project')) && ($f = $request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.project_id','=',$n)
            ->where('works.uend_date','<=',$f)
            ->get();

// dd($works);
             return view('admin.reports.view-report',['works'=>$works]);
}




elseif (($s = $request->get('worker_name')) && ($e = $request->get('from')) && ($f = $request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.ustart_date','>=',$e)
            ->where('works.uend_date','<=',$f)
            ->get();

// dd($works);
             return view('admin.reports.view-report',['works'=>$works]);
}





elseif (($n = $request->get('project')) && ($e = $request->get('from')) && ($f = $request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.project_id','=',$n)
            ->where('works.ustart_date','>=',$e)
            ->where('works.uend_date','<=',$f)
            ->get();

// dd($works);
             return view('admin.reports.view-report',['works'=>$works]);
}









elseif (($s = $request->get('worker_name')) && ($n = $request->get('project'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.project_id','=',$n)
            ->get();

// dd($works);
             return view('admin.reports.view-report',['works'=>$works]);
}





elseif (($s = $request->get('worker_name')) && ($request->get('from'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.ustart_date','>=',$request->get('from'))
            ->get();

// dd($works);

             return view('admin.reports.view-report',['works'=>$works]);
}



elseif (($s = $request->get('worker_name')) && ($request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->where('works.uend_date','<=',$request->get('to'))
            ->get();
// dd($works);

             return view('admin.reports.view-report',['works'=>$works]);
}





elseif (($n = $request->get('project')) && ($request->get('from'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.project_id','=',$n)
            ->where('works.ustart_date','>=',$request->get('from'))
            ->get();


             return view('admin.reports.view-report',['works'=>$works]);
}




elseif (($n = $request->get('project')) && ($request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.project_id','=',$n)
            ->where('works.uend_date','<=',$request->get('to'))
            ->get();


             return view('admin.reports.view-report',['works'=>$works]);
}


elseif (($request->get('from')) && ($request->get('to'))) {
    # code...

    $works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            // ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.ustart_date','>=',$request->get('from'))
            ->where('works.uend_date','<=',$request->get('to'))
            ->get();


             return view('admin.reports.view-report',['works'=>$works]);
}





elseif($s = $request->get('worker_name')) {
    # code...

    $works = DB::table('emps','projects')
            ->leftJoin('works', 'emps.id', '=', 'works.user_id')
            ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->where('works.user_id','=',$s)
            ->get();
            
      // dd($works);      

            return view('admin.reports.view-report',['works'=>$works]);
}



elseif($n = $request->get('project'))
{
    
$works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            ->where('works.project_id','=', $n)
            ->get();
            
           

            return view('admin.reports.view-report',['works'=>$works]);


}





elseif($e = $request->get('from'))
{
    
$works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            ->where('works.ustart_date','>=', $e)
            ->get();
            
           // dd($works);

            return view('admin.reports.view-report',['works'=>$works]);


}





elseif($f = $request->get('to'))
{
    
$works = DB::table('works')
            ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
            ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
            ->where('works.uend_date','<=', $f)
            ->get();
            
           // dd($works);

            return view('admin.reports.view-report',['works'=>$works]);


}








// elseif (( $request->get('title')) && ($request->get('desc'))) {
//     # code...

//     $works = DB::table('works')
//             ->leftJoin('emps', 'works.user_id', '=', 'emps.id')
//             ->leftJoin('projects', 'projects.id', '=', 'works.project_id')
//             ->where('works.work_title','=',$request->get('title'))
//             ->where('works.work_desc','=',$request->get('desc'))
//             ->get();

//              return view('admin.reports.view-report',['works'=>$works]);
// }





else
{
    return redirect('/view-report')->with('message','no specific result found') ;
}
  


    }






    public function allUsers()
    {
        $works = DB::table('emps','projects')
            ->leftJoin('works', 'emps.id', '=', 'works.user_id')
            ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
            ->get();
     return view('admin.reports.view-report',['works'=>$works]);
    }



//  public function searchResult(Request $request)
//    {
//     if(request()->ajax())
//     {
//      if($request->works)
//      {
//       $data = DB::table('emps','projects')
//             ->leftJoin('works', 'emps.id', '=', 'works.user_id')
//             ->leftJoin('projects', 'works.project_id', '=', 'projects.id')
//         ->where('works.project_id', $request->works);
//      }
//      else
//      {
//       $data = DB::table('emps','projects')
//             ->leftJoin('works', 'emps.id', '=', 'works.user_id')
//             ->leftJoin('projects', 'works.project_id', '=', 'projects.id');
//      }


//      return datatables()->of($data)->make(true);
//     }


//     $works = DB::table('works')
//        ->select("*")
//        ->get();


//     return view('view-report', compact('works'));
//    }
// }






}
