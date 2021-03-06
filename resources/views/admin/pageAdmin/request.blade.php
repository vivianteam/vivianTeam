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
              <h4 class="card-title">All Request
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              
            </div>
            
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
     <thead>
                      <tr>
                        <th>ID
                        </th>
                        <th>Image
                        </th>
                        <th>Created at
                        </th>
                        <th>Decription
                        </th>
                        <th>Comment
                        </th>
                        <th class="sorting_desc_disabled sorting_asc_disabled sorting">Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($requests as $request)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td class="text-center"><img src="{{asset('image/')}}/bogs/{{ $request->image }}" style='max-width:80px;max-height:200px' class='img img-thumbnail' />
                      </td>
                      <td>
                        {{ $request-> created_at }}
                      </td>
                      <td>
                        {{ $request-> description }}
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        <a  href="{{route('getDeleteRequest',$request['id'])}}">
                          <button  class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeItem" data-placement="top" rel="tooltip" data-original-title="" title="Remove item">
                            <span class="glyphicon glyphicon-remove">
                            </span>Remove
                          </button>
                        </a>
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
