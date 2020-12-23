


@extends('emp.dashboard.empdash-master')

@section('body')
<div class="container-fluid" >
 
<h1>Change your current password</h1>
<!-- <strong style="color: red">{{Session::get('message')}}</strong> -->
<div class="row">
                <div class="col-md-6">
                    <div class="heading">

                    </div><!-- End .heading -->

                    <form action="{{route('save-change-userpassword')}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <!-- @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach  -->

                        <input id="current_password" type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror"  placeholder="Current Password" >
                       

                       @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                         @enderror      

                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password">

                         @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm New Password">

                         @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <!-- <small class="text-danger">{{Session::get('message')}}</small>
 -->
                        <div class="form-footer">
                            <button type="submit" name="btn" class="btn btn-primary">update password</button>
                            <!-- <a href="forgot-password.php" class="forget-pass"> Forgot your password?</a> -->
                        </div><!-- End .form-footer -->
                       
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">

                </div><!-- End .col-md-6 -->
            </div>



</div>
@endsection