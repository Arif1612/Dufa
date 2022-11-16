@extends('user.layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="portlet">
                            {{-- @if ($user->subscription != "none"  && $user->subscription != null) --}}
                            <div class="table-responsivebs">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Blood Group</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            
                                        @foreach ($users as $singleuser)
                                        <tr>
                                            <td>{{ $singleuser->name }}</td>
                                            <td>{{ $singleuser->email }}</td>
                                            <td>{{ $singleuser->bloodgroup }}</td>
                                            <td>{{ $singleuser->phone }}</td>
                                            <td>{{ $singleuser->department }}</td>
                                            <td><span class="badge"><button style="background-color: transparent; border: 0;" data-toggle="modal" data-target="#modal-{{ $singleuser->id }}">View details</button></span></td>
                                        </tr>
                                        <div class="modal fade" id="modal-{{ $singleuser->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Information of {{ $singleuser->name }}</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <li class="list-group-item">Full Name: {{ $singleuser->name }}</li>
                                                        <li class="list-group-item">Nickname: {{ $singleuser->nickname }}</li>
                                                        <li class="list-group-item">Email: {{ $singleuser->email }}</li>
                                                        <li class="list-group-item">NID: {{ $singleuser->nid }}</li>
                                                        <li class="list-group-item">Phone: {{ $singleuser->phone }}</li>
                                                        <li class="list-group-item">Gender: {{ $singleuser->gender }}</li>
                                                        <li class="list-group-item">Department: {{ $singleuser->department }}</li>
                                                        <li class="list-group-item">Hall: {{ $singleuser->hall }}</li>
                                                        <li class="list-group-item">Blood Group: {{ $singleuser->bloodgroup }}</li>
                                                        <li class="list-group-item">Birth Date: {{ $singleuser->birthdate }}</li>
                                                        <li class="list-group-item">District: {{ $singleuser->district }}</li>
                                                        <li class="list-group-item">Address: {{ $singleuser->address }}</li>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- @else --}}
                                {{-- <p>Please sign up for membership to see member list.</p> --}}
                            {{-- @endif --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
