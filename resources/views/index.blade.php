@extends('layout')

@section('content')
<h2>Data Barang</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_barang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('footer') <!-- Menyertakan footer -->
@endsection
