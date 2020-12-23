@extends('emp.dashboard.empdash-master')

@section('body')
<div class="container-fluid">
	<h3 style="color: magenta">{{Session::get('message')}}</h3>
            <h1 style="color: black">Add Work Update</h1>
         <form action="{{route('save-work')}}" method="post" enctype="multipart/form-data">
            @csrf

<div hidden="">
    {{$pp = Session::get('empId')}}
    <h1>{{$pp}}</h1>
</div>


                <select class="form-control col-md-8" name="project_fullname" required="">
                        <option value="">- Project Name -</option>
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->project_name}}</option>
                        @endforeach
                    </select>
<br>
            <div class="form-group col-md-8">
                <label  style="color: black">Work Title <strong style="color: red">*</strong></label>
                <input type="text" class="form-control" name="work_title" id="worktitle" required="">
            </div>

            <div class="form-group col-md-8">
                <label  style="color: black">Work Description <strong style="color: red">*</strong></label>
                <textarea class="form-control" name="work_desc" id="workdesc" required=""></textarea>
            </div>


            <div class="form-group date-picker col-md-8">
                <label for="startdate"  style="color: black">Start Date <strong style="color: red">*</strong></label>
                <input type="date" class="form-control" name="ustart_date" id="startdate" required="">
            </div>

            <div class="form-group date-picker col-md-8">
                <label for="enddate"  style="color: black">End Date</label>
                <input type="date" class="form-control" name="uend_date" id="enddate">
            </div>


             <div class="form-group  col-md-8">
                <label for="workhour"  style="color: black">Hours <strong style="color: red">*</strong></label>
                <input type="number" class="form-control" name="work_hour" min="0" max="10" id="workhour" required="">
            </div>

            <div class="form-group col-md-8">
                <label for="exmin"  style="color: black">Minutes <strong style="color: red">*</strong></label>
                <input type="number" class="form-control" name="ex_min" max="59" id="exmin" required="">
            </div>

            <input type="submit" name="btn" class="btn btn-primary">
            <br>
            <br>
        </form>
          <div class="rcor">
  <a href="{{route('emp-back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
</div>
        </div>

@endsection