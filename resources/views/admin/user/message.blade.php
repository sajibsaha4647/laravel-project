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
                        <a href="{{url('admin/user')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-plus-circle"></i> Add User</a>
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
                                <th>message</th>
                                <th>Reg. Time</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse($allusers as $data)
                            <tr>
                                <td>{{$data->conus_name}}</td>
                                <td>{{$data->conus_email}}</td>
                                <td>{{$data->conus_mess}}</td>
                                <td>{{\Carbon\Carbon::now()->addSeconds(1)->diffForHumans()}}</td>
                                <td>
                                  <a href="{{ url('admin/message/mark_as_read')}}/{{$data->conus_id}}"><i class="fa fa-eye-slash"></i></a>
                                  <a href="{{ url('admin/user/view')}}/{{$data->conus_id}}"><i class="fa fa-plus-square"></i></a>
                                  <a href="{{ url('admin/user/edit')}}/{{$data->conus_id}}"><i class="fa fa-pencil-square"></i></a>
                                  <a href="{{ url('admin/message/delete')}}/{{$data->conus_id}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <p>no more data here</p>
                            @endforelse
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
