@extends('admin.layouts.layout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>添加管理员</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.index')}}" title="主页">主页</a>
                </li>
                <li>
                    <a href="{{route('admin.admins.index')}}" title="管理员列表">管理员列表</a>
                </li>
                <li>
                    <strong>添加管理员</strong>
                </li>
            </ol>
        </div>

    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                {!! Form::open(['route'=>'admin.admins.store']) !!}
                @include('admin.admins._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection