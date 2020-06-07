@extends('app')
@section('title')
Jenis - Edit - {{$record->nama}}
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Jenis > Edit > {{$record->nama}}
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('jenis.update', $record->id) }}" method="POST" enctype="multipart/form-data">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    @csrf
                    <div class="form-group @if($errors->has('nama')) has-error @endif">
                        <label for="nama">
                            Nama
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $record->nama }}">
                        @if($errors->has('nama'))
                        <span class="help-block">
                            {{$errors->first('nama')}}
                        </span>
                        @endif
                    </div>
                </div>
                <div class="box-footer">

                    <a href="{{ route('jenis.index') }}" class="btn btn-default">
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