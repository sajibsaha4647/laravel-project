@extends('layouts.admin')
@section('main-page')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_header_text">
                        <i class="fa fa-th"></i> View User Information
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('admin/message')}}" class="btn btn-dark btn-sm card_button"><i class="fa fa-th"></i> view contact</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 card_view_part">
                      <table class="table table-striped table-bordered view_data_table">
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                {{$contact_view->conus_name}}
                            </td>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                {{$contact_view->conus_email}}
                            </td>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                              {{$contact_view->conus_mess}}
                            </td>
                          </tr>
                      </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
