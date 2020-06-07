@extends('app')
@section('title')
Customer - Edit - {{$record->nama}}
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Customer > Edit > {{$record->nama}}
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('customer.update', $record->id) }}" class="form-horizontal" method="POST"
            enctype="multipart/form-data">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    @csrf

                    <div class="form-group @if($errors->has('kode')) has-error @endif">
                        <label for="kode" class="col-md-2 control-label">
                            Kode
                        </label>
                        <div class="col-md-10" id="groupkode">

                            <input type="text" class="form-control" id="kode" name="kode" value="{{ $record->kode }}">
                            @if($errors->has('kode'))
                            <span class="help-block">
                                {{$errors->first('kode')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('nama')) has-error @endif">
                        <label for="nama" class="col-md-2 control-label">
                            Nama
                        </label>
                        <div class="col-md-10" id="groupnama">

                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $record->nama }}">
                            @if($errors->has('nama'))
                            <span class="help-block">
                                {{$errors->first('nama')}}
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group @if($errors->has('alamat')) has-error @endif">
                        <label for="alamat" class="col-md-2 control-label">
                            Alamat
                        </label>
                        <div class="col-md-10" id="groupalamat">

                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $record->alamat }}">
                            @if($errors->has('alamat'))
                            <span class="help-block">
                                {{$errors->first('alamat')}}
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group @if($errors->has('telepon')) has-error @endif">
                        <label for="telepon" class="col-md-2 control-label">
                            Telepon
                        </label>
                        <div class="col-md-10" id="grouptelepon">

                            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $record->telepon }}">
                            @if($errors->has('telepon'))
                            <span class="help-block">
                                {{$errors->first('telepon')}}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">

                    <a href="{{ route('customer.index') }}" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                    <button class="btn btn-warning pull-right">
                        <i class="fa fa-pencil"></i>
                        Update
                    </button>
                </div>
            </div>
        </form>
    </section>
</div>
@stop

@section('script')
<script>
    $('#btn-foto').filemanager();
</script>
@stop