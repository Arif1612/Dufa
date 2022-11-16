@extends('user.layouts.app')

@section('content')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Personal Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $user->name }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $user->phone }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $user->email }}</p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Address</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $user->address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
                            </div>

                            <div class="col-md-6">
                                        <!-- Payment-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Payment Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Total Dues</strong> <br/>
                                                 @if ($user->status == "unregistered")

                                                    <p class="text-muted">1000 Tk</p><br />

                                                    @else
                                                     <p class="text-muted">{{ $dues }} Tk</p><br />

                                                   @endif
                        @if ($user->status == "unregistered")
                                            <a href="{{ route('registration') }}" class="btn btn-purple w-md waves-effect waves-light">Pay Fee</a><br>
                                        @endif
                                        @if ($user->subscription == "none")
                                           <!-- <a href="{{ route('membership.yearly') }}" class="btn btn-purple w-md waves-effect waves-light" style="margin-top:1rem;">Pay Subscription Fee</a>-->
                                        @endif



                                                    <br />
                                                     <br />
                                                    <a href="{{ route('payment.history') }}">Click here to see all your payment history</a>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Payment-Information -->
                            </div>
                            <div class="col-md-6">
                                        <!-- Payment-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Member Status</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Current Subscription</strong>
                                                    <br/>
                                                    <p class="text-muted" style="text-transform:capitalize;">{{ $user->subscription }} Membership Plan</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Payment-Information -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Member List Checked</h3>
                                         <a href="{{ route('search') }}">Click here for advanced search</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
{{-- aikhane input naoar somoy subscription yearly bole dite hobe soja kotha none / null thaka jabe nh --}}
                            @if ($user->status != "unregistered"  && $user->status != null)
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Blood</th>
                                                            <th>Contact</th>
                                                            <th>Department</th>

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
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                                 @if ($users->hasPages())
                            {{ $users->links() }}
                         ?  @endif
                            @else
                                <p>Please sign up for membership to see member list.</p>
                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->


                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


@endsection
