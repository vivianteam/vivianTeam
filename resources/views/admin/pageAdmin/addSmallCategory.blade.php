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
                  <form class="form form-horizontal" id="add_small_categories_form"action="{!! route('getaddSmallCategory')!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4>
                       <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput6">Categories
                        </label>
                        <div class="col-md-9">
                          <select id="projectinput6" value="{!! old('cmb_Small') !!}" name="cmb_Small" class="form-control">
                            <option value="0" disabled="">Categories name
                            </option>
                            @foreach($parent as $item)
                            <option value="{!! $item["id"] !!}">{!! $item["name"]!!}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Small category name
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Category name" name="txt_SmallCateName" required pattern="^[a-zA-Z ]*$" title="Small Category Name Invalid" value="{!! old('txt_SmallCateName') !!}">
                        </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Description
                        </label>
                        <div class="col-md-9">
                          <textarea id="projectinput9" rows="5" class="form-control" name="txt_SmallCateDecription" required>{!! old('txt_SmallCateDecription') !!}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <a href="smallCategory">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x">
                          </i> Cancel
                        </button>
                      </a>
                      <button type="submit" class="btn btn-primary" >
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
