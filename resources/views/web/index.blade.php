@extends('app')
@section('title')
Web
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Web
        </h1>
    </section>
    <form action="{{route('web.update')}}" method="post">
        @csrf
        <section class="content">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group @if($errors->has('app_name')) has-error @endif">
                                <label for="app_name">
                                    App Name
                                </label>
                                <input type="text" class="form-control" id="app_name" name="app_name"
                                    value="{{ $setting->app_name }}">
                                @if($errors->has('app_name'))
                                <span class="help-block">
                                    {{$errors->first('app_name')}}
                                </span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('logo')) has-error @endif">
                                <label for="logo">
                                    Logo
                                </label>
                                <br>
                                <img src="{{$setting->logo}}" alt="" id="img-logo" style="height : 96px" class="img-thumbnail">
                                <div class="input-group">
                                    <input readonly type="text" class="form-control" id="logo" name="logo"
                                        value="{{ $setting->logo }}">
                                    <div class="input-group-btn">
                                        <button data-preview="img-logo" class="btn btn-default" id="btn-logo" type="button" data-input="logo">
                                            <i class="fa fa-folder-open"></i>
                                        </button>
                                    </div>
                                </div>
                                @if($errors->has('logo'))
                                <span class="help-block">
                                    {{$errors->first('logo')}}
                                </span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('favicon')) has-error @endif">
                                <label for="favicon">
                                    Favicon
                                </label> <br>
                                <img src="{{$setting->favicon}}" alt="" id="img-favicon" style="height : 96px" class="img-thumbnail">
                                <div class="input-group">
                                    <input readonly type="text" class="form-control" id="favicon" name="favicon"
                                        value="{{ $setting->favicon }}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="button" data-input="favicon" data-preview="img-favicon"
                                            id="btn-favicon">
                                            <i class="fa fa-folder-open"></i>
                                        </button>
                                    </div>
                                </div>
                                @if($errors->has('favicon'))
                                <span class="help-block">
                                    {{$errors->first('favicon')}}
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary btn-sm" type="submit">
                        <i class="fa fa-save"></i>
                        Simpan
                    </button>
                </div>
            </div>
        </section>
    </form>
</div>
@stop

@section('script')
<script>
    $('#btn-logo').filemanager();
    $('#btn-favicon').filemanager();
</script>
@stop