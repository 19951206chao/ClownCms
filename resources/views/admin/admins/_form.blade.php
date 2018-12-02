<div class="panel panel-body">
    <div class="panel-heading panel-">
        <h1>填写信息</h1>
    </div>
    <div class="panel-content">
        <div class="form-group">
            {!! Form::label('name','姓名:',['class'=>'form-label']) !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','邮箱:',['class'=>'form-label']) !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','登陆密码:',['class'=>'form-label']) !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
    </div>

    <div class=" form-group">
        {!! Form::submit('确定',['class'=>'btn btn-success btn-sm pull-right']) !!}
    </div>

</div>