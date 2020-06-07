@extends('app')
@section('title')
Jenis - Tambah
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Jenis > Tambah
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('jenis.store') }}" enctype="multipart/form-data" method="POST">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
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
                        </div>
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('jenis.index') }}" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                    <button class="btn btn-primary pull-right">
                        <i class="fa fa-save"></i>
                        Simpan
                    </button>
                </div>
            </div>

        </form>
    </section>
</div>
@stop