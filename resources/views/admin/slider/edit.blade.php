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
                <div class="panel-heading"><h3 class="panel-title">Edit Slider</h3></div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('update-slider/'.$slider->id) }}" enctype="multipart/form-data" />
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="name" name="title" value="{{ $slider->title }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Details</label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <textarea class="form-control" name="description" rows="5">{{ $slider->description }}</textarea>
                                    </div>
                                </div> <!-- End row -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control">
                            <img src="{{ asset('uploads/slider/'.$slider->image) }}" style="width: 70px; height: 70px;" alt="Image">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="status" value="{{ $slider->status }}">
                            <label class="form-check-label" for="textarea2">Publication Status</label>
                        </div>

                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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