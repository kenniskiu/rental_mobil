@extends('layouts.app')

@section('content')
<div class="ms-2 mb-5">
     <a href="/" class="text-dark"> <i class="fa fa-arrow-left me-2"></i> Balik ke laman utama</a>
</div>
<div class="container mt-5">
    <form id="filterForm">
    <label for="car_id">Pilih mobil tersedia:</label>
    <select id="car_id" name="car_id" class="form-control">
        <option value="" disabled selected>Select an option</option>
        @foreach ($results as $item)
            <option value="{{$item->id}}">{{$item->brand}}</option>
        @endforeach
    </select>

    <label for="start_date">Mulai:</label>
    <input type="date" id="start_date" name="start_date" class="form-control">

    <label for="end_date">Akhir:</label>
    <input type="date" id="end_date" name="end_date" class="form-control">

    <button type="button" id="submitButton" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection
