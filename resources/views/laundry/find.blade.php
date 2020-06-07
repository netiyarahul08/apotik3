@extends('app')
@section('title')
Laundry - Proses - #{{$record->id}}
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laundry > Proses > #{{$record->id}}
        </h1>
    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Informasi Laundry
                        </h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width : 20%">
                                        Nomor Transaksi
                                    </th>
                                    <th>
                                        #{{$record->id}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Pelanggan
                                    </th>
                                    <th>
                                        {{$record->pelanggan->nama}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Jemput
                                    </th>
                                    <th>
                                        {{DateTime::createFromFormat('Y-m-d H:i:s', $record->tanggal_jemput)->format('d/m/Y H:i')}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Antar
                                    </th>
                                    <th>
                                        {{DateTime::createFromFormat('Y-m-d H:i:s', $record->tanggal_jemput)->format('d/m/Y H:i')}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Lokasi Jemput
                                    </th>
                                    <th>
                                        {{$record->lokasi_jemput}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Lokasi Antar
                                    </th>
                                    <th>
                                        {{$record->lokasi_antar}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Status Pembayaran
                                    </th>
                                    <th>
                                        {{$record->status_pembayaran}}
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Status Pengerjaan
                        </h3>
                    </div>
                    <div class="box-body">
                        <form action="{{route('laundry.ubah-status-pengerjaan', $record->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <select name="status_pengerjaan" class="form-control">
                                    <option value="Pending" @if($record->status_pengerjaan == 'Pending') selected
                                        @endif>Pending</option>
                                    <option value="Dijemput" @if($record->status_pengerjaan == 'Dijemput') selected
                                        @endif>Dijemput</option>
                                    <option value="Dikerjakan" @if($record->status_pengerjaan == 'Dikerjakan') selected
                                        @endif>Dikerjakan</option>
                                    <option value="Diantar" @if($record->status_pengerjaan == 'Diantar') selected
                                        @endif>Diantar</option>
                                    <option value="Selesai" @if($record->status_pengerjaan == 'Selesai') selected
                                        @endif>Selesai</option>
                                    <option value="Ditolak" @if($record->status_pengerjaan == 'Ditolak') selected
                                        @endif>Ditolak</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">
                                <i class="fa fa-wrench"></i>
                                <span>
                                    Ubah Status Pengerjaan
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @if($record->status_pengerjaan != 'Pending')
            <form action="{{route('laundry.update-detail', $record->id)}}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-title">Informasi Detail</div>
                            <div class="box-tools">
                                <button class="btn btn-primary btn-xs" type="submit">
                                    <i class="fa fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered" id="informasi-detail">
                                <thead>
                                    <tr>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Berat</th>
                                        <th>Subtotal</th>
                                        <th style="width : 10%">
                                            <button class="btn btn-success btn-xs" type="button" id="btn-tambah-detail">
                                                <i class="fa fa-plus"></i>
                                                Tambah Detail
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $jn = "";
                                    $harga = "";
                                    $berat = "";
                                    $subtotal = "";
                                    @endphp
                                    @if (old('jenis') == null)
                                    @foreach($record->details as $detail)
                                    @php
                                    $jn = $detail->jenis_id;
                                    $harga = $detail->harga;
                                    $berat = $detail->berat;
                                    $subtotal = $detail->subtotal;
                                    @endphp
                                    @include('laundry.detail' )

                                    @endforeach

                                    @else

                                    @foreach(old('jenis') as $key => $jenis)

                                    @php
                                    $jn = old('jenis')[$key];
                                    $harga = old('harga')[$key];
                                    $berat = old('berat')[$key];
                                    $subtotal = old('subtotal')[$key];
                                    @endphp
                                    @include('laundry.detail')

                                    @endforeach

                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            Total
                                        </td>
                                        <td>
                                            <input type="text" class="form-control total" readonly name="total"
                                                value="{{$record->total}}">
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </form>
            @endif
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="box-title">
                            Informasi Pembayaran
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width : 10%">
                                        No.
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Metode Pembayaran
                                    </th>
                                    <th>
                                        Bukti Pembayaran
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($record->pembayarans as $key => $pembayaran)
                                <tr>
                                    <td>
                                        {{++$key}}.
                                    </td>
                                    <td>
                                        {{DateTime::createFromFormat('Y-m-d H:i:s', $pembayaran->tanggal)->format('d/m/Y H:i')}}
                                    </td>
                                    <td>
                                        {{$pembayaran->rekening->nama}}
                                    </td>
                                    <td>
                                        <a href="data:image/png;base64,{{$pembayaran->bukti_pembayaran}}" target="_blank">
                                            <img src="data:image/png;base64,{{$pembayaran->bukti_pembayaran}}" target="_blank" style="height : 100px;">
                                        </a>
                                    </td>
                                    <td>
                                        {{$pembayaran->status}}
                                    </td>
                                </tr>
                                @endforeach
                                @if($record->pembayarans()->count() == 0)
                                <tr>
                                    <td colspan="5" style="text-align : center">
                                        Tidak ada pembayaran
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Status Pembayaran
                        </h3>
                    </div>
                    <div class="box-body">
                        <form action="{{route('laundry.ubah-status-pembayaran', $record->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <select name="status_pembayaran" class="form-control">
                                    <option value="Pending" @if($record->status_pembayaran == 'Pending') selected
                                        @endif>Pending</option>
                                    <option value="Dibayar" @if($record->status_pembayaran == 'Dibayar') selected
                                        @endif>Dibayar</option>
                                    <option value="Ditolak" @if($record->status_pembayaran == 'Ditolak') selected
                                        @endif>Ditolak</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">
                                <i class="fa fa-wrench"></i>
                                <span>
                                    Ubah Status Pembayaran
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
    .harga {
        text-align: right
    }
</style>
@stop

@section('script')
<script>
    $('#btn-foto').filemanager();
    $('body #informasi-detail').on('change', '.jenis', function(){
        let harga = $(this).find('option:selected').data('harga');
        $(this).parents('tr').find('.harga-input').val(harga);
        $(this).parents('tr').find('.harga').text(harga);
        recalculate();
    });
    $('body #informasi-detail').on('change', '.berat', function(){
        let harga = $(this).find('option:selected').data('harga');
        $(this).parents('tr').find('.harga').text(harga);
        recalculate();
    });
    $('body #informasi-detail').on('click', '.btn-delete-item', function(){
        $(this).parents('tr').remove();
        recalculate();
    });
    $('#btn-tambah-detail').click(function(){
        let detail = `@include('laundry.detail-default', ['jeniss' => $jeniss, 'harga' => '' ])`;
        $('#informasi-detail tbody').append(detail);
        recalculate();
    });
    function recalculate(){
        let total = 0;
        $('#informasi-detail .berat').each(function(){
            let berat = $(this).val();
            let harga = $(this).parents('tr').find('.harga').text();
            let subtotal = harga * berat;
            $(this).parents('tr').find('.subtotal').val(subtotal);
            total += subtotal;
        });
        $('.total').val(total);
    }
</script>
@stop