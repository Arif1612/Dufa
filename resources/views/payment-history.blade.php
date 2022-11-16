@extends('user.layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="portlet">
                        <div class="portlet-heading">
                            <h3 class="portlet-title text-dark text-uppercase">{{ __('Payment History') }}</h3>
                        </div>
                        <div class="portlet-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($orders)
                            <div class="table-responsivebs">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>TrxId</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->transaction_id }}</td>
                                            <td>{{ $order->amount }} BDT</td>
                                            <td>{{ $order->payment_method }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if ($orders->hasPages())
                            {{ $orders->links() }}
                            @endif
                            @else
                                <p>No payment history found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
