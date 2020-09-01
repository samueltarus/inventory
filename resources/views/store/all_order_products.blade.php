@extends('store.store_layouts')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>All <b>Reports</b></h2>
					</div>
					<div class="col-sm-6">
                    <a href="{{url('create-report')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Create Report</span></a>
						<a href="{{url('all-categories')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Export to Excel</span></a>
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
                                    <th>Product  Serial No</th>
                                    <th> Product Invoice</th>
                                    <th >Issued Name</th>
                                    <th>Date</th>
                                    <th >Qnty</th>
                                    <th>Recieved</th>
                                    <th >Balance</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $products)

                                <tr>
                                    <td>{{$products->product_name}}</td>
                                    <td>{{$products->product_details}}</td>
                                    <td>{{$products->category_name}}</td>
                                    <td>{{$products->product_per_cartoon}}</td>
                                    <td>{{$products->sell_price}}</td>
                                    <td>{{$products->supplier_price}}</td>
                                    <td>{{$products->model}}</td>
                                    <td>{{$products->supplier_name}}</td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-product/'.$products->product_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/edit-product/'.$products->product_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-product/'.$products->product_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
                                    </td>
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


@endsection
