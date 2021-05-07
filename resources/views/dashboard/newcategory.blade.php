@extends('home')

@section('content')
<div id="content" class="p-4 p-md-5 pt-5">		 
    <h1 style="text-align: center;">Create Category</h1>
    
    <div class="createcategory" style="margin-top: 30px; padding-left: 200px;">
      <form >

        <div class="create-category">
            <label for="categoryName" >Cateogry Name</label>
            <input type="text" id="categoryName" name="categoryName" size="30" style="margin-left: 85px; height: 25px;"><br><br>
            <label for="categoryNum">Category No.</label>
            <input type="text" id="categoryNum" name="categoryNum" size="10" style=" margin-left: 105px; height: 22px; "><br><br>
        </div>

      <input type="button" value="create" style="margin-left: 250px;">
                     
  </form>
  </div>
</div>
@endsection
