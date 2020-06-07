@extends('app')
@section('title')
Admin - Tambah
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Admin > Tambah
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ route('admin.store') }}" enctype="multipart/form-data" method="POST">
                    @include('components.alert')
                    @csrf
                    <div class="col-md-4">
                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label for="name">
                                Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                            <span class="help-block">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ old('email') }}">
                            @if($errors->has('email'))
                            <span class="help-block">
                                {{$errors->first('email')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('password')) has-error @endif">
                            <label for="password">
                                Password
                            </label>
                            <input type="text" class="form-control" id="password" name="password"
                                value="{{ old('password') }}">
                            @if($errors->has('password'))
                            <span class="help-block">
                                {{$errors->first('password')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('avatar')) has-error @endif">
                            <label for="avatar">
                                Avatar
                            </label>
                            <br>
                            <img src="{{old('avatar')}}" alt="" id="img-avatar" style="height : 96px"
                                class="img-thumbnail">
                            <div class="input-group">
                                <input readonly type="text" class="form-control" id="avatar" name="avatar"
                                    value="{{ old('avatar') }}">
                                <div class="input-group-btn">
                                    <button data-preview="img-avatar" class="btn btn-default" id="btn-avatar" type="button"
                                        data-input="avatar">
                                        <i class="fa fa-folder-open"></i>
                                    </button>
                                </div>
                            </div>
                            @if($errors->has('avatar'))
                            <span class="help-block">
                                {{$errors->first('avatar')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('admin.index') }}" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i>
                            Kembali
                        </a>
                        <button class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@stop

@section('script')
<script>
    $('#btn-avatar').filemanager();
</script>
@stop