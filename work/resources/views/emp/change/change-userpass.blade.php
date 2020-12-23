
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Change Password</title>

<!--properties-->
<link href="{{asset('/properties/userpass properties')}}/css/userpass.css" rel="stylesheet">



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper ">

  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="first">
      <!-- <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" /> -->
      <br>
      <h1>{{Session::get('empName')}}</h1>
    </div>

    <!-- Login Form -->
    <div class="container">
      <form action="{{route('save-change-userpassword')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
         <input type="password" id="login" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Passowrd">
                        @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                         @enderror    
      </div>
      

    <div class="form-group">
      <input type="password" id="login" class="form-control  @error('new_password') is-invalid @enderror" name="new_password" placeholder="New Passowrd">

                               @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>

      
 <div class="form-group">
   <input type="password" id="login" class="form-control  @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="Confirm Passowrd">

          @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 </div>


       <button type="submit" name="btn" class="btn btn-primary ">Update</button>
    </form>
    </div>
    

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="{{route('emp-back-dash')}}">Back to Dashboard</a>
    </div>

  </div>
</div>