@extends('admin.mas.admin-master')

@section('body')
<div class="container-fluid">
	<h3 style="color: magenta">{{Session::get('message')}}</h3>
            <h1>Add Project</h1>
         <form action="{{route('save-project')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-8">
                <label for="projectname" style="color: black">Project Name <strong style="color: red">*</strong></label>
                <input type="text" class="form-control" name="project_name" id="projectname" required="">
            </div>

            <div class="form-group col-md-8">
                <label for="desc" style="color: black">Description <strong style="color: red">*</strong></label>
                <textarea class="form-control" name="desc" id="desc" required=""></textarea>
            </div>

            <!-- <div class="form-group col-md-8">
                <label for="projectcode">Project Code</label>
                <input type="number" class="form-control" name="project_code" id="projectcode">

            </div> -->

            <div class="form-group date-picker col-md-8">
                <label for="startdate" style="color: black">Start Date <strong style="color: red">*</strong></label>
                <input type="date" class="form-control"  name="start_date" id="startdate" required="">
            </div>


             <div class="form-group date-picker col-md-8">
                <label for="estidate" style="color: black">Estimated Closing Date <strong style="color: red">*</strong></label>
                <input type="date" class="form-control"  name="esti_date" id="estidate" required="">
            </div>


            <!-- 
            <div class="form-group">
                <label for="status">Publication Status</label>
                <div class="radio">
                    <input type="radio" name="status" value="1">Published
                    <input type="radio" name="status" value="0">Unpublished
                </div>
            </div> -->
            <input type="submit" name="btn" class="btn btn-primary">
        </form>
        
<div class="rcor">
  <a href="{{route('back-dash')}}"><i class="fas fa fa-window-close fa-2x"></i></a>
</div>
          
        </div>

@endsection