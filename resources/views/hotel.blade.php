@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 750px;">
         <div class="row g-0">
            <div class="col-4">
                <img src="{{ Vite::asset('resources/images/yellohotel.jpg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">PIK Avenue Jakarta</h5>
                    <p class="card-text">Swissôtel Jakarta PIK Avenue menawarkan sepeda gratis, pusat kebugaran, lounge bersama, dan restoran di Jakarta.
                        Hotel bintang 5 ini menawarkan dapur bersama, layanan kamar, dan Wi-Fi gratis.</p>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    <p><a href="#" class="btn btn-primary">Booking</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 750px;">
        <div class="row g-0">
            <div class="col-4">
                <img src="{{ Vite::asset('resources/images/ciputra.jpg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Hotel Ciputra</h5>
                    <p class="card-text">Hotel Ciputra Cibubur managed by Swiss-Belhotel International menawarkan kamar-kamar dengan akses WiFi gratis dan
                        memiliki restoran yang menyajikan hidangan internasional.</p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p><a href="#" class="btn btn-primary">Booking</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
