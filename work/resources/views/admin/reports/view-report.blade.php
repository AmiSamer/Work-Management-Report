@extends('admin.mas.admin-master')

@section('body')
    <div class="container-fluid">
       <div class="" align="right">
           <a href="{{route('back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
        </div>
        <h1>View Work Reports</h1>
<h3 style="color: magenta">{{Session::get('message')}}</h3>
         
<br>
        


    <div class="container-fluid ">

<form action="{{route('search')}}" method="post" enctype="multipart/form-data">
            @csrf
                   
                       <div class="row col-md-12">
                           <div class="col-md-2" style="padding-top: 30px">
                         <select class="form-control " id="user_filter" name="worker_name" >
                        <option value="">- Users -</a></option>
                        @foreach($works->unique('emp_name') as $work)
                        
                            <option value="{{$work->user_id}}">{{$work->emp_name}}</option>
                          
                        @endforeach
                         </select> 
                       </div> 

                       <div class="col-md-2" style="padding-top: 30px">
                           <select class="form-control " name="project">
                        <option value="">- Projects -</option>
                        @foreach($works->unique('project_code') as $work)
                            <option value="{{$work->project_id}}">{{$work->project_name}}({{$work->project_code}})</option>
                        @endforeach
                           </select> 
                       </div> 

                      <!-- <div class="col-md-2" style="padding-top: 30px">
                           <select class="form-control " name="title" >
                        <option value="">--Title--</option>
                        @foreach($works as $work)
                            <option value="{{$work->work_title}}">{{$work->work_title}}</option>
                        @endforeach
                           </select> 
                       </div>  -->



                     <!--  <div class="col-md-2" style="padding-top: 30px">
                           <select class="form-control " name="desc" >
                        <option value="">--Description-- </option>
                        @foreach($works as $work)
                            <option value="{{$work->work_desc}}">{{$work->work_desc}}</option>
                        @endforeach
                           </select> 
                       </div>  -->


           

                  <!--  <div class="col-md-2" style="padding-top: 30px">
                           <select class="form-control" name="from">
                        <option value="">Start Date</option>
                        @foreach($works as $work)
                            <option value="{{$work->start_date}}">{{$work->start_date}}</option>
                        @endforeach
                           </select> 
                       </div>  -->






                       <div class="col-md-4 ">
                        <label><b>From Date</b></label>
                      <input type="date" name="from" class="form-control" list="fr" >
                        <datalist id="fr">
                           @foreach($works->unique('ustart_date') as $work)
                            <option value="{{$work->ustart_date}}">{{$work->ustart_date}}</option>
                        @endforeach
                        </datalist>
                       </div> 


                      <div class="col-md-4 ">
                        <label><b>To Date</b></label>
                      <input type="date" name="to" class="form-control" list="to">
                        <datalist id="to">
                           @foreach($works->unique('uend_date') as $work)
                            <option value="{{$work->uend_date}}">{{$work->uend_date}}</option>
                        @endforeach
                        </datalist>
                       </div> 


<!-- 
                        <div class="col-md-2" style="padding-top: 30px">
                           <select class="form-control " name="time" >
                        <option value="">--Working Time-- </option>
                        @foreach($works as $work)
                            <option value="{{$work->total_time}}">{{$work->total_time}}</option>
                        @endforeach
                           </select> 
                       </div>  -->



                       </div>
                                                                              
            
<br>
                   <!-- <input type="submit" name="btn" class="btn btn-primary"> -->
                   <button type="submit" name="btn" class="btn btn-primary">filter</button>

               
                    <br>
                    <br>
        
        </form>
        <div class="" align="right">
             <a href="{{route('all emp')}}"><button  type="button" name="btn" class="btn btn-success" href="">refresh</button></a>
        </div>

       
        <br>
       
</div>
 

        <table id="myTable" class="table table-striped display col-sm-12">
            <thead>
                <th scope="col" >Serial</th>
                <th scope="col" >User name</th>
                <th scope="col" >Project name</th>
                <th scope="col" >Work Title</th>
                <th scope="col" style="width:20%; align-items: center">Description</th>
                <th scope="col" >Start Date</th>
                <th scope="col" >End Date</th>
                <th scope="col" >Working time</th>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($works as $work)
                <tr>
                    <th scope="row" >{{$i++}}</th>
                    <td >{{$work->emp_name}}</td>
                    <td >{{$work->project_name}}</td>
                    <td >{{$work->work_title}}</td>
                    <td >{{$work->work_desc}}</td>

                    <td >{{ date('j F, Y', strtotime($work->ustart_date)) }}</td>
                   <!--  <td >{{$work->ustart_date}}</td> -->

                    <td >{{ date('j F, Y', strtotime($work->uend_date)) }}</td>
                  <!--   <td >{{$work->uend_date}}</td> -->

                    <td >{{$work->total_time}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection
