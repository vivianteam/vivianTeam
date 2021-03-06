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
                <form class="form form-horizontal" id="addImgForm" action="{!! route('getAddImageProduct')!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Add new
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">ID product
                      </label>
                      <div class="col-md-9">
                        <select id="cmb_pro_Add" name="cmb_pro_Add" class="form-control" required>
                          <option value="{!!old('cmb_pro_Add')!!}" selected="" disabled="">Product name
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
                            <input type="file"  name="img" class="form-control-file" id="chooseimg" required accept="image/gif, image/jpeg, image/png" value="{!!old('img')!!}">
                          </fieldset>
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
                  <div class="form-actions">
                    <a href="categories">
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
