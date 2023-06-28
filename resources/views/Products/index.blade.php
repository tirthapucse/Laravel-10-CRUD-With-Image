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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td> <a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
                            <td>
                                <img src="/images/products/{{ $product->image }}" 
                                class="rounded-circle" width="50" 
                                height="50">
                            </td>
                            <td>
                                <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm" >Edit</a>
                                <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
        
        
        </div>    



@endsection





                                <!-- another way for delete   option with "Delete"               -->
                                <!-- @csrf
                                @method('DELETE')
                                <form method="POST" action="products/{{ $product->id }}/delete" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form> -->
