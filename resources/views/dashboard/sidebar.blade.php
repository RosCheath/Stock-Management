<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
</div>
        <div class="p-4 pt-5">
          <h1><a href="index.html" class="logo">Stock Management</a></h1>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="{{ route('dashboard')}}">Dashboard</a>	            
      </li>
      <li>
          <a href="{{ route('profile')}}">My profile</a>
      </li>
      <li>
        <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
        <ul class="collapse list-unstyled" id="product">
          <li>
              <a href="{{ route('products.index')}}">ALl product</a>
          </li>
          <li>
              <a href="{{ route('products.create')}}">Add new product</a>
          </li>
        </ul>
        </li>
        <li>
          <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
          <ul class="collapse list-unstyled" id="category">
            <li>
                <a href="{{ route('allcategory')}}">ALl category</a>
            </li>
            <li>
                <a href="{{ route('newcategory')}}">Add new category</a>
            </li>
          </ul>
          </li>
          <li>
            <a href="#imployee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
            <ul class="collapse list-unstyled" id="imployee">
              <li>
                  <a href="{{ route('allemployee')}}">ALl employee</a>
              </li>
              <li>
                  <a href="{{ route('newemployee')}}">Add new employee</a>
              </li>
            </ul>
            </li>
          <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </li>
          
    </ul>
      {{-- <div class="mb-5">
						<h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div> --}}
    <div class="footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>