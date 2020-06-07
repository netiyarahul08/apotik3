@extends('app')
@section('title')
Pembelian - Edit - {{$record->id}}
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pembelian > Edit > {{$record->id}}
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('pembelian.update', $record->id) }}" class="form-horizontal" method="POST"
            enctype="multipart/form-data">
            <div class="box box-primary">
                <div class="box-body">
                    @include('components.alert')
                    @csrf
                    <div class="form-group @if($errors->has('nomor')) has-error @endif">
                        <label for="nomor" class="col-md-2 control-label">
                            Nomor
                        </label>
                        <div class="col-md-4" id="groupnomor">

                            <input type="text" class="form-control" id="nomor" name="nomor"
                                value="{{ $record->nomor }}">
                            @if($errors->has('nomor'))
                            <span class="help-block">
                                {{$errors->first('nomor')}}
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group @if($errors->has('tanggal')) has-error @endif">
                        <label for="tanggal" class="col-md-2 control-label">
                            Tanggal
                        </label>
                        <div class="col-md-4" id="grouptanggal">
                            <div class="input-group  date datepicker">
                                <input type="text" class="form-control" readonly id="tanggal" name="tanggal"
                                    value="{{ DateTime::createFromFormat('Y-m-d', $record->tanggal)->format('d/m/Y') }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </div>
                            </div>
                            @if($errors->has('tanggal'))
                            <span class="help-block">
                                {{$errors->first('tanggal')}}
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('supplier')) has-error @endif">
                        <label for="supplier" class="col-md-2 control-label">
                            Supplier
                        </label>
                        <div class="col-md-4" id="groupsupplier">

                            <select class="form-control" id="supplier" name="supplier" value="{{ old('supplier') }}">
                                @foreach($supplier as $item)
                                <option value="{{$item->id}}" @if($item->id == $record->id_supplier) selected
                                    @endif>{{$item->nama}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('supplier'))
                            <span class="help-block">
                                {{$errors->first('supplier')}}
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('keterangan')) has-error @endif">
                        <label for="keterangan" class="col-md-2 control-label">
                            Keterangan
                        </label>
                        <div class="col-md-4" id="groupketerangan">

                            <textarea type="text" class="form-control" id="keterangan"
                                name="keterangan">{{ $record->keterangan }}</textarea>
                            @if($errors->has('keterangan'))
                            <span class="help-block">
                                {{$errors->first('keterangan')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-success" type="button" id="btn-tambah-produk">
                        <i class="fa fa-plus"></i>
                        Tambah Produk
                    </button>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="35%">
                                    Produk
                                </th>
                                <th width="20%">
                                    Harga
                                </th>
                                <th width="20%">
                                    Jumlah
                                </th>
                                <th width="20%">
                                    Subtotal
                                </th>
                                <th width="5%">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="detail-produk">
                            <tr>

                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">
                                    Total
                                </th>
                                <th class="form-group  @if($errors->has('total')) has-error @endif" id="grouptotal">
                                    <input type="text" class="form-control" name="total" id="total" readonly>
                                    @if($errors->has('total'))
                                    <span class="help-block">
                                        {{$errors->first('total')}}
                                    </span>
                                    @endif
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="box-footer">

                    <a href="{{ route('pembelian.index') }}" class="btn btn-default">
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
    $(".datepicker").datepicker({format : "dd/mm/yyyy"});
    var produk = {!!$produk!!};
    var detailProduk = {!!$record->pembelianDetail!!}
    renderDetailProduk();
    function renderDetailProduk(){
        $detailProduk = $("#detail-produk");
        $detailProduk.html("");
        var total = 0;
        $("#total").val(total);
        if (detailProduk.length == 0){
            $detailProduk.html("<tr><td colspan='5' style='text-align : center '>Silahkan tambah produk</td></tr>");
            return;
        }
        detailProduk.forEach(function(item, index){
            $("#detail-produk").append(`<tr>
                <td>
                    <select class='form-control' id='produk-`+index+`' name="produk[]"></select>
                </td>
                <td>
                    <input class='form-control' id='harga-`+index+`' readonly  name="harga[]"/>
                </td>
                <td>
                    <input class='form-control' id='jumlah-`+index+`'  name="jumlah[]"/>
                </td>
                <td>
                    <input class='form-control' id='subtotal-`+index+`' readonly  name="subtotal[]"/>
                </td>
                <td>
                    <button class='btn btn-danger btn-sm' id='btn-delete-`+index+`' type='button'>
                        <i class='fa fa-trash'/>
                    </button>
                </td>
            </tr>`);
            produk.forEach(function(itemProduk, indexProduk){
                $("#produk-"+index).append('<option value="'+itemProduk.id+'" data-harga="'+itemProduk.harga_beli+'">'+itemProduk.nama+'</option>');
            });
            $("#produk-"+index).change(function(){
                $("#harga-"+index).val($(this).find('option:selected').data('harga'));
                detailProduk[index].id_produk = $(this).val();
                detailProduk[index].harga = $(this).find('option:selected').data('harga');
                $("#jumlah-"+index).trigger('change');
            });
            $("#produk-"+index).val(detailProduk[index].id_produk)
            $("#produk-"+index).trigger('change');
            $("#harga-"+index).inputmask({ alias : 'currency', prefix : '', digits : 0, autoUnmask : true});
            $("#jumlah-"+index).inputmask({ alias : 'currency', prefix : '', digits : 0, autoUnmask : true});
            $("#subtotal-"+index).inputmask({ alias : 'currency', prefix : '', digits : 0, autoUnmask : true});
            $("#btn-delete-"+index).click(function(){
                detailProduk.splice(index, 1);
                renderDetailProduk();
            });
            $("#jumlah-"+index).val(detailProduk[index].jumlah);
            $("#subtotal-"+index).val(detailProduk[index].subtotal);

            $("#jumlah-"+index).change(function(){
                var harga = $("#harga-"+index).val();
                var jumlah = $("#jumlah-"+index).val();
                var subtotal = harga * jumlah;
                $("#subtotal-"+index).val(subtotal);
                detailProduk[index].jumlah = jumlah;
                detailProduk[index].subtotal = subtotal;
                renderDetailProduk();
            });
            total += detailProduk[index].subtotal;
            $("#total").val(total);
        });
    }
    $("#total").inputmask({ alias : 'currency', prefix : '', digits : 0, autoUnmask : true});

    $("#btn-tambah-produk").click(function(){
        detailProduk.push({
            id_produk : 0,
            harga : 0,
            jumlah : 0,
            subtotal : 0
        });
        renderDetailProduk();
    });
</script>
@stop