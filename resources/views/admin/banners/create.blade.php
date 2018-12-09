@extends('admin.layouts.layout')
@section('css')
    <link href="{{asset('hadmin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
    <link href="{{asset('hadmin/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('hadmin/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>添加轮播图</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('admin.index')}}" title="主页">主页</a>
                </li>
                <li>
                    <a href="{{route('admin.banners.index')}}" title="轮播图列表">轮播图列表</a>
                </li>
                <li>
                    <strong>添加轮播图</strong>
                </li>
            </ol>
        </div>

    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
                {!! Form::open(['route'=>'admin.banners.store','files'=>true]) !!}
                @include('admin.banners._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('js')

    <!-- SUMMERNOTE -->
    <script src="{{asset('hadmin/js/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('hadmin/js/plugins/summernote/summernote-zh-CN.js')}}"></script>

    <script>
        $(document).ready(function () {

            $('.summernote').summernote({
                lang: 'zh-CN',
                height:500,
                placeholder:'请输入文章内容'
            });

        });
    </script>

@endsection