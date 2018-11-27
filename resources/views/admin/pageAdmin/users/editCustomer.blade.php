@extends('masterAdmin')
@section('content')     

<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-content collpase show">
                <div class="card-body">
                  <form class="form form-horizontal" action="{!! route('getCustomer')!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4>
                       @include('admin.pageAdmin.error')
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">User name
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="User name"
                            name="txt_name" value="{!! old('txt_name',isset($data)? $data['username']: null) !!}">
                        </div>
                      </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Phone
                          </label>
                          <div class="col-md-9">
                              <fieldset class="form-group">
                                <input type="text" id="projectinput5" class="form-control" placeholder="Phone"
                            name="txt_phone" value="{!! old('txt_phone',isset($data)? $data['phone']: null) !!}">
                              </fieldset>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Emaill
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Emaill"
                            name="txt_email" value="{!! old('txt_email',isset($data)? $data['email']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Address
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Address"
                            name="txt_address" value="{!! old('txt_address',isset($data)? $data['address']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Gender
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Gender"
                            name="txt_gender" value="{!! old('txt_gender',isset($data)? $data['gender']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Password
                        </label>
                        <div class="col-md-9">
                          <input type="password" id="projectinput5" class="form-control" placeholder="Password"
                            name="txt_password" value="{!! old('txt_password',isset($data)? $data['password']: null) !!}">
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <a href="categories">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x">
                          </i> Cancel
                        </button>
                      </a>
                      <button type="submit" class="btn btn-primary" ">
                        <i class="la la-check-square-o">
                        </i> Save
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>      
          </div>
        </div>
    </section>
    <!-- // Basic form layout section end -->
  </div>
</div>
@endsection
