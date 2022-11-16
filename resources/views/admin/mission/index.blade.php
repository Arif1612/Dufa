@extends('admin.layouts.app')
@section('content')
    
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">MissionVision List</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Mission</th>
                                                <th>Vision</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mission as $item )
                                            <tr>
                                                <td width="2px">{{ $item->id }}</td>
                                                <td width="35">{{ $item->mdetails }}</td>
                                                <td width="35px">{{ $item->vdetails }}</td>
                                                <td width="2px" class="center">{{ $item->status == '1' ? 'Inactive':'Active' }}</td>
                                                <td width="26px">
                                                    <a class="btn btn-sm btn-primary" href="{{ url('edit-mission/'.$item->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ url('delete-mission/'.$item->id) }}" class="btn btn-sm btn-danger" data-form-id="" id="delete">
                                                        <i class="fa fa-trash"></i>
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
            </div>

            <!-- Pls Remove -->
            <div style="height:600px;"></div>


        </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        2022 © TigerSoftBD
    </footer>

</div>



@endsection