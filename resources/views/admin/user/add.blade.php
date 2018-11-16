@extends('layouts.admin')
@section('main-page')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8 card_header_text">
                          <i class="fa fa-th"></i> User Registration
                      </div>
                      <div class="col-md-4 text-right">
                          <a href="#" class="btn btn-dark btn-sm card_button"><i class="fa fa-th"></i> All User</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-9 card_form_part">
                      <form method="post" action="{{url('admin/user/registration')}}">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Password:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Confirm Password:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="" name="rpassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">User Role:</label>
                            <div class="col-sm-5">
                              <select id="" class="form-control select_box" name="role">
                                <option value="" selected>Select Role</option>
                                <option value="1">1</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-info btn-sm" type="submit" name="button">REGISTRATION</button>
              </div>
           </form>
        </div>
      </div>
    </div>
</div>
@endsection
