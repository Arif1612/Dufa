@extends('admin.layouts.app')
@section('content')

<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

        @if (session('status'))
    <div class="container">
    	<div class="rows">
    		<div class="alert alert-success">
    			{{ session('status') }}
    		</div>
    	</div>
        
    </div>
	@endif

    <div class="row">
        <!-- Basic example -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Add About Page</h3></div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('/add-about') }}" enctype="multipart/form-data" />
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Details</label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="details" rows="5"></textarea>
                                    </div>
                                </div> <!-- End row -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Photo</label>
                            <input type="file" class="form-control" id="name" name="image">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="status" />
                            <label class="form-check-label" for="textarea2">Publication Status</label>
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