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
                        <li><a href="#">Category</a></li>
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
            <form id="category-product-id" action="{{url('backend\category-product\store')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="id-id">Mã danh mục</label>
                            <input id="id-id" type="text" class="form-control" >
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Danh mục cha</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Kiểu danh mục</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Mô tả</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Hình ảnh</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Meta keywords</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Meta description</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Trạng thái</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Ngày tạo</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Ngày cập nhật</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Trạng thái</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('backend/category-product') }}">Go back</a>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Update record</button>
                </div>
            </form>
        </div>
    </div><!-- .content -->
@endsection