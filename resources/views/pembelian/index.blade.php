@extends('app')
@section('title')
Pembelian
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pembelian
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('components.alert')
                <a class="btn btn-primary" href="{{ route('pembelian.create') }}">
                    <i class="fa fa-plus"></i>
                    Tambah Data
                </a>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Supplier</th>
                            <th>Keterangan</th>
                            <th>Total</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($records as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->nomor }}</td>
                            <td>{{ DateTime::createFromFormat('Y-m-d', $item->tanggal)->format('d/m/Y') }}</td>
                            <td>{{ $item->supplier->nama }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td style="text-align: right">{{ number_format($item->total,0,',','.') }}</td>
                            </td>
                            <td>
                                <a href="{{ route('pembelian.find',$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('pembelian.delete',$item->id) }}" class="btn btn-danger btn-sm">
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