@extends('backend.layouts.master')

@section('title', $title)
<!-- ================================== -->
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{$title}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- ================================== -->
@section('content')
    <div class="content mt-3">
        <div class="form-group">
            <form id="delivery-id" action="{{url('backend/delivery/store')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for="id-id">Name</label>
                            <input type="text" class="form-control" name="name">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" class="form-control" name="description">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta keywords</label>
                            <input type="text" class="form-control" name="meta_keywords">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta description</label>
                            <input type="text" class="form-control" name="meta_description">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-warning btn-sm" href="{{ URL::previous() }}">Go back</a>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Create record</button>
                </div>
            </form>
        </div>
    </div><!-- .content -->
@endsection