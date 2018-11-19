@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-lg-12">
                @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!! Session::get('flash_message') !!}
                  </div>
                @endif
              </div>
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All product
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="{{route('getAddProduct')}}">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i>
                  </button>
                </a>
              </div>
            </div>
            <div class="card-header">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ft-search"></i></span>
                        </div>
                        <input type="text" class="form-control ac-default" />
                      </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="users-contacts" class="table table-striped table-bordered row-grouping display no-wrap icheck table-middle">
                  <thead>
                    <tr>
                      <th>ID
                      </th>
                      <th>Name
                      </th>
                       <th>Image
                      </th>
                      <th>Description sort 
                      </th>
                      <th>Size
                      </th>
                      <th>Price in
                      </th>
                      <th>Price out
                      </th>
                      <th>Price sale
                      </th>
                      <th>New 
                      </th>
                      <th>Status
                      </th>
                      <th>Id small cate
                      </th>
                      <th>Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($products as $product)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td>
                        {{ $product->name }}
                      </td>
                      <td class="text-center">
                        <img src="{{asset('image/')}}/bogs/{{ $product->image }}" style='max-width:80px;max-height:200px' class='img img-thumbnail' />
                      </td>
                      <td class="text-center">
                        {{ $product->descriptions_sort}}
                      </td>
                      <td class="text-center">
                        {{ $product->size}}
                      </td>
                      <td class="text-center">
                        {{number_format($product->price_in)}}
                      </td>
                      <td class="text-center">
                        {{number_format($product->price_out)}}
                      </td>
                      <td class="text-center">
                        {{number_format($product->price_sale)}}
                      </td>
                       <td class="text-center">
                        {{ $product->new}}
                      </td>
                      <td class="text-center">
                        {{ $product->status}}
                      </td>
                      <td class="text-center">
                        {{ $product->id_small_categories}}
                      </td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                            <i class="ft-settings">
                            </i>
                          </button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="{{route('getEditProduct',$product['id'])}}" class="dropdown-item">
                              <i class="ft-edit-2">
                              </i> Edit
                            </a>
                            <a href="{{route('getDeleteProducts',$product['id'])}}" class="dropdown-item">
                              <i class="ft-trash-2">
                              </i> Delete
                            </a>
                          </span>
                        </span>
                      </td>
                   </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
