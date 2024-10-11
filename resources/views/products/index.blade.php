@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Products</h1>

    <div class="row">
        @foreach($menus as $menu)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                        <p class="card-text">Size: {{ $menu->size }}</p>
                        <p class="card-text">Harga: Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
