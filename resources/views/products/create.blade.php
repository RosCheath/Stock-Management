@extends('home')

@section('content')
<!-- Page Content  -->

<div id="content" class="p-4 p-md-5 pt-5">
    <h1 style="text-align: center;">Create Product</h1><br>
    
      <div class="createproduct" style="margin-top: 30px; padding-left: 200px;">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf
        <!-- Product input -->
      <div class="create-product">
          <label for="name" >Product Name</label>
          <input type="text" id="name" name="name" size="50">
        
      </div>	
      <!-- End product input	 -->
        
      <!-- Category input -->
      <div class="create-product">
          <label for="categoryId">Category</label>
          <select id="categoryId" name="categoryId">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select><br><br>
      </div>
      <!-- End category input -->

      <!-- Quanity input -->
      <div class="create-product">
          <label for="quanity">Quanity</label>
          <input type="text" id="quanity" name="quanity" size="50" ><br><br>
      </div>
      <!-- End quanity input -->

        <!-- Unit Price input	 -->
      <div class="create-product">
          <label for="unitprice" >Unit Price</label>
          <input type="text" id="unitprice" name="unitprice" placeholder="$..." size="50"><br><br>
      </div>
      <!-- End unit price input -->

      <!-- Selling price -->
      <div class="create-product">  
          <label for="sellingprice" >Selling Price</label>
          <input type="text" id="sellingprice" name="sellingprice" placeholder="$..." size="50" ><br><br>
      </div>
      <!-- End selling price -->

      <!-- Receiving date -->
      <div class="create-product">  
        <label for="receive" >Receiving Date</label>
        <input type="text" id="receive" name="receive" placeholder="mm/dd/yyyy" size="50" ><br><br>
    </div>
    <!-- End receiving date -->

    <!-- Expire date -->
    <div class="create-product">  
        <label for="expire" >Expire Date</label>
        <input type="text" id="expire" name="expire" placeholder="mm/dd/yyyy" size="50"><br><br>
    </div>
    <!-- End expire date -->
    
      <!-- Button -->
      <div class="create-product">
          <input type="submit" value="create" style="margin-left: 420px;">
      </div>
      <!-- End button -->                
    </form>
    </div>
    
  </div>
@endsection
