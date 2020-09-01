
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Product <b>Reports</b></h2>
					</div>
					<div class="col-sm-6">
                    {{-- <a href="{{url('add-product')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add Product</span></a> --}}
						{{-- <a href="{{url('all-categories')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Manage Category</span></a> --}}
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Details</th>

                                    <th >Product Per Carton</th>
                                    <th>Sell Price</th>
                                    <th >Supplier Price</th>
                                    <th>Product Model</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $products)

                                <tr>
                                    <td>{{$products->product_name}}</td>
                                    <td>{{$products->product_details}}</td>

                                    <td>{{$products->product_per_cartoon}}</td>
                                    <td>{{$products->sell_price}}</td>
                                    <td>{{$products->supplier_price}}</td>
                                    <td>{{$products->model}}</td>



                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

