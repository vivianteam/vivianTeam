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
              <h4 class="card-title">All contact
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

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($get_contacts as $contact)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td >{!!$stt!!}
                      </td>
                      <td >{{$contact->name}}
                      </td>
                      <td >{{$contact->email}}
                      </td>
                      <td >{{$contact->phone}}
                      </td>
                      <td >{{$contact->messsage}}
                      </td>
                      <td>
                        <button class="btn btn-primary btn-xs" data-toggle="modal" date-name="{{$contact->name}}" data-id="{{$contact['id']}}" data-email="{{$contact->email}}" data-phone="{{$contact->phone}}" data-message="{{$contact->messsage}}" data-target="#editItem" data-placement="top" rel="tooltip" data-toggle='modal'>
                          <span class="glyphicon glyphicon-pencil">
                          </span>View
                        </button>
                        <a  href="{{route('getDeleteContact',$contact['id'])}}">
                          <button  class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#removeItem" data-placement="top" rel="tooltip" data-original-title="" title="Remove item">
                            <span class="glyphicon glyphicon-remove">
                            </span>Remove
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
                      <th>Name
                      </th>
                      <th>Email
                      </th>
                      <th>Phone
                      </th>
                      <th>Message
                      </th>
                      <th>Action
                      </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="modal fade" id="editItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLabel">Rep Contact
                      </h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;
                        </span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <input type="hidden" name="editItem-form" value="">
                        <table width="100%">
                          <tr>
                            <th style="width: 50px;">ID
                            </th>
                            <th style="width: 100px;">Name
                            </th>
                            <th>Email
                            </th>
                            <th style="width: 100px;">Phone
                            </th>
                            <th>Message
                            </th>
                            <th>Reply
                            </th>
                          </tr>
                          <tr>
                            <td>
                              <input  type="text" disabled class=" form-control" id="form_id" name="form_id" value="">
                            </td>
                            <td>
                              <input   type="text" disabled class=" form-control" id="form_name" name="form_name" value="">
                            </td>
                            <td>
                              <input type="text" disabled class=" form-control" id="form_email" name="form_email" value="">
                            </td>
                            <td>
                              <input  type="text" disabled class=" form-control" id="form_phone" name="form_phone" value="">
                            </td>
                            <td>
                              <input  type="text" disabled class=" form-control" id="form_message" name="form_message" value="">
                            </td>
                            <td>
                              <input  type="text"  class=" form-control" name="" value="">
                            </td>
                          </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                      </button>
                      <button type="submit" class="btn btn-primary" data-dismiss="modal">Reply
                      </button>
                    </div>
                  </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
