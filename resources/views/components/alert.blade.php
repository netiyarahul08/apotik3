@if(session('success'))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-info"></i> Sukses</h4>
    {{session('message')}}
</div>
@endif
@if(session('success') === false)
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Gagal</h4>
    {{session('message')}}
</div>
@endif