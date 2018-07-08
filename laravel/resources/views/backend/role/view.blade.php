@extends('backend.layouts.master')

@section('title', $title)

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{$title}}: {{$item->id}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Role</a></li>
                        <li class="active">View</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="form-group">
            <form id="category-product-id" action="" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="id-id">ID</label>
                            <input id="id-id" type="text" class="form-control" value="{{$item->id}}" readonly >
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" value="{{$item->name}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Created at</label>
                            <input type="text" class="form-control" value="{{$item->created_at}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Updated at</label>
                            <input type="text" class="form-control" value="{{$item->updated_at}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Meta keywords</label>
                            <input type="text" class="form-control" value="{{$item->meta_keywords}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Meta description</label>
                            <input type="text" class="form-control" value="{{$item->meta_description}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('backend/role') }}">Go back</a>
                    <a class="btn btn-outline-primary btn-sm" href="{{ url('backend/role/edit', $item->id) }}">Edit record</a>
                    <a class="btn btn-outline-danger btn-sm" href="{{ url("backend/role/delete", $item->id) }}" onclick="ad_delete()">Delete record</a>
                </div>
            </form>
        </div>
    </div><!-- .content -->
@endsection