@extends('masterAdmin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
              <h4 class="card-title">All Customers
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="{{asset('getCustomer')}}">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i> 
                  </button>
                </a>
              </div>
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
                      <th>Use name
                      </th>
                      <th>Phone
                      </th>
                      <th>Email
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting">Address
                      </th>
                      <th>Gender
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting" >Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($customers as $customer)
                    <?php $stt=$stt+1 ;
                    ?>
                   
                    <tr>
                      <td >{!!$stt!!}
                      </td>
                      <td>{{$customer->username}}
                      </td>
                      <td>{{$customer->phone}}
                      </td>
                      <td style="width: 20px">{{$customer->email}}
                      </td>
                      <td style="text-align: center; width: 20px">
                      {{$customer->address}}
                      </td>
                      <td>{{$customer->gender}}
                      </td>
                      <td>
                        <a href="{{route('geteditCustomer',$customer['id'])}}">
                          <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                            <span class="glyphicon glyphicon-pencil">
                            </span>Edit
                          </button>
                        </a>
                        <a href="{{route('getdeleteCustomer',$customer['id'])}}">
                          <button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#editItem" data-placement="top" rel="tooltip" data-original-title="" title="Edit item">
                            <span class="glyphicon glyphicon-pencil">
                            </span>Delete
                          </button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                       <th>ID
                      </th>
                      <th>Use name
                      </th>
                      <th>Phone
                      </th>
                      <th>Email
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting">Address
                      </th>
                      <th>Gender
                      </th>
                      <th class="sorting_desc_disabled sorting_asc_disabled sorting" >Action
                      </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  @endsection
