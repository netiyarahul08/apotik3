@extends('app')
@section('title')
Admin
@stop
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Admin
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                @include('components.alert')
                <a class="btn btn-primary" href="{{ route('admin.create') }}">
                    <i class="fa fa-plus"></i>
                    Tambah Data
                </a>
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        @foreach ($records as $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><img src="{{$item->avatar}}" class="img-thumbnail" style="height : 40px; width:40px">
                            </td>
                            <td>
                                <a href="{{ route('admin.find',$item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('admin.delete',$item->id) }}" class="btn btn-danger btn-sm">
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