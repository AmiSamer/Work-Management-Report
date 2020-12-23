<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class ProjectController extends Controller
{
    public function index()
    {
    	return view('admin.project.add-project');
    }

    public function saveProject(Request $request)
    {
    	$project = new Project();
        $project->project_name = $request->project_name;
        $str2 = DB::table('projects')->latest('id')->first();
        $txt = sprintf("%05d",$str2->id);
        $str = 'PR'.$txt;
        $project->project_code = $str;
        $project->desc = $request->desc;
        $project->start_date = $request->start_date;
        $project->esti_date = $request->esti_date;
        $project->save();
        return redirect('/add-project')->with('message','Project added successfully');
    
    }


     public function viewProject()
    {
        $projects=Project::all();
        return view('admin.project.view-project',['projects'=>$projects]);
    }



    public function updateProject(Request $request)
    {
        $project = Project::find($request->id);
        $project->project_name = $request->project_name;
        $project->project_code = $request->project_code;
        $project->desc = $request->desc;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->save();
        

        return redirect('/view-project')->with('message','Project updated successfully');
    }

    // public function deleteProject($id)
    // {
        
    //     $project = DB::table('projects','works')
    //         ->leftJoin('works', 'projects.id', '=', 'works.project_id')
    //         // ->where('works.user_id',$s)
    //         ->delete();


    //     $project = Project::find($id);
    //     $project->delete();

    //     return redirect('/view-project')->with('message','Project deleted successfully');
    // }

}
