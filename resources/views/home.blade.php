@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card">
        <img src="/images/car-management.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title"><a href="/manajemen/{{ Auth::user()->id }}" class="text-dark">Rentalkan Mobil</a></h5>
          <p class="card-text">Untuk merentalkan mobil</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card">
        <img src="/images/car-rental.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title"><a href="/rental/{{Auth::user()->id}}" class="text-dark">Peminjaman Mobil</a></h5>
          <p class="card-text">Untuk peminjaman mobil</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card">
        <img src="/images/car-returnment.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title"><a href="" class="text-dark">Pengembalian Mobil</a></h5>
          <p class="card-text">Untuk pengembalian mobil</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
