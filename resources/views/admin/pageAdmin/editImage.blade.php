@extends('masterAdmin')
@section('content')
<style type="text/css">
  .error{
    color: red;
  }
</style>
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
                <form class="form form-horizontal" id= "edit_image_form"action="{!! route('getEditImageProduct',$data['id'])!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Edit now
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_proEdit">Product Name</label>
                      <div class="col-md-9">
                        <select id="cmb_proEdit" name="cmb_proEdit" class="form-control" required>
                          <option value="{!!old('cmb_proEdit',isset($data)? $data['id_product']: null)!!}"  disabled="">Product name
                          </option>
                          @foreach($parent as $item)
                          <option value="{!! $item["id"] !!}">{!! $item["name"]!!}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="chooseimg">Url Image
                      </label>
                      <div class="col-md-9">
                          <fieldset class="form-group">
                            <input type="file" name="img" class="form-control-file" id="chooseimg" required accept="image/gif, image/jpeg, image/png" value="{!!old('img',isset($data)? $data['image']: null)!!}">
                          </fieldset>
                      </div>
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Image</label>
                      <div class="col-md-9">        
                          <div class="form" style="border :1px solid #CACFE7">
                            <img id="image" height="200px" />
                          </div>
                      </div>
                  </div>  
                  </div>
                  <div class="form-actions">
                    <a href="{{route('imageProduct')}}">
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
