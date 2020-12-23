@extends('emp.emp-master')


@section('body')
<main class="main">
<div class="page-header">
            <div class="container">
                <h1>Registration</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading">

                    </div><!-- End .heading -->

                    <form action="{{route('save-register')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="name" name="emp_name" class="form-control" placeholder="Your Name" required>
                        <input type="email" name="emp_email" class="form-control" placeholder="Email Address" required>
                        <input type="password" name="emp_password" class="form-control" placeholder="Password" required>
                        <!-- <small class="text-danger">{{Session::get('message')}}</small>
 -->
                        <div class="form-footer">
                            <button type="submit" name="btn" class="btn btn-primary">REGISTER</button>
                            <!-- <a href="forgot-password.php" class="forget-pass"> Forgot your password?</a> -->
                        </div><!-- End .form-footer -->
                       
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">

                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div>
</main>
@endsection