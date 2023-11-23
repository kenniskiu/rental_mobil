@extends('layouts.app')

@section('content')
<div class="ms-2 mb-5">
     <a href="/" class="text-dark"> <i class="fa fa-arrow-left me-2"></i> Balik ke laman utama</a>
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Mobil yang Anda Rentalkan User {{ Auth::user()->name }}</h2>
        <a href="create" class="btn btn-primary">Tambah Rental</a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merek</th>
                <th>Model</th>
                <th>Plat</th>
                <th>Tarif (per hari)</th>
                <th>Tersedia</th>
                <th>Ubah</th>
                <th>Buang</th>
            </tr>
        </thead>
        <tbody>
            @if(count($managements)!=0)
                @foreach($managements as $management)
                    <tr class="align-middle">
                        <td>{{ $management->id }}</td>
                        <td>{{ $management->brand }}</td>
                        <td>{{ $management->model }}</td>
                        <td>{{ $management->plate }}</td>
                        <td>{{ $management->cost }}</td>
                        <td>
                            @if($management->is_available)
                                <i class="fa fa-check"></i>
                            @endif
                        </td>
                        <td><a href="/manajemen/edit/{{$management->id}}"
                        class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                        <td><a data-inventory-id="{{ $management->id }}" href="#deleteModal" data-bs-toggle="modal" class="btn btn-danger inventory-delete"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="11" scope="col">Tidak ada data</td>
                    </tr>
            @endif
        </tbody>
    </table>
</div>
@if(session('success'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Rental mobil</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif

@if (count($managements)!=0)
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                Apakah anda yakin?
            </div>

            <div class="modal-footer">
                <form id="delete-form" action="destroy/{{$management->id}}" method="POST">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
<script>
    $(document).ready(function() {
        $('.toast').toast('show');
    })
</script>
@endsection
