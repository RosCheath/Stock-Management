@extends('home')

@section('content')
    <!-- Page Content  -->

    <div id="content" class="p-4 p-md-5 pt-5">
        <h1 style="text-align: center;">Edit Product</h1><br>

        <div class="createproduct" style="margin-top: 30px; padding-left: 200px;">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Product input -->
                <div class="create-product">
                    <label for="name" >Product Name</label>
                    <input type="text" id="name"  name="name" value="{{$category->name }}" size="50" style="margin-left: 85px;" value="{{old('name')}}" >
                </div>

                <!-- End product input	 -->
                <!-- Button -->
                <div class="create-product">
                    <input type="submit" value="Save" style="margin-left: 420px;">
                </div>
                <!-- End button -->
            </form>
        </div>

    </div>
@endsection
