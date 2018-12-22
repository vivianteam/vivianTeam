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
                  <form class="form form-horizontal" id="add_categories" action="{!! route('getAddProduct2')!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="form-body">
                      <h4 class="form-section">
                        <i class="ft-clipboard">
                        </i> Add new
                      </h4>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput6">Small categories
                        </label>
                        <div class="col-md-9">
                          <select id="projectinput6" value="{!! old('cmb_Small') !!}" name="cmb_Small" class="form-control">
                            <option value="0" disabled="">Small categories
                            </option>
                            @foreach($parent as $item)
                            <option value="{!! $item["id"] !!}">{!! $item["nameSmallCate"]!!}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Product name
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Product name"
                            name="txt_name" maxlength="50" required pattern="^[a-zA-Z ]*$" title="Category Name Invalid" value="{!! old('txt_name') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Description sort
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Description sort"
                            name="txt_sort" required pattern="^[a-zA-Z]*$" title="Category Name Invalid" value="{!! old('txt_sort') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Description long
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Description long"
                            name="txt_long" required pattern="^[a-zA-Z]*$" title="Category Name Invalid" value="{!! old('txt_long') !!}">
                        </div>
                      </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">Url Image
                          </label>
                          <div class="col-md-9">
                              <fieldset class="form-group">
                                <input type="file"  name="cateImage" id="chooseimg" class="form-control" required accept="image/gif, image/jpeg, image/png" value="{!! old('cateImage') !!}">
                              </fieldset>
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9"></label>
                        <div class="col-md-9">
                          <div class="form" style="border :1px solid #CACFE7">
                            <img id="image" height="200px" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Color
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Color"
                            name="txt_color" required pattern="^[a-zA-Z ]*$" title="Category Name Invalid" maxlength="30" value="{!! old('txt_color') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Size
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Size"
                            name="txt_size" required pattern="^[a-zA-Z]*$" title="Category Name Invalid" maxlength="5" value="{!! old('txt_size') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Price in
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Price in"
                            name="txt_in" required pattern="^[a-zA-Z0-9 ]*$" title="Category Name Invalid" value="{!! old('txt_in') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Price out
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Price out"
                            name="txt_out" required pattern="^[a-zA-Z0-9 ]*$" title="Category Name Invalid" value="{!! old('txt_out') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Price sale
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput5" class="form-control" placeholder="Price sale"
                            name="txt_sale" required pattern="^[a-zA-Z0-9 ]*$" title="Category Name Invalid" value="{!! old('txt_sale') !!}">
                        </div>
                      </div>
                      <div class="form-group row">
                    <label class="col-md-3 label-control" for="lname">New
                      <sup>*
                      </sup>
                    </label>
                    <div class="col-md-9">
                    <select id="txt_gender" value="{!!old('txt_New')!!}" name="txt_New" class="form-control">
                      <option value="0" id="txt_gender">New
                      </option>
                      <option value="1" id="txt_gender">Old
                      </option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="lname">Status
                      <sup>*
                      </sup>
                    </label>
                                            <div class="col-md-9">
                    <select id="txt_gender" value="{!!old('txt_Status')!!}" name="txt_Status" class="form-control">
                      <option value="Nam" id="txt_gender">Ready
                      </option>
                      <option value="Nữ" id="txt_gender">Sold Out
                      </option>
                    </select>
                  </div>
                    </div>
                    <div class="form-actions">
                      <a href="{{route('products')}}">
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
