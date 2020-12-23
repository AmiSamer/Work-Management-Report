@extends('admin.mas.admin-master')

@section('body')
    <div class="container-fluid">

       
        <div class="" align="right">
           <a href="{{route('back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
        </div>
        <h1>View Completed Project list</h1>
        
       <br>
        <table id="myTable"  class="table table-striped">
            <thead>
            <tr>
                <th scope="col" >Serial</th>
                <th scope="col" >Project Name</th>
                <th scope="col" >Project Code</th>
                <th scope="col" style="width:20%; align-items: center">Description</th>
                <th scope="col" >Start Date</th>
                <th scope="col" >End Date</th>
                
            </thead>
            <tbody>
            @php($i=1)
            @foreach($coms as $com)
                <tr>
                    <th scope="row" >{{$i++}}</th>
                    <td >{{$com->project_name}}</td>
                    <td >{{$com->project_code}}</td>
                    <td >{{$com->desc}}</td>
                    <td >{{ \Carbon\Carbon::parse($com->start_date)->format('j F, Y') }}</td>
                    
                    <td >{{ \Carbon\Carbon::parse($com->end_date)->format('j F, Y') }}</td>
                    
                   

                  
                </tr>



            @endforeach
            </tbody>
        </table>


    </div>
@endsection
