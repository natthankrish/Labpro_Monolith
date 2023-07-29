@extends('layout.main')

@section('container')
<div class="container">
    <a href="{{ route('catalog')}}" class="btn btn-primary mt-5">Back to Catalog</a>
    <div class="card w-30 mt-5">
        <div class="card-body">
          <h1 class="card-title text-center">{{ $item["nama"] }}</h5>
          <h2 class="card-text">Rp. {{ $item["harga"] }}</h2>
          <h3 class="card-text">Stok: {{ $item["stok"] }}</h3>
        </div>
        <a href="{{ route('detail', ['id' => $item['id']]) }}" class="btn btn-primary">BUY</a>
    </div>
</div>
@endsection