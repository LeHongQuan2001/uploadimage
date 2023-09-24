@extends('Admin.layout.main');
@section('content');
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="{{route('category.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="nameCategory">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">File</label>
            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="File" name="image">
          </div>
        {{-- <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div> --}}
       
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

@endsection;