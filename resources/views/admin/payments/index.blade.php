@extends('layouts.admin')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <h1 class="mt-4 d-inline">Payments</h1>
                <a href="" class="btn btn-primary float-end">Create Payment</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Payments</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Payments List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Pay</th>
                                <th>Logo</th>
                                <th>AccNo</th>
                                <th>AccName</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Pay</th>
                                <th>Logo</th>
                                <th>AccNo</th>
                                <th>AccName</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $j = 1 ;
                            @endphp
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $j++ }}</td>
                                    <td>{{ $payment->pay }}</td>
                                    <td>{{ $payment->logo }}</td>
                                    <td>{{ $payment->acc_no }}</td>
                                    <td>{{ $payment->acc_name }}</td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection