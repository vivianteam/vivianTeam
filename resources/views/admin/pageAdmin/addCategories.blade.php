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
                  <form class="form form-horizontal" id="add_categories" action="{!! route('getaddCategories')!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Category name
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Category name"
                            name="txt_CateNameTest" required pattern="^[a-zA-Z]*$" title="Category Name Invalid" value="{!! old('txt_CateNameTest') !!}">
                        </div>
                      </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Url Image
                          </label>
                          <div class="col-md-9">
                              <fieldset class="form-group">
                                <input type="file"  name="cateImage" id="chooseimg" multiple="multiple" class="form-control" required accept="image/gif, image/jpeg, image/png" value="{!! old('cateImage') !!}">
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
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Description</label>
                        <div class="col-md-9">
                          <textarea id="projectinput9" rows="5" class="form-control" placeholder="Description" accept="image/gif, image/jpeg, image/png" required name="txt_CateDecription">{!! old('txt_CateDecription') !!}</textarea>
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
