@extends('app')
@section('title')
Produk - Tambah
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Produk > Tambah
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('produk.store') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    @csrf
                    <div class="form-group @if($errors->has('kode')) has-error @endif">
                        <label for="kode" class="col-md-2 control-label">
                            Kode
                        </label>
                        <div class="col-md-10" id="groupkode">
                            <input type="text" class="form-control" id="kode" name="kode" value="{{ old('kode') }}">
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
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                            @if($errors->has('nama'))
                            <span class="help-block">
                                {{$errors->first('nama')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('jumlah')) has-error @endif">
                        <label for="jumlah" class="col-md-2 control-label">
                            Jumlah
                        </label>
                        <div class="col-md-10" id="groupjumlah">
                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                value="{{ old('jumlah') }}">
                            @if($errors->has('jumlah'))
                            <span class="help-block">
                                {{$errors->first('jumlah')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('satuan')) has-error @endif">
                        <label for="satuan" class="col-md-2 control-label">
                            Satuan
                        </label>
                        <div class="col-md-10" id="groupsatuan">
                            <input type="text" class="form-control" id="satuan" name="satuan"
                                value="{{ old('satuan') }}">
                            @if($errors->has('satuan'))
                            <span class="help-block">
                                {{$errors->first('satuan')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('harga_beli')) has-error @endif">
                        <label for="harga_beli" class="col-md-2 control-label">
                            Harga Beli
                        </label>
                        <div class="col-md-10" id="groupharga_beli">
                            <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                                value="{{ old('harga_beli') }}">
                            @if($errors->has('harga_beli'))
                            <span class="help-block">
                                {{$errors->first('harga_beli')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('harga_jual')) has-error @endif">
                        <label for="harga_jual" class="col-md-2 control-label">
                            Harga Jual
                        </label>
                        <div class="col-md-10" id="groupharga_jual">
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                                value="{{ old('harga_jual') }}">
                            @if($errors->has('harga_jual'))
                            <span class="help-block">
                                {{$errors->first('harga_jual')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('jenis')) has-error @endif">
                        <label for="jenis" class="col-md-2 control-label">
                            Jenis
                        </label>
                        <div class="col-md-10" id="groupjenis">
                            <select name="jenis" id="jenis" class="form-control">
                                @foreach($jenis as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select> @if($errors->has('jenis'))
                            <span class="help-block">
                                {{$errors->first('jenis')}}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('produk.index') }}" class="btn btn-default">
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

@section('script')
<script>
    $("#harga_beli").inputmask({
        alias : "currency",
        prefix : "",
        digits : 0
    });
    $("#harga_jual").inputmask({
        alias : "currency",
        prefix : "",
        digits : 0
    });
    $("#jumlah").inputmask({
        alias : "currency",
        prefix : "",
        digits : 0
    });
</script>
@endsection