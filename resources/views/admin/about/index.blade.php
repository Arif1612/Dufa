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
                            <h3 class="panel-title">About List</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($about as $item )
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->details }}</td>
                                                <td>
                                                	<img src="{{ asset('uploads/about/'.$item->image) }}" width="70px" height="70px" alt="Image">
                                                </td>
                                                <td width="2px" class="center">{{ $item->status == '1' ? 'Inactive':'Active' }}</td>
                                                <td class="center">
                                                    <a class="btn btn-info" href="{{ url('edit-about/'.$item->id) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm btn-danger" data-form-id="" id="delete">
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