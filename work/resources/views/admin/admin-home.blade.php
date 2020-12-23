@extends('admin.mas.admin-master')

@section('body')
<div class="container-fluid ">
          <h2 style="color: rgb(87, 98, 96)" align="center"><b>Admin Dashboard</b></h2>
          <br>
          <br>
          <br>
         

<div class="row col-sm-12 col-md-12 ml-auto">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
  <div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
  <div class="card-header bg-gradient-primary mb-3"><h5><a href="{{route('view-project')}}" style="color: white">Total number of projects</a></h5></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Total number of projects</h5> -->
    <p class="card-text" ><b><h1  align="center">{{$projects}}</h1></b></p>
  </div>
</div>

&nbsp;
&nbsp;
&nbsp;


<div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
  <div class="card-header bg-gradient-primary mb-3"><h5><a href="{{route('run')}}" style="color: white">Total number of running projects</a></h5></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Total number of running projects</h5> -->
    <p class="card-text" ><b><h1  align="center">{{$runnings}}</h1></b></p>
  </div>
</div>

&nbsp;
&nbsp;
&nbsp;

<div class="card text-white bg-primary mb-3" style="max-width: 23rem;">
  <div class="card-header bg-gradient-primary mb-3"><h5><a href="{{route('com')}}" style="color: white">Total number of completed projects</a></h5></div>
  <div class="card-body">
   <!--  <h5 class="card-title">Total number of completed projects</h5> -->
    <p class="card-text" ><b><h1  align="center">{{$com}}</h1></b></p>
  </div>
</div>

</div>





<!-- <div class="container">
	<div class="row col-md-5 col-sm-12" style="background-color: powderblue; height: 60px" id="div1" >
			<h4 style="color: black; padding-top: 15px">Total number of projects : <b>{{$projects}}</b></h4>	
	</div>
<br>
     <div class="row col-md-6 col-sm-12" style="background-color: powderblue" id="div1">
        <h4 style="color: black; padding-top: 15px">Total number of running projects : <b>{{$runnings}}</b></h4>
      </div>
<br>
      <div class="row col-md-6 col-sm-12" style="background-color: powderblue" id="div1">
      	<h4 style="color: black; padding-top: 15px">Total number of completed projects : <b>{{$com}}</b></h4>
     </div>

</div>
	
</div>

</div> -->
<br>
<br>

        
       
  </div>
@endsection