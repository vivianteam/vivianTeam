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
                <form method="POST" class="form form-horizontal" action="{!! route('getAddProduct')!!}" enctype="multipart/form-data" id="addProduct_form">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Add new
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_Small">Small categories</label>
                      <div class="col-md-9">
                        <select id="cmb_Small" value="{!! old('cmb_Small') !!}" name="cmb_Small" class="form-control" required>
                          <option value="0" disabled=""></option> 
                          @foreach($parent as $item)
                          <option value="{!! $item["id"]!!}" >{!! $item["nameSmallCate"]!!}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_name">Product name
                      </label>
                      <div class="col-md-9">
                        <input type="text" id="txt_name" class="form-control" placeholder="Product name"name="txt_name" required pattern="^[a-zA-Z ]*$" title="Product Name Invalid" value="{!! old('txt_name') !!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_dsort">Description sort</label>
                      <div class="col-md-9">
                        <textarea id="txt_dsort" value="{!!old('txt_dsort')!!}" rows="5" class="form-control" name="txt_dsort" placeholder="Description sort" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Description long</label>
                      <div class="col-md-9">
                        <textarea id="projectinput9" value="{!!old('txt_dlong')!!}" rows="5" class="form-control" name="txt_dlong" placeholder="Description long" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Url Image</label>
                        <div class="col-md-9">
                            <fieldset class="form-group">
                              <input type="file" id="chooseimg" name="proImg" multiple="multiple" class="form-control" required accept="image/gif, image/jpeg, image/png" value="{!! old('proImg') !!}">
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
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_Color">Color</label>
                      <div class="col-md-9">
                        <input type="text" name="txt_Color" id="txt_Color" class="form-control" value="{!!old('txt_Color')!!}" required pattern="^[a-zA-Z ]*$" title="Example: Red" placeholder="Color">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_Size">Size</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_Size" class="form-control" pattern="^[a-zA-Z0-9 ]*$" placeholder="Size" required name="txt_Size" value="{!!old('txt_Size')!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceIn">Price in</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceIn" class="form-control" placeholder="Price in" name="txt_PriceIn" required pattern="^(0|[1-9][0-9]*)$" title="Only Number" value="{!!old('txt_PriceIn')!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceOut">Price out</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceOut" class="form-control" placeholder="Price out" name="txt_PriceOut" required pattern="^(0|[1-9][0-9]*)$" title="Only Number" value="{!!old('txt_PriceOut')!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceSale">Price sale</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceSale" class="form-control" placeholder="Price sale" name="txt_PriceSale" required pattern="^(0|[1-9][0-9]*)$" title="Only Number" value="{!!old('txt_PriceSale')!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_New">New</label>
                      <div class="col-md-9">
                        <select id="cmb_New" value="{!!old('cmb_New')!!}" name="cmb_New" class="form-control">
                          <option value="1">New</option>
                          <option value="0">Old</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_Satus">Status</label>
                      <div class="col-md-9">
                        <select id="cmb_Satus" value="{!!old('cmb_Satus')!!}" name="cmb_Satus" class="form-control">
                          <option value="design">Ready</option>
                          <option value="development">Sold out</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <a href="{{ route('products')}}">
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
