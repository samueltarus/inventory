@extends('store.store_layouts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item"> Manage Products</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for category &amp; Brand...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Category Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categories)

                                <tr>
                                    <td>{{$categories->category_id}}</td>
                                    <td>{{$categories->category_name}}</td>
                                    <td class="col-lg-2">

                                    <a href="{{url('/edit-category/'.$categories->category_id)}}" class="btn btn-warning col-lg-4" ><span  class="glyphicon glyphicon-pencil"></span>Edit</a>

                                    <a href="#" class="btn btn-info col-lg-4 " ><span  class="glyphicon glyphicon-align-justify"></span>Details</a>

                                    <a href="{{url('/delete-category/'.$categories->category_id)}}" class="btn btn-danger col-lg-4 " ><span  class="glyphicon glyphicon-trash"></span>Delete</a>
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
