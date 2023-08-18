@extends('layouts.app')
@section('main')

<div class="container">
            <div class="text-right">
                <a href="products/create" class="btn btn-dark mt-3"> New Product </a>
            </div>


            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            @foreach($stocks as $stock)
                            <td>{{ $stock->index+1 }}</td>
                            <td>{{ $stock->name }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td>
                                <a href="#" class="btn btn-dark btn-sm" >Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" >Delete</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </thead>


        </div>


@endsection
