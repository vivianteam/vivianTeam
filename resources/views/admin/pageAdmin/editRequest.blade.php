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
                <form class="form form-horizontal" action="{!! route('getEditRequest',$data['id'])!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Add new
                    </h4>
                    @include('admin.pageAdmin.error')
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">ID user
                      </label>
                      <div class="col-md-9">
                        <input type="text" id="projectinput5" class="form-control" placeholder="User name" name="txt_IdUser" value="{!! old('id_user',isset($data)? $data['id_user']: null)!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Url Image
                      </label>
                      <div class="col-md-9">
                          <fieldset class="form-group">
                            <input type="file" name="img" class="form-control-file" id="exampleInputFile" value="{!!old('img',isset($data)? $data['img']: null)!!}">
                          </fieldset>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="exampleFormControlTextarea1">Description
                      </label>
                      <div class="col-md-9">
                          <textarea id="exampleFormControlTextarea1" rows="5" class="form-control"  name="txt_Decription" value="{!! old('txt_Decription',isset($data)? $data['txt_Decription']: null) !!}">
                          </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <a href="{{route('request')}}">
                      <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x">
                        </i> Cancel
                      </button>
                    </a>
                    <button type="submit" class="btn btn-primary">
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
