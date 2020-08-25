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
                            <strong>Supplier</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('save-supplier')}}" method="post" >

                            @csrf

                            <div class="form-group">
                                <label for="supplier_name" class=" form-control-label">Supplier Name</label>
                                <input type="text" id="supplier_name"  name="supplier_name" placeholder="Enter Supplier Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="supplier_mobile" class=" form-control-label">Supplier Mobile Phone</label>
                                <input type="number" id="supplier_mobile" name="supplier_mobile" placeholder="Enter Phone Number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="supplier_address" class=" form-control-label">Supplier Address</label>
                                <input type="text" id="supplier_address" name="supplier_address" placeholder="Enter Addresss" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="supplier_details" class=" form-control-label">Supplier Details</label>
                                <input type="text" id="supplier_details"  name="supplier_details" placeholder="Enter Suppllier Details" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="previous_balance" class=" form-control-label">Previous Balance</label>
                                <input type="text" id="previous_balance"  name="previous_balance" placeholder="Enter Previous Balance" class="form-control" required>
                            </div>


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
