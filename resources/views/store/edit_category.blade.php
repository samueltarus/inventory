@extends('store.store_layouts')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row" style="text-align: center;">

                <div class="col-sm-6 my-auto" >
                    <div class="card" >
                        <div class="card-header">
                            <strong>Category</strong> Form
                        </div>
                        <div class="card-body card-block">
                        <form action="{{url('update-category',$categories->category_id)}}" method="post" class="form-horizontal">
                            @csrf

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="category_name" class=" form-control-label">Category Name</label>

                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" class="form-control" placeholder="Enter Category Name" name="category_name" value="{{ $categories->category_name }}" id="category_name" required>
                                        <span class="help-block">Enter your Category Code</span>
                                    </div>

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

@endsection
