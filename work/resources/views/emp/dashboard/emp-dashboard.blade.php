@extends('emp.dashboard.empdash-master')

@section('body')
<div class="container-fluid" >
 <h2 style="color: black" align="center"><b>User Dashboard</b></h2>
<br>
<br>
<!-- <div class="row col-md-4 col-sm-12" style="background-color: #F63C41; padding-top: 15px; padding-bottom: 15px">
	
         
          <h4 style="color: white">Total number of projects : {{$u}}</h4>
</div> -->

<div class="row ml-auto">
  &nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
	<div  class="card text-white bg-danger mb-3" style="max-width: 25rem;">
  <div class="card-header bg-gradient-danger mb-3"><h5>Total number of projects</h5></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Total number of projects</h5> -->
    <p class="card-text" ><b><h1  align="center">{{$u}}</h1></b></p>
  </div>
</div>

&nbsp;
&nbsp;
&nbsp;

<div  class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header bg-gradient-danger mb-3"><h5 align="center">Total working hours</h5></div>
  <div class="card-body">
    <!-- <h5 class="card-title">Total working time</h5> -->
    <p class="card-text" ><b><h3  align="center">{{$g}}</h3></b></p>
  </div>
</div>
</div>

<br>

<!-- <div class="row col-md-5 col-sm-12" style="background-color: #F63C41; padding-top: 15px; padding-bottom: 15px">
	<h4 style="color: white">Total working time : {{$g}}</h4>
</div> -->

 

          <br>
          <br>
        </div>
@endsection