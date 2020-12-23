<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword1;
use App\Emp;
use App\Work;
use DB;
use App\User;

use Illuminate\Support\Facades\Hash;
// use Hash;
// use App\Input;
use Session;

class EmpController extends Controller
{
    public function empLogin()
    {
    	return view('front.front-login');
    }

    public function empResister()
    {
    	return view('front.front-register');
    }


    public function saveRegister(Request $request)
    {
    	
         $request->validate([
            'emp_email' =>'required|unique:emps',
            'emp_password' => 'required|max:8',
            'confirm_password' => ['same:emp_password'],
        ]);




        $emp = new Emp();
        $emp->emp_name = $request->emp_name;
        $emp->emp_email = $request->emp_email;

         $emp->emp_password = Hash::make($request->emp_password);
         $emp->save();

        $empId = $emp->id;
        Session::put('empId',$empId);
        Session::put('empName',$emp->emp_name);


$emp = Session::get('empId');
      


        $u = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->count();





        
           $t1 = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->sum('work_hour');


           
            $t2 = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->sum('ex_min');



        $th = floor($t2 / 60);
        $hh = $t1+$th;

        $tm = ($t2 % 60); 

         $g = sprintf('%02d hours %02d minutes',$hh,$tm);








        return view('emp.dashboard.emp-dashboard',['u'=>$u,'g'=>$g]);







    }

    public function saveLogin(Request $request)
    {
    	 $emp = Emp::where('emp_email',$request->emp_email)->first();


        if(password_verify($request->emp_password, $emp->emp_password))
        {
             $empId = $emp->id;
             Session::put('empId',$empId);
             Session::put('empName',$emp->emp_name);
        $u = DB::table('works')
                    ->where('user_id','=',Session::get('empId',$empId))
                    ->count();



           $t1 = DB::table('works')
                    ->where('user_id','=',Session::get('empId',$empId))
                    ->sum('work_hour');


           
            $t2 = DB::table('works')
                    ->where('user_id','=',Session::get('empId',$empId))
                    ->sum('ex_min');



        $th = floor($t2 / 60);
        $hh = $t1+$th;

        $tm = ($t2 % 60); 

         $g = sprintf('%02d hours %02d minutes',$hh,$tm);



            return view('emp.dashboard.emp-dashboard',['u'=> $u, 'g'=>$g]);
        }
        else
        {
            return redirect('/user-login')->with('message','Invalid password');
        }
    }

    public function empLogout()
    {
    	Session::forget('empId');
        Session::forget('empName');
        

        return redirect('/');
    }



     public function index()
    {
        return view('emp.change.change-userpass');
    } 



 public function storeNewUserPassword(Request $request)
    {
        

        

        $request->validate([
            'current_password' => ['required', new MatchOldPassword1],
            'new_password' => 'required|max:8',
            'confirm_password' => ['same:new_password'],
        ]);






// $q = $request->current_password;


        $emp = Session::get('empId');


        // $user = Emp::where('id', '=', $emp)->first();







    // if(!Hash::check($q, $user->emp_password)){
    //     return redirect('/change-user-password')->with('message','The current password is not matched');

    // }else{
        Emp::where('id',$emp)->update(['emp_password'=> Hash::make($request->new_password)]);
         Session::forget('empId');
        Session::forget('empName');
        

        return view('front.front-login');

      
    // }




        
    }







    public function empBackDash()
    {

    
        $emp = Session::get('empId');
      


        $u = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->count();





        
           $t1 = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->sum('work_hour');


           
            $t2 = DB::table('works')
                    ->where('user_id','=',Session::get('empId'))
                    ->sum('ex_min');



        $th = floor($t2 / 60);
        $hh = $t1+$th;

        $tm = ($t2 % 60); 

         $g = sprintf('%02d hours %02d minutes',$hh,$tm);

       


            return view('emp.dashboard.emp-dashboard',['u'=>$u,'g'=>$g]);

    }




}
