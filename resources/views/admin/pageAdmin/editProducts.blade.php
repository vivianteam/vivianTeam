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
                <form class="form form-horizontal" id="editProduct_form" action="{!! route('getEditProduct',$data['id'])!!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Add new
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_Small">Small categories
                      </label>
                      <div class="col-md-9">
                        <select id="cmb_Small" value="{!! old('cmb_Small',isset($data)? $data['name']: null) !!}" name="cmb_Small" class="form-control">
                          <option value="" selected="" disabled="">Categories name
                          </option>
                           @foreach($parent as $item)
                          <option value="{!! $item["id"] !!}">{!! $item["nameSmallCate"]!!}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_name">Product name
                      </label>
                      <div class="col-md-9">
                        <input type="text" id="txt_name" class="form-control" placeholder="Product name"
                               name="txt_name" value="{!! old('txt_name',isset($data)? $data['name']: null) !!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_dsort">Description sort</label>
                      <div class="col-md-9">
                        <textarea id="txt_dsort" value="{!!old('txt_dsort',isset($data)? $data['descriptions_sort']: null)!!}" rows="5" class="form-control" name="txt_dsort" placeholder="Description sort"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_dlong">Description long</label>
                      <div class="col-md-9">
                        <textarea id="txt_dlong" value="{!!old('txt_dlong',isset($data)? $data['descriptions_long']: null)!!}" rows="5" class="form-control" name="txt_dlong" placeholder="Description long"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput9">Url Image</label>
                        <div class="col-md-9">
                            <fieldset class="form-group">
                              <input type="file" id="chooseimg" name="proImg" multiple="multiple" class="form-control" value="{!! old('proImg') !!}">
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
                        <input type="text" id="txt_Color" class="form-control" placeholder="Color" value="{!!old('txt_Color',isset($data)? $data['color']: null)!!}" 
                               name="txt_Color">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_Size">Size</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_Size" class="form-control" placeholder="Size"
                               name="txt_Size" value="{!!old('txt_Size',isset($data)? $data['size']: null)!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceIn">Price in</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceIn" class="form-control" placeholder="Price in"
                               name="txt_PriceIn" value="{!!old('txt_PriceIn',isset($data)? $data['price_in']: null)!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceOut">Price out</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceOut" class="form-control" placeholder="Price out"
                               name="txt_PriceOut" value="{!!old('txt_PriceOut',isset($data)? $data['price_out']: null)!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="txt_PriceSale">Price sale</label>
                      <div class="col-md-9">
                        <input type="text" id="txt_PriceSale" class="form-control" placeholder="Size"
                               name="txt_PriceSale" value="{!!old('txt_PriceSale',isset($data)? $data['price_sale']: null)!!}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_New">New
                      </label>
                      <div class="col-md-9">
                        <select id="cmb_New" value="{!!old('cmb_New',isset($data)? $data['new']: null)!!}" name="cmb_New" class="form-control">
                          <option value="none" selected="" disabled="">New
                          </option>
                          <option value="1">Mới
                          </option>
                          <option value="0">Cũ
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="cmb_Satus">Status
                      </label>
                      <div class="col-md-9">
                        <select id="cmb_Satus" value="{!!old('cmb_Satus',isset($data)? $data['status']: null)!!}" name="cmb_Satus" class="form-control">
                          <option value="none" selected="" disabled="">Status
                          </option>
                          <option value="Còn">Còn
                          </option>
                          <option value="Hết">Hết
                          </option>
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
<!--VIM add JS validate-->
    <script type="text/javascript">
      $(function() {
        $('#editProduct_form').validate({
          rules : {
            cmb_Small : {
              required : true   
            },

            txt_name : {
              required : true
            },

            txt_dsort : {
              required : true
            },
            
            txt_dlong : {
              required : true   
            },

            proImg : {
              required : true
            },

            txt_Color : {
              required : true   
            },

            txt_Size : {
              required : true   
            },

            txt_PriceIn : {
              required : true   
            },

            txt_PriceOut : {
              required : true   
            },

            txt_PriceSale : {
              required : true   
            },

            cmb_New : {
              required : true   
            },

            cmb_Satus : {
              required : true   
            }
          },

          messages : {
            cmb_Small : {
              required : "You must fill information"  
            },

            txt_name : {
              required : "You must fill information"
            },

            txt_dsort : {
              required : "you must fill information"
            },

            txt_dlong : {
              required : "You must fill information" 
            },

            proImg : {
              required : "You must fill information"  
            },

            txt_Color : {
              required : "You must fill information"
            },

            txt_Size : {
              required : "you must fill information"
            },

            txt_PriceIn : {
              required : "You must fill information" 
            },

            txt_PriceOut : {
              required : "You must fill information"  
            },

            txt_PriceSale : {
              required : "You must fill information"
            },

            cmb_New : {
              required : "you must fill information"
            },

            cmb_Satus : {
              required : "you must fill information" 
            }
          },
        });
      })
    </script>
@endsection
