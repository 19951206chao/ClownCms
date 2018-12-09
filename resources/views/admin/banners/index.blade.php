@extends('admin.layouts.layout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>轮播图列表</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.admins.index')}}" title="主页">主页</a>
                </li>
                <li>
                    <strong>轮播图列表</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{route('admin.banners.create')}}" title="添加轮播图" class="btn btn-primary">
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
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">数据</th>
                                <th class="text-center">用户</th>
                                <th class="text-center">操作</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($banners as $banner)
                                <tr>
                                    <td>{{$banner->id}}</td>
                                    <td title="{{$banner->name}}">{{$banner->name}}</td>
                                    <td title="{{$banner->email}}">{{$banner->email}}</td>
                                    <td>

                                        {!! Form::open(['route'=>['admin.banners.destroy',$banner->id],'method'=>'DELETE']) !!}
                                        <div class="form-group">
                                            <a href="{{route('admin.banners.edit',$banner->id)}}" title="修改信息"
                                               class="btn btn-info">修改</a>
                                            {!! Form::submit('删除',['class'=>'btn btn-danger']) !!}
                                        </div>
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pull-right">
                            {{$banners->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection