@extends('admin.layouts.layout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>管理员列表</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.index')}}" title="主页">主页</a>
                </li>
                <li>
                    <strong>管理员列表</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{route('admin.admins.create')}}" title="添加管理员" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">数据</th>
                                <th class="text-center">用户</th>
                                <th class="text-center">操作</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$admin->id}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>
                                        <a href="{{route('admin.admins.edit',$admin->id)}}" class="btn btn-info">修改</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pull-right">
                            {{$admins->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection