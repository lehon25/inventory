@extends ('layouts.admin_template')
@section ('content')
@include('layouts.errors')
<fieldset><h3 class="box-title">{{ $page_title }}</h3></fieldset>
<div class="box">
<div class="box-body">
  <table id="table"
 class="table table-striped"
 data-pagination="true"
 data-toggle="table"
 data-search="true"
 data-page-size="20"
 data-show-refresh="true"
 data-toolbar="#toolbar">
    <thead>
    <tr>

            <th>Nama Barang</th>
            <th>Stok Barang</th>
            <th>Harga Pembelian</th>
            <th>Harga Penjualan</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
  @foreach($barangs as $barang)
  <tr>
        <td>{{($barang->name_barang)}}</td>
        <td>{{number_format($barang->stok)}}</td>
        <td>{{ number_format($barang->harga_penjualan) }}</td>
        <td>
         <button type="button" class="btn btn-xs btn-danger" title="Edit Kategori" onclick="window.location.href='/tambah-barang'"><i class="fa fa-pencil-square-o"></i> Hapus</button>
         </td>
         <td>
                <button type="button" class="btn btn-xs btn-warning" onclick="window.location.href='/hapus-barang/{{$barang->id}}'"><i class="fa fa-sign-out"></i> CANCEL</button>

              </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
  $('#table').bootstrapTable();
</script>
@endsection
