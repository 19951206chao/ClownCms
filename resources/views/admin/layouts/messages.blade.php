<div class="ibox-content">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(session()->has($msg))
            <div class="flash-message">
                <p class="alert alert-{{ $msg }}">
                    {{ session()->get($msg) }}
                </p>
            </div>
        @endif
    @endforeach
    @if(session()->has('errors'))
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
</div>