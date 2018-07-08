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
                        <li><a href="#">Payment</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="form-group">
            <form id="payment-id" action="{{url('backend\payment\update', $item->id)}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for="id-id">ID</label>
                            <input id="id-id" type="text" class="form-control" name="id" value="{{$item->id}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input id="id-id" type="text" class="form-control" name="name" value="{{$item->name}}">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$item->description}}">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" value="{{$item->meta_keywords}}">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{$item->meta_description}}">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Created at</label>
                            <input type="text" class="form-control" name="created_at" value="{{$item->created_at}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Updated at</label>
                            <input type="text" class="form-control" name="updated_at" value="{{$item->updated_at}}" readonly>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('backend/payment') }}">Go back</a>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Update record</button>
                </div>
            </form>
        </div>
    </div><!-- content -->
@endsection