<tr>
    <td style="width : 20%">
        <select name="jenis[]" id="" class="form-control jenis">
            <option value="">-Pilih Jenis-</option>
            @foreach($jeniss as $jenis)
            <option value="{{$jenis->id}}" data-harga="{{$jenis->harga}}">
                {{$jenis->nama}}</option>
            @endforeach
        </select>
    </td>
    <td class="harga">

    </td>
    
    <input type="hidden" class="harga-input" name="harga[]" value="{{$harga}}">
    <td>
        <input type="text" class="form-control berat" name="berat[]">
    </td>
    <td>
        <input type="text" class="form-control subtotal" readonly name="subtotal[]">
    </td>
    <td>
        <button class="btn btn-danger btn-xs btn-delete-item">
            <i class="fa fa-trash"></i>
            <span>
                Hapus Detail
            </span>
        </button>
    </td>
</tr>