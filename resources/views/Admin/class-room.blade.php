<x-adminapp-layout>
<div class="wrapper">
     <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="page-title">
                        <i class="mdi mdi-calendar-today title_icon"></i> CLASS ROOM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button  type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-primary btn-rounded alignToTitle" onclick="rightModal('https://demo.creativeitem.com/ekattor/modal/popup/routine/create', 'Create routine')"> <i class="mdi mdi-plus"></i> Add Class Room</button>
                        </h4>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

        <div class="row">
            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><i class="mdi mdi-calendar-today title_icon"> <b>DEPARTMENTS</b> +</i></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('add.class.room') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="m-t-20">
                                        <input type="text" class="form-control" placeholder="Class Room" maxlength="25" name="classRoom" required/>
                                        @error('classRoom')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>   
                                        <br>
                                        <span class="input-group-append">
                                        <button type="submit" class="btn btn-block btn-secondary">Add Class Room</button>
                                        <!-- <button type="submit" id="check-minutes" class="btn btn-primary">Class ++</button> -->
                                        </span>   
                                    </div> 
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>

            <div class="col-xl-12">
                <div class="card">
                         @if(\Session::has('success'))
                            <div class="alert alert-success">
                               <p><b>{{ \Session::get('success') }}</b></p>
                            </div>
                         @endif
                    <div class="card-body department_content">
                        <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="basic-datatable_length"><label>Show <select name="basic-datatable_length" aria-controls="basic-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div><table id="basic-datatable" class="table table-striped dt-responsive dataTable no-footer dtr-inline" width="100%" role="grid" aria-describedby="basic-datatable_info" style="width: 100%; position: relative;">
                                <thead>
                                    <tr style="background-color: #313a46; color: #ababab;" role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 558.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 437.8px;" aria-label="Options: activate to sort column ascending">CLASS ROOM</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 437.8px;" aria-label="Options: activate to sort column ascending">OPTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($classRoom as $classRoomView)	
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $classRoomView->classRoom_id }}</td>
                                        <td tabindex="0" class="sorting_1">{{ $classRoomView->classRoom }}</td>
                                        <td>
                                            <div class="dropdown text-center">
                                                <button type="button" class="btn btn-sm btn-icon btn-rounded btn-outline-secondary dropdown-btn dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item" onclick="rightModal('https://demo.creativeitem.com/ekattor/modal/popup/department/edit/10', 'Update department');">Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item" onclick="confirmModal('https://demo.creativeitem.com/ekattor/admin/department/delete/10', showAllDepartments)">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                  </div>
                <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="basic-datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="basic-datatable_previous"><a href="#" aria-controls="basic-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#" aria-controls="basic-datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>

        </div><!--end of row-->

     

    </div><!--container fluid-->
</div><!--wrapper-->
</x-adminapp-layout>
<style>
    .dropdown-toggle::after{
        display: none;
    }
</style>