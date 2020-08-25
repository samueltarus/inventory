@extends('store.store_layouts')

@section('content')
<
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" >

                <div class="col-sm-6 mx-auto ">

                    <div class="card">
                        <div class="card-header">

                            <small> Add</small>
                            <strong>Product</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('save-product')}}" method="post" >

                            @csrf

                            <div class="form-group">
                                <label for="product_barcode_qr_code" class=" form-control-label">Product Barcode /QR Code</label>
                                <input type="text" placeholder="Enter your Barcode /QR code" class="form-control"   id="product_barcode_qr_code" name="product_barcode_qr_code"required>
                            </div>
                            <div class="form-group">
                                <label for="product_name" class=" form-control-label">Product Name</label>
                                <input type="text" id="product_name"  name="product_name" placeholder="Enter your Product" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="product_details" class=" form-control-label">Product Details</label>
                                <input type="text" id="product_details" name="product_details" placeholder="Enter your Product Details" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="category_id" class=" form-control-label">Product Category</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                @foreach ($categories as $categories)
                                <option value="{{$categories->category_id}}">{{$categories->category_name}}</option>

                                @endforeach
                                </select>
                                {{-- <input type="text" id="category_id" name="category_id" placeholder="Enter your Product Details" class="form-control" required> --}}
                            </div>
                            <div class="form-group">
                                <label for="product_per_cartoon" class=" form-control-label">Product Per Cartoon</label>
                                <input type="number" id="product_per_cartoon" name="product_per_cartoon" placeholder="Enter your Product per Cartoon" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sell_price" class=" form-control-label">Sell Price</label>
                                <input type="number" id="sell_price"  name="sell_price" placeholder="Enter your Sell Price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="supplier_price" class=" form-control-label">Supplier Price</label>
                                <input type="number" id="supplier_price" name="supplier_price" placeholder="Enter Supplier Price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="model" class=" form-control-label">Product Model</label>
                                <input type="text" id="model" name="model" placeholder="Enter Product Model" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="supplier_id" class=" form-control-label">Supplier</label>
                                <select class="form-control" name="supplier_id" id="supplier_id" required>
                                    @foreach ($suppliers as $suppliers)
                                    <option value="{{$suppliers->supplier_id}}">{{$suppliers->supplier_name}}</option>

                                    @endforeach
                                    </select>
                                {{-- <input type="text" id="supplier_id" name="supplier_id" placeholder="Enter Supplier" class="form-control" required> --}}
                            </div>
                            {{-- <div class="row form-group">

                                <label for="image" class=" form-control-label">Product Image</label>
                                  <input type="file" id="image" name="image" class="form-control-file" required>

                            </div> --}}


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>


                         </form>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
