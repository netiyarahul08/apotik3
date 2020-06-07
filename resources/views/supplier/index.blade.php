@extends('app')
@section('title')
Supplier
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Supplier
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('components.alert')
                <a class="btn btn-primary" href="{{ route('supplier.create') }}">
                    <i class="fa fa-plus"></i>
                    Tambah Data
                </a>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($records as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telepon }}</td>
                            </td>
                            <td>
                                <a href="{{ route('supplier.find',$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('supplier.delete',$item->id) }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@stop