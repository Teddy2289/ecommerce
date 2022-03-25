@extends('layouts.admin')
@section('title')
    Product
@endsection
@section('content')
    <div class="row">


        <div class="col-lg-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-success alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>{{ session('delete') }}</strong>
                </div>
            @endif
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Products</h4>
                        <p class="mb-0">Tout nos liste de Produits</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <a href="" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i></span>Add</a>
                    </ol>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Stripped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Popular</th>
                                <th scope="col">Meta_tilte</th>
                                <th scope="col">Meta_descri</th>
                                <th scope="col">Meta_kryword</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>
                                        <span class="badge badge-success"> </span>
                                    </td>
                                    <td >
                                        <span class="badge badge-success"> </span>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>
                                        <img src="" alt="" style="width: 100px;">
                                    </td>
                                    <td style="width: 140px ! important;"><span><a href="" class="btn btn-outline-primary"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                        <a href="javascript:void()" class="btn btn-outline-danger" data-toggle="modal" data-target=".bd-example-modal-sm" title="Close"><i class="fa fa-close color-danger"></i></a></span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bootstrap-modal">
        <!-- Button trigger modal -->

        <!-- Small modal -->

        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="modal-body">
                                <h5 class="text-center">Are you sure you want to delete it ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




    </div>
@endsection
@section('scripts')
@endsection
