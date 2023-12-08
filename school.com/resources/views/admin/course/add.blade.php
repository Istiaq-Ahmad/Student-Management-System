@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          	<h1>Add New Course</h1>
          </div>
        </div>
      </div>
    </section>

      
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <div class="card card-primary">
            	<form method="post" action="">
            		{{ csrf_field() }}

            		<div class="card-body">

            			<div class="form-group">
            				<label> Course Code</label>
            				<input type="text" class= "form-control" name="courseCode" required placeholder= "Course Code">
           				 </div>

           				 <div class="form-group">
           				 	<label> Course Name</label>
           				 	<input type="text" class= "form-control" name="courseName" required placeholder= "Course Name">
           				 </div>

           				 <div class="form-group">
           				 	<label> Details</label>
           				 	<input type="text" class= "form-control"  name="Details" required placeholder= "Details">
           				 </div>

            		</div>
            	<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            	
            	</form>
           
            </div>

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
