@extends('app')
@section('title')
Produk
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Produk
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('components.alert')
                <a class="btn btn-primary" href="{{ route('produk.create') }}">
                    <i class="fa fa-plus"></i>
                    Tambah Data
                </a>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Jenis</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($records as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->jenis->nama }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td style="text-align:right">{{ Helper::renderAngka($item->jumlah) }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td style="text-align:right">{{ Helper::renderAngka($item->harga_beli) }}</td>
                            <td style="text-align:right">{{ Helper::renderAngka($item->harga_jual) }}</td>
                            </td>
                            <td>
                                <a href="{{ route('produk.find',$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('produk.delete',$item->id) }}" class="btn btn-danger btn-sm">
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