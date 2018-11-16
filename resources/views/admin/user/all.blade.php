@extends('layouts.admin')
@section('main-page') 
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> All User
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/user/add')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-plus-circle"></i> Add User</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="allTable" class="table table-bordered table-striped table-hover customize_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User create</th>
                                <th>User role</th>
                                <th>Reg. Time</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($alluser as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->getRoleName->role_name}}</td>
                                <td>{{$data->created_at->format('d-m-y')}}</td>
                                <td>{{\Carbon\Carbon::now()->addSeconds(5)->diffForHumans()}}</td>
                                <td>
                                  <a href="#"><i class="fa fa-plus-square"></i></a>
                                  <a href="#"><i class="fa fa-pencil-square"></i></a>
                                  <a href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-info btn-sm">Print</a>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
