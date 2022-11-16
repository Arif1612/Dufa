@extends('user.layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3">
                    @if ($user->status == "unregistered")
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">1</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Registration fee</h6>
                                <small class="text-muted">One time registration fee.</small>
                            </div>
                            <span class="text-muted">1000 BDT</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BDT)</span>
                            <strong>1000 TK</strong>
                        </li>
                    </ul>


                    <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                        @csrf
                        <input type="hidden" name="registration" value="registration">
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                    @else
                    <div class="jumbotron">
                        <h1>Okay!</h1>
                        <p>Look like you have already completed the Registration.</p>
                        <a href="{{ route('membership.yearly') }}" class="btn btn-success">Buy Membership</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
