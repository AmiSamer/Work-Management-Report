<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\EmpController;
use App\Emp;
use Session;
use DB;

class MatchOldPassword1 implements Rule
{
     public function passes($attribute, $value)
    {
        
        

            // $q = $request->current_password;


        $emp = Session::get('empId');


        $user = Emp::where('id', '=', $emp)->first();

        return Hash::check($value, $user->emp_password);





        // $emp = Session::get('empId');

        // $uu  = DB::table('emps')
        //             ->where('id','=',$emp)
        //             ->get('emp_password');


        // $hashed = Hash::make($uu);

        // return Hash::check($value, $hashed);
    }
   
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not match with old password.';
    }
}
