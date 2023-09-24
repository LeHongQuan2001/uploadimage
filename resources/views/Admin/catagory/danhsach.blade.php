@extends('Admin.layout.main');
@section('content');
@if(session()->has('mess'))
<div class="alert alert-success">
    {{ session()->get('mess')}}
</div>
@endif
<div class="alert-link"></div>
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>
<div class="row">
    <div class="row">
        <div class="col-sm-6"><a href="{{route('category.create')}}" class="btn btn-app">Theem</a></div>
    </div>
    <div class="col-sm-12">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
            aria-describedby="example2_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                        Rendering engine</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Browser</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending">Engine version</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                </tr>
            </thead>
            <tbody>

              
            @foreach ($data as $key=>$item)
                <tr>
                 <td>{{$key+1}}</td>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->image}}</td>
                  <td><img src="{{asset($item->image)}}" style="width: 40px"></td>
                  <td>{{$item->parent_id}}</td>
                  <td>{{$item->is_active}}</td>
                </tr>
                @endforeach

                    
                 
            </tbody>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of
                        57 entries</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </table>
    </div>
</div>
@endsection;