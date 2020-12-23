@extends('admin.mas.admin-master')

@section('body')
    <div class="container-fluid">

        @if(Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="" align="right">
           <a href="{{route('back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
        </div>
        <h1>View Project list</h1>
        
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
                <th scope="col" >End Date</th>
                <th scope="col" >Action</th>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($projects as $project)
                <tr>
                    <th scope="row" >{{$i++}}</th>
                    <td >{{$project->project_name}}</td>
                    <td >{{$project->project_code}}</td>
                    <td >{{$project->desc}}</td>
                    <td >{{ \Carbon\Carbon::parse($project->start_date)->format('j F, Y') }}</td>
                    <td >{{ \Carbon\Carbon::parse($project->esti_date)->format('j F, Y') }}</td>
                    <td >{{ $project->end_date }}</td>
                    <td><a type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$project->id}}">
                            <i class="fas fa-edit"></i>
                        </a>

                       <!--  <a href="{{route('delete-project',['id'=>$project->id])}}" type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a> -->


                    </td>
                </tr>



                 <!-- Modal -->
                <div class="modal fade" id="edit{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Project Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update-project')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Project Code</label>
                                        <input type="text" readonly="" class="form-control" name="project_code" value="{{$project->project_code}}">
                                        {{--                                        <input type="hidden" class="form-control" name="id" value="{{$project->id}}">--}}
                                    </div>

                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" name="project_name" value="{{$project->project_name}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$project->id}}">
                                    </div>

                                    

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="desc">{{$project->desc}}</textarea>
                                    </div>

                                     
                                     <div class="form-group date-picker">
                                        <label>Start Date</label>
                                    <input type="date" class="form-control" id="startdate" name="start_date" value="{{$project->start_date}}">
                                    </div>



                                    <div class="form-group date-picker">
                                        <label>End Date</label>
                                    <input type="date" class="form-control" id="estidate" name="end_date" value="">
                                    </div>

                                    <input type="submit" name="btn" class="btn btn-primary" value="update">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </tbody>
        </table>


    </div>
@endsection
