@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-12">
        @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!! Session::get('flash_message') !!}
                  </div>
                @endif
              </div>
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All SmallCategory
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3"> 
                </i>
              </a>
              <div class="heading-elements"> 
                <a href="{{asset('addSmallCategory')}}">
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
                      <tr>                        <th>ID
                        </th>
                        <th>Name
                        </th>
                        <th>Description
                        </th>
                        <th>ID Category
                        </th>
                        <th class="sorting_desc_disabled sorting_asc_disabled sorting">Actions
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $stt=0 ?>
                    @foreach($smallcategories as $smallcategory)
                    <?php $stt=$stt+1 ?>
                    <tr>
                      <td>
                        {!! $stt !!}
                      </td>
                      <td class="text-center">
                        {{ $smallcategory-> nameSmallCate }}
                      </td>
                      <td>
                        {{ $smallcategory-> descriptions }}
                      </td>
                      <td class="text-center">
                         {{ $smallcategory-> id_category }}
                      </td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                            <i class="ft-settings">
                            </i>
                          </button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="{{route('geteditSmallCategory2',$smallcategory['id'])}}" class="dropdown-item">
                              <i class="ft-edit-2">
                              </i> Edit
                            </a>
                            <a onclick="return xacnhanxoa(' Bạn có chắc muốn xóa không !!! ')" href="{{route('getdeleteSmallCategory',$smallcategory['id'])}}" class="dropdown-item">
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
