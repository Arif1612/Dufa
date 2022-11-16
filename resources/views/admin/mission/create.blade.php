@extends('admin.layouts.app')
@section('content')

<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    </div>
	@endif

    <div class="row">
        <!-- Basic example -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Add Mission & Vision</h3></div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('add-mission') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mission</label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="mdetails" rows="5"></textarea>
                                    </div>
                                </div> <!-- End row -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Vision</label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="vdetails" rows="5"></textarea>
                                    </div>
                                </div> <!-- End row -->
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" />
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->

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