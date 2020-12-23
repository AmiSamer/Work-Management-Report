@extends('emp.dashboard.empdash-master')

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
        <h1  style="color: black">View Work list</h1>
        <table id="myTable"  class="table table-striped col-sm-12">
            <thead>
            <tr>
                <th scope="col"  >Serial</th>
                <th scope="col"  >Project</th>
                <th scope="col"  >Work Title</th>
                <th scope="col" style="width:20%; align-items: center">Description</th>
                <th scope="col"  >Start Date</th>
                <th scope="col"  >End Date</th>
                <th scope="col"  >Daily Working Time</th>
                <th scope="col"  >Action</th>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($ws as $w)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td >{{$w->project_name}} <b>({{$w->project_code}})</b></td>
                    <td >{{$w->work_title}}</td>
                    <td >{{$w->work_desc}}</td>
                    <td >{{$w->ustart_date}}</td>
                    <td >{{$w->uend_date}}</td>
                    <td >{{$w->total_time}}</td>
                    <td><a type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$w->id}}">
                            <i class="fas fa-edit"></i>
                        </a></td>
                </tr>


                 <!-- Modal -->
 <div class="modal fade" id="edit{{$w->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Work</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update-work')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Work Title</label>
                                        <input type="text" class="form-control" name="work_title" value="{{$w->work_title}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$w->id}}">
                                    </div>

                                
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="work_desc">{{$w->work_desc}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control"  name="ustart_date" value="{{$w->ustart_date}}">
                                    </div>

                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" class="form-control"  name="uend_date" value="{{$w->uend_date}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Hours</label>
                                        <input type="number" class="form-control" min="1" max="10" name="work_hour" value="{{$w->work_hour}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Minutes</label>
                                        <input type="number" class="form-control" max="59" name="ex_min" value="{{$w->ex_min}}">
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
        <br>
        <br>
        <div class="rcor">
  <a href="{{route('emp-back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
</div>
       <!--  <h4>Total Working Hours : {{$g}}</h4> -->
    </div>
@endsection
