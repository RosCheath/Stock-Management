@extends('home')

@section('content')


<div id="container" class="effect mainnav-full">
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Forms Validation </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Forms Validation </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <form method="post" action="{{ route('stock.store')}}">
            @csrf
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tooltip Validation</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">

                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Name </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" data-live-search="true" id="product_id" name="product_id">
                                                @foreach($product as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Stock Type </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" id="status" name="status_type">
                                                    <option value="in">IN</option>
                                                     <option value="out">OUT</option>
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>


                                    <!--===================================================-->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-7 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tooltip Validation</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">
                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">quantity</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="quantity" placeholder="quantity" required value="{{old('quantity')}}">
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->
        </div>
            </form>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
    </div>

    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--Form validation [ SAMPLE ]-->

@endsection
