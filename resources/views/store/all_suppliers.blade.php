@extends('store.store_layouts')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Supplier</b></h2>
					</div>
					<div class="col-sm-6">
                    <a href="{{url('add-category')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add Product</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Manage Category</span></a>
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Supplier Name</th>
                                    <th>Supplier Phone Number</th>
                                    <th>Supplier Address</th>
                                    <th> Previous Balance</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $suppliers)

                                <tr>
                                    <td>{{$suppliers->supplier_name}}</td>
                                    <td>{{$suppliers->supplier_mobile}}</td>
                                    <td>{{$suppliers->supplier_address}}</td>
                                    <td>{{$suppliers->previous_balance}}</td>
                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-supplier/'.$suppliers->supplier_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/edit-supplier/'.$suppliers->supplier_id)}}" class="btn btn-info col-lg-4 col-lg-offset-1" ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-supplier/'.$suppliers->supplier_id)}}" class="btn btn-danger col-lg-4 col-lg-offset-1" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>

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
