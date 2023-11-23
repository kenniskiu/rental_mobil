@extends('layouts.app')

@section('content')
<div class="ms-2 mb-5">
     <a href="/" class="text-dark"> <i class="fa fa-arrow-left me-2"></i> Balik ke laman utama</a>
</div>
<div class="container mt-5">
    <form id="filterForm">
    <label for="selectOption">Pilih mobil tersedia:</label>
    <select id="selectOption" name="selectOption" class="form-control">
        <option value="" disabled selected>Select an option</option>
        @foreach ($results as $item)
            <option value="{{$item->id}}">{{$item->brand}}</option>
        @endforeach
    </select>

    <label for="startDate">Mulai:</label>
    <input type="date" id="startDate" name="start_date" class="form-control">

    <label for="endDate">Akhir:</label>
    <input type="date" id="endDate" name="end_date" class="form-control">

    <button type="button" id="submitButton" class="btn btn-primary mt-4">Submit</button>
</form>

<div id="result"></div>
</div>
<script>
    $(document).ready(function() {
        $("#submitButton").click(function() {
            var selectedOption = $("#selectOption").val();
            var startDate = $("#startDate").val();
            var endDate = $("#endDate").val();

            $.ajax({
                url: '/rental/fetch',
                method: 'GET', 
                data: {
                    selectOption: selectedOption,
                    startDate: startDate,
                    endDate: endDate
                },
                success: function(data) {
                    console.log(data)
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('AJAX error:', error);
                }
            });
        });
    });
</script>
@endsection
