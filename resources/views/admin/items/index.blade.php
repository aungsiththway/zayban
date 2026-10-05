@extends('layouts.admin')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <h1 class="mt-4 d-inline">Items</h1>
                <a href="" class="btn btn-primary float-end">Create Item</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Items</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Items List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>CodeNo</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Instock</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>CodeNo</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Instock</th>
                                <th>Category</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $j = 1 ;
                            @endphp
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $j++ }}</td>
                                    <td>{{ $item->code_no }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->in_stock }}</td>
                                    <td>{{ $item->category_id }}</td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection