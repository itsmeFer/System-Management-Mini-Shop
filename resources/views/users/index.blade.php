@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Pengguna</h1>
    
    <!-- Tombol Kembali ke Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Terakhir Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->last_login_at)
                        {{ \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() }}
                    @else
                        Belum pernah login
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
