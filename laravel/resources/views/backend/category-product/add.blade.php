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
                        <li><a href="#">Category product</a></li>
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
            <form id="category-product-id" action="{{url('backend/category-product/store')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Danh mục cha</label>
                            <select name="parent_id" class="form-control">
                                <option value="">--Not Defined--</option>
                                @foreach($categoryProducts as $categoryProduct)
                                    <option value="{{ $categoryProduct->id }}" > {{ $categoryProduct->name }} </option>
                                @endforeach
                            </select>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Kiểu danh mục</label>
                            <select name="category_product-type" class="form-control">
                                <option value="Product" >Sản phẩm</option>
                                <option value="Design" >Thiết kế</option>
                            </select>
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input id="id-id" type="text" class="form-control" name="name">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Mô tả</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Hình ảnh</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta keywords</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Meta description</label>
                            <input type="text" class="form-control">
                            <div class="text-block"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" >Active</option>
                                <option value="0" >Inactive</option>
                            </select>
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