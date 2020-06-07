@extends('app')
@section('title')
Dashboard
@stop
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{App\Jenis::count()}}</h3>
            <p>Jenis</p>
          </div>
          <div class="icon">
            <i class="fa fa-tags"></i>
          </div>
          <a href="{{route('jenis.index')}}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{App\Customer::count()}}</h3>
            <p>Customer</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{route('customer.index')}}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{App\Supplier::count()}}</h3>
            <p>Supplier</p>
          </div>
          <div class="icon">
            <i class="fa fa-building"></i>
          </div>
          <a href="{{route('supplier.index')}}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{App\Produk::count()}}</h3>
            <p>Produk</p>
          </div>
          <div class="icon">
            <i class="fa fa-circle"></i>
          </div>
          <a href="{{route('produk.index')}}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      {{--
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Laundry Selesai</span>
            <span class="info-box-number">{{App\Transaksi::where('status_pengerjaan', 'Selesai')->count()}}</span>

    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-yellow"><i class="fa fa-truck"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Laundry Dijemput</span>
      <span class="info-box-number">{{App\Transaksi::where('status_pengerjaan', 'Dijemput')->count()}}</span>

    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box">
    <span class="info-box-icon bg-green-active"><i class="fa fa-truck"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Laundry Diantar</span>
      <span class="info-box-number">{{App\Transaksi::where('status_pengerjaan', 'Diantar')->count()}}</span>

    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>



<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{App\Rekening::count()}}</h3>

      <p>Rekening</p>
    </div>
    <div class="icon">
      <i class="fa fa-bank"></i>
    </div>
    <a href="{{route('rekening.index')}}" class="small-box-footer">
      More info <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>
</div> --}}

{{-- <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{ App\Jabatan::count() }}</h3>
<p>
  Data Jabatan
</p>
</div>
<div class="icon">
  <i class="fa fa-database"></i>
</div>
<a href="{{ route('jabatan.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div> --}}



</div>
</section>
</div>
@stop