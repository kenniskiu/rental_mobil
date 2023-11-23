@extends('layouts.app')

@section('content')
<div class="ms-2 mb-5">
     <a href="/manajemen/{{ Auth::user()->id }}" class="text-dark"> <i class="fa fa-arrow-left me-2"></i> Balik ke list manajemen</a>
</div>
<div class="container" style="min-height: 750px">
      <div class="card">
        <div class="card-body p-5">
               <h3>Buat Manajemen</h3>
               <hr class="mb-4">
               <form method="post" action="/manajemen/store">
                    @csrf
                    <div class="row">
                         <div class="col-6 mb-3">
                              <label for="brand" class="form-label">Merek</label>
                              <input type="text" class="form-control" id="brand" name="brand"
                                   @isset($management)
                                        value="{{ $management->brand }}"
                                   @endisset
                              required>
                         </div>
                         <div class="col-6 mb-3">
                              <label for="model" class="form-label">Model</label>
                              <input type="text" class="form-control" id="model" name="model"
                                   @isset($management)
                                        value="{{ $management->model }}"
                                   @endisset
                              required>
                         </div>
                         <div class="col-6 mb-3">
                              <label for="plate" class="form-label">Plat</label>
                              <input type="text" class="form-control" id="plate" name="plate"
                                   @isset($management)
                                        value="{{ $management->plate }}"
                                   @endisset
                              required>
                         </div>
                         <div class="col-6 mb-3">
                              <label for="cost" class="form-label">Harga per hari (Rupiah)</label>
                              <input type="number" class="form-control" id="cost" name="cost"
                                   @isset($management)
                                        value="{{ $management->cost }}"
                                   @endisset
                              required>
                         </div>
                         <div class="d-none">
                              <input type="number" class="form-control" id="user_id" name="user_id"
                                   value="{{Auth::user()->id}}"
                              required>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
          </div>
      </div>
</div>
@endsection
