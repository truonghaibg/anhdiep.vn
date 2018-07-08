@extends('backend.layouts.master')

@section('title', $title)

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
                        <li class="active">Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="margin-bottom: 10px">
                        <a href="{{url("backend/role/create")}}">
                            <button type="button" class="btn btn-outline-primary btn-sm">Create item</button>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <a href="{{url("backend/role/view", $item->id)}}"><button type="button" class="btn btn-outline-info btn-sm">Details</button></a>
                                            <a href="{{url("backend/role/edit", $item->id)}}"><button type="button" class="btn btn-outline-warning btn-sm">Edit</button></a>
                                            <a href="{{url("backend/role/delete", $item->id)}}" onclick="ad_delete()"><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    {{--BEGIN: javascript--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
    {{--END: javascript--}}
@endsection