@extends('layouts.app')

@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('admin/course/add') }}" class="btn btn-primary">Add New Course </a>
          </div>



        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Search Course</h3>
              </div>
              <form method="get" action="">
                <div class="card-body">
                  <div class="row">

                  
                  <div class="form-group col-md-3">
                    <lable>Course Code</lable>
                    <input type="text" class='form-control' value="{{Request::get('courseCode')}}" courseCode="courseCode"
                    placeholder="courseCode">
                  </div>
                  <div>
                    <lable>Course Name</lable>
                    <input type="text" class='form-control' value="{{Request::get('courseName')}}" courseName="courseName"
                    placeholder="courseName">
                  </div>
                  <div>
                    <lable>Course Details</lable>
                    <input type="text" class='form-control' value="{{Request::get('Details')}}" Details="Details"
                    placeholder="Details">
                  </div>

                  <div class="form-group col-md-3">
                    <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Search</button>
                    <a href="{{ url('admin/course/list')}}" class="btn btn-success" style="margin-top: 30px;">Reset</a>
                  </div>

                </div>
              </div>
            </form>
          </div>


        @include('_message')

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Course List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Course Code</th>
                      <th>Course Name</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                    <tr>
                      <td>{{ $value->courseCode}}</td>
                      <td>{{ $value->courseName}}</td>
                      <td>{{ $value->Details}}</td>
                      <td>Action</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                <div style="padding: 10px; float: right;">
                </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection