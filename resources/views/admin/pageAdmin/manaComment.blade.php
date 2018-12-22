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
              <h4 class="card-title">All Comment
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
                        <th class="sorting_desc_disabled sorting_asc_disabled sorting">ID
                        </th>
                        <th>Content
                        </th>
                        <th>Created at
                        </th>
                        <th>ID_User
                        </th>
                        <th>ID_Product
                        </th>
                        <th>ID_Post
                        </th>
                        <th class="sorting_desc_disabled sorting_asc_disabled sorting">Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($getComments as $getComment)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td class="text-center">{{ $getComment->content }}
                      </td>
                      <td>
                        {{ $getComment->date }}
                      </td>
                      <td>
                        {{ $getComment->id_user }}
                      </td>
                      <td>
                        {{ $getComment->id_product}}
                      </td>
                      <td>
                        {{ $getComment->id_person}}
                      </td>
                      <td>
                        <a  href="{{route('getDeleteRequest',$getComment['id'])}}">
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
