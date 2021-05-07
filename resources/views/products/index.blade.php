@extends('home')

@section('content')
    <div class="col-lg-8 col-md-10 mx-auto">
        <h1>All Product</h1>
      </a>
        <table class="table table-border">
          <thead>
            <tr>
              <th>#</th>
              <th>category</th>
              <th>Name</th>
              <th>quanity</th>
              <th>unitprice</th>
              <th>sellingprice</th>
              <th>receive</th>
              <th>expire</th>
              <th>
                Edit
              </th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quanity }}</td>
                <td>{{ $product->unitprice }}</td>
                <td>{{ $product->sellingprice }}</td>
                <td>{{ $product->receive }}</td>
                <td>{{ $product->expire }}</td>
                <td>
                        <a class="btn btn-outline-primary" href="{{ route('products.edit', $product->id) }}">Edit </a>
                       </td>
              <td>
                        <form id="productDelete{{$product->id}}" method="POST" action="{{ route('products.destroy', $product->id) }}">
                          @csrf
                          @method('DELETE')
                        </form>
                        <a class="btn btn-outline-danger" href="#" onclick="document.getElementById('productDelete{{$product->id}}').submit()">Delete</a>
              </td>
                
               
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  <hr>
@endsection