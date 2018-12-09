<div class="panel panel-body">
    <div class="panel-heading panel-">
        <h1>填写信息</h1>
    </div>
    <div class="panel-content" id="app">
        <div class="form-group">
            {!! Form::label('title','标题:',['class'=>'form-label']) !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('keywords','关键词:',['class'=>'form-label']) !!}
            {!! Form::textarea('keywords',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','描述:',['class'=>'form-label']) !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <fileupload-component></fileupload-component>
        <div class="form-group">
            {{--{!! Form::label('pic','图片:',['class'=>'form-label']) !!}--}}
            {{--{!! Form::file('pic',['class'=>'form-control-file']) !!}--}}
        </div>
        <div class="form-group">
            {!! Form::label('is_display','是否显示:',['class'=>'form-label']) !!}<br>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="is_display1" value="1" name="is_display" checked="true">
                <label for="is_display1">是</label>
            </div>
            <div class="radio radio-inline">
                <input type="radio" id="is_display2" value="2" name="is_display">
                <label for="is_display2">否</label>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('url','显示内容:',['class'=>'form-label']) !!}
            <textarea class="summernote form-control" name="content"></textarea>
        </div>
        <div class="form-group">
            {!! Form::label('is_single','是否单页:',['class'=>'form-label']) !!}<br>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="is_single1" value="1" name="is_single" checked="true">
                <label for="is_single1">是</label>
            </div>
            <div class="radio radio-inline">
                <input type="radio" id="is_single2" value="2" name="is_single">
                <label for="is_single2">否</label>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('url','跳转链接:',['class'=>'form-label']) !!}
            {!! Form::url('url',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class=" form-group">
        {!! Form::submit('确定',['class'=>'btn btn-success btn-sm pull-right']) !!}
    </div>

</div>