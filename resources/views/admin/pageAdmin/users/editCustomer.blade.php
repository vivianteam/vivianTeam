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
                  <form class="form form-horizontal" action="{{ route('geteditCustomer',$data['id']) }}" method="POST" enctype="multipart/form-data" id="form-AddCustomer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Edit now
                      </h4>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">User name
                        </label>
                        <div class="col-md-9 ">
                          <input type="text" id="txt_name" class="form-control" placeholder="User name"
                            name="txt_name" required pattern="^[a-zA-Z ]*$" title="Name Invalid" value="{!! old('txt_name',isset($data)? $data['username']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Phone
                          </label>
                          <div class="col-md-9">
                              <fieldset class="form-group">
                                <input type="text" id="txt_phone" class="form-control" placeholder="Phone"
                            name="txt_phone" maxlength="10" pattern="(09|03|04|07|08|05)+([0-9]{8})\b" required title="invalid format Phone Number" value="{!! old('txt_phone',isset($data)? $data['phone']: null) !!}">
                              </fieldset>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Email
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="txt_email" class="form-control" placeholder="Email"
                            name="txt_email" required pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="Email Format Invalid" value="{!! old('txt_email',isset($data)? $data['email']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Address
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="txt_address" class="form-control" placeholder="Address"
                            name="txt_address" required value="{!! old('txt_address',isset($data)? $data['address']: null) !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Gender
                        </label>
                        <div class="col-md-9">
                        <select id="txt_gender"  name="txt_gender" class="form-control" required>
                          <option value="{!!old('txt_gender',isset($data)? $data['gender']: null)!!}" disabled=""></option>
                          <option value="Nữ" id="txt_gender">Famale
                          </option>
                          <option value="Nam" id="txt_gender">Male
                          </option>
                        </select>
                      </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <a href="{{route('getCustomer')}}">
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
