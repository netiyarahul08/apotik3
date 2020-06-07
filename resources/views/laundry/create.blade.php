@extends('app')
@section('title')
Laundry - Tambah
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laundry > Tambah
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ route('laundry.store') }}" enctype="multipart/form-data" method="POST">
                    @include('components.alert')
                    @csrf
                    <div class="col-md-4">

                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
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
                        <div class="form-group @if($errors->has('nama')) has-error @endif">
                            <label for="nama">
                                Nama
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                            @if($errors->has('nama'))
                            <span class="help-block">
                                {{$errors->first('nama')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('alamat')) has-error @endif">
                            <label for="alamat">
                                Alamat
                            </label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="{{ old('alamat') }}">
                            @if($errors->has('alamat'))
                            <span class="help-block">
                                {{$errors->first('alamat')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('telepon')) has-error @endif">
                            <label for="telepon">
                                Telepon
                            </label>
                            <input type="text" class="form-control" id="telepon" name="telepon"
                                value="{{ old('telepon') }}">
                            @if($errors->has('telepon'))
                            <span class="help-block">
                                {{$errors->first('telepon')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('laundry.index') }}" class="btn btn-default">
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
    $('#btn-foto').filemanager();
</script>
@stop