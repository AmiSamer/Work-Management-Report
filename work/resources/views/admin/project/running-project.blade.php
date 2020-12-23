@extends('admin.mas.admin-master')

@section('body')
    <div class="container-fluid">

       
        <div class="" align="right">
           <a href="{{route('back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
        </div>
        <h1>View Running Project list</h1>
        
       <br>
        <table id="myTable"  class="table table-striped">
            <thead>
            <tr>
                <th scope="col" >Serial</th>
                <th scope="col" >Project Name</th>
                <th scope="col" >Project Code</th>
                <th scope="col" style="width:20%; align-items: center">Description</th>
                <th scope="col" >Start Date</th>
                <th scope="col" >Estimated Date</th>
                
            </thead>
            <tbody>
            @php($i=1)
            @foreach($runs as $run)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td >{{$run->project_name}}</td>
                    <td >{{$run->project_code}}</td>
                    <td >{{$run->desc}}</td>
                    <td >{{ \Carbon\Carbon::parse($run->start_date)->format('j F, Y') }}</td>
                    <td >{{ \Carbon\Carbon::parse($run->esti_date)->format('j F, Y') }}</td>
                  
                </tr>



            @endforeach
            </tbody>
        </table>


    </div>
@endsection
