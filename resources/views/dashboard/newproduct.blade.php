@extends('home')

@section('content')
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <h1 style="text-align: center;">Create Product</h1><br>
      <div class="createproduct" style="margin-top: 30px; padding-left: 200px;">
        <form>
        <!-- Product input -->
      <div class="create-product">
          <label for="productName" >Product Name</label>
          <input type="text" id="productName" name="productName" size="30" style="margin-left: 85px;">
          <label for="productNum" style="padding-left: 10px;" >Product No.</label>
          <input type="text" id="productNum" name="productNum" size="10" style="margin-left: 5px; height: 22px; "><br><br>
      </div>	
      <!-- End product input	 -->
        
      <!-- Category input -->
      <div class="create-product">
          <label for="categoryId">Category No.</label>
          <input type="text" id="categoryId" name="categoryId" size="20" style="margin-left: 95px; height: 22px;">
          <label for="categoryType" style="padding-left: 10px;">Type:</label>
          <select id="categoryType" name="categoryType" style="margin-left: 5px;">
            <option value="food">Food</option>
            <option value="drink">Drink</option>
            <option value="water">Water</option>
            <option value="energydrink">Energy Drink</option>
            <option value="snack">Snack</option>
            <option value="coffee">Coffee</option>
            <option value="use">Beer</option>
          </select><br><br>
      </div>
      <!-- End category input -->

      <!-- Quanity input -->
      <div class="create-product">
          <label for="quanity">Quanity</label>
          <input type="text" id="quanity" name="quanity" size="50" style="margin-left: 130px;"><br><br>
      </div>
      <!-- End quanity input -->

        <!-- Unit Price input	 -->
      <div class="create-product">
          <label for="unitprice" >Unit Price</label>
          <input type="text" id="unitprice" name="unitprice" placeholder="$..." size="50" style="margin-left: 120px;"><br><br>
      </div>
      <!-- End unit price input -->

      <!-- Selling price -->
      <div class="create-product">  
          <label for="sellingprice" >Selling Price</label>
          <input type="text" id="sellingprice" name="sellingprice" placeholder="$..." size="50" style="margin-left: 100px;"><br><br>
      </div>
      <!-- End selling price -->

      <!-- Receiving date -->
      <div class="create-product">  
        <label for="receive" >Receiving Date</label>
        <input type="text" id="receive" name="receive" placeholder="mm/dd/yyyy" size="50" style="margin-left: 80px;"><br><br>
    </div>
    <!-- End receiving date -->

    <!-- Expire date -->
    <div class="create-product">  
        <label for="expire" >Expire Date</label>
        <input type="text" id="expire" name="expire" placeholder="mm/dd/yyyy" size="50" style="margin-left: 105px;"><br><br>
    </div>
    <!-- End expire date -->
    
      <!-- Button -->
      <div class="create-product">
          <input type="button" value="create" style="margin-left: 420px;">
          <input type="button" value="Delete">
      </div>
      <!-- End button -->
        
                       
    </form>
    </div>
    
  </div>
@endsection
