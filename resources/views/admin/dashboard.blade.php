@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <input id="search" class="form-control" type="text" id="search" placeholder="Type to search" style="margin-bottom: 10px!important;">
        <div class="panel panel-default">
          <!-- Table -->
          <div class="table-scroll">
            <table class="table table-bordered table-striped">
              <thead>
                <tr height="15px">
                  <th class="text-center" style="width:3%">
                    No
                  </th>
                  <th class="text-center" style="width:12%">
                    Nama
                  </th>
                  <th class="text-center" style="width:5%">
                    Tanggal
                  </th>
                  <th class="text-center" style="width:7%">
                    Jenis
                  </th>
                  <th class="text-center" style="width:8%">
                    Jumlah
                  </th>
                  <th class="text-center" style="width:7%">
                    Berat
                  </th>
                  <th class="text-center" style="width:8%">
                    Pengirim
                  </th>
                  <th class="text-center" style="width:10%">
                    Penerima
                  </th>
                  <th class="text-center" style="width:10%">
                    Kota Asal
                  </th>
                  <th class="text-center" style="width:10%">
                    Kota Tujuan
                  </th>
                  <th class="text-center" style="width:10%">
                    AWB
                  </th>
                  <th class="text-center" style="width:10%">
                    Catatan
                  </th>
                </tr>
              </thead>
              <tbody id="table">
                @foreach ($barang as $index => $brg)
                <tr>
                  <td style="width:3%">
                    {{$index+1}}
                  </td>
                  <td style="width:12%">
                    {{$brg->name}}
                  </td>
                  <td style="width:5%">
                    {{$brg->created_at->format('d/m/y')}}
                  </td>
                  <td style="width:7%">
                    {{$brg->commodity}}
                  </td>
                  <td style="width:8%">
                    {{$brg->total}} box
                  </td>
                  <td style="width:7%">
                    {{$brg->weight}} kg
                  </td>
                  <td style="width:8%">
                    {{$brg->sender}}
                  </td>
                  <td style="width:10%">
                    {{$brg->receiver}}
                  </td>
                  <td style="width:10%">
                    {{$brg->origin}}
                  </td>
                  <td style="width:10%">
                    {{$brg->destination}}
                  </td>
                  <td style="width:10%">
                    {{$brg->awb}}
                  </td>
                  <td style="width:10%">
                    <textarea name="name" rows="2" readonly style="resize:none; border:none; overflow-y:scroll;">{{$brg->note}}</textarea>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <script type="text/javascript">
              var $rows = $('#table tr');
              $('#search').keyup(function() {
                val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                $rows.show().filter(function() {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
              });
          </script>
        </div>
      </div>
    </div>
</div>
@endsection
