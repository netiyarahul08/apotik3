@extends('app')
@section('title')
Laundry
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laundry
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('components.alert')
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>ID Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Tanggal Jemput</th>
                            <th>Tanggal Antar</th>
                            <th>Lokasi Jemput</th>
                            <th>Lokasi Antar</th>
                            <th>Status Pengerjaan</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($records as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>#{{ $item->id }}</td>
                            <td>{{ $item->pelanggan->nama }}</td>
                            <td>{{ DateTime::createFromFormat('Y-m-d H:i:s',$item->tanggal_jemput)->format('d/m/Y H:i') }}
                            </td>
                            <td>{{ DateTime::createFromFormat('Y-m-d H:i:s',$item->tanggal_antar)->format('d/m/Y H:i') }}
                            </td>
                            <td>{{ $item->lokasi_jemput }}</td>
                            <td>{{ $item->lokasi_antar }}</td>
                            <td>{{ $item->status_pengerjaan }}</td>
                            <td>
                                <a href="{{ route('laundry.find',$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                    <span>
                                        Proses
                                    </span>
                                </a>
                                <a href="{{ route('laundry.delete',$item->id) }}" class="btn btn-danger btn-sm">
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