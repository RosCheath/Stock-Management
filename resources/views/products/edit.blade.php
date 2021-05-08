@extends('home')

@section('content')
<!-- Page Content  -->

<div id="content" class="p-4 p-md-5 pt-5">
    <h1 style="text-align: center;">Edit Product</h1><br>
    
      <div class="createproduct" style="margin-top: 30px; padding-left: 200px;">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
          @csrf
           @method('PUT')
        <!-- Product input -->
      <div class="create-product">
        <label for="name" >Product Name</label>
        <input type="text" id="name"  name="name" value="{{$product->name }}" size="50" style="margin-left: 85px;" value="{{old('name')}}" >
    </div>	
   
    <!-- End product input	 -->
      
    <!-- Category input -->
    <div class="create-product">
        <label for="categoryId" size="50" style="padding-top: 10px;">category:</label>
      <select id="categoryId" name="categoryId" style="margin-left: 120px;">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" @if($product->category_id === $category->id) selected @endif>{{ $category->name }}</option>
      @endforeach
        </select><br><br>
    </div>
    <!-- End category input -->

    <!-- Quanity input -->
    <div class="create-product">
        <label for="quanity">Quanity</label>
        <input type="text" id="quanity" size="50" value="{{$product->quanity }}" style="margin-left: 130px;"  name="quanity" value="{{old('name')}}"><br><br>
    </div>
    <!-- End quanity input -->

      <!-- Unit Price input	 -->
    <div class="create-product">
        <label for="unitprice" >Unit Price</label>
        <input type="text" id="unitprice" size="50" value="{{$product->unitprice }}" style="margin-left: 120px;"  name="unitprice" placeholder="$..." value="{{old('name')}}"><br><br>
    </div>
    <!-- End unit price input -->

    <!-- Selling price -->
    <div class="create-product">  
        <label for="sellingprice" >Selling Price</label>
        <input type="text" id="sellingprice" size="50" value="{{$product->sellingprice }}" style="margin-left: 100px;"  name="sellingprice" placeholder="$..." value="{{old('name')}}"><br><br>
    </div>
    <!-- End selling price -->

    <!-- Receiving date -->
    <div class="create-product">  
      <label for="receive" >Receiving Date</label>
      <input type="text" id="receive " size="50" value="{{$product->receive }}" style="margin-left: 80px;"  name="receive" placeholder="mm/dd/yyyy"  value="{{old('name')}}"><br><br>
  </div>
  <!-- End receiving date -->

  <!-- Expire date -->
  <div class="create-product">  
      <label for="expire" >Expire Date</label>
      <input type="text"  size="50" value="{{$product->expire }}" style="margin-left: 105px;" id="expire" name="expire" placeholder="mm/dd/yyyy"  value="{{old('name')}}"><br><br>
  </div>
  <!-- End expire date -->
    
      <!-- Button -->
      <div class="create-product">
          <input type="submit" value="Save" style="margin-left: 420px;">
      </div>
      <!-- End button -->                
    </form>
    </div>
    
  </div>
@endsection
