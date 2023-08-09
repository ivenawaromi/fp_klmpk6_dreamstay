@extends('layouts.app')
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style="background-color: #319795;">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-bold">DreamStay</h1>
        <div class="d-flex gap-3 justify-content-center lead fw-normal"></div>
        <div class="d-flex gap-3 overflow lead fw-normal">
            <p >
                DreamStay memberikan pengalaman menginap terbaik bagi Anda. Dengan tujuan memastikan kenyamanan dan kepuasan pelanggan, kami selalu siap membantu
                <a href="#" class="stretched-link">Continue reading</a>
            </p>
        </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"><span class="text-body-secondary">Tim Developer</span></h2>
        <p class="lead">1204200033 WIDYA NURMALA</p>
        <p class="lead">1204200228 PUTRI ANJELINA</p>
        <p class="lead">1204200179 IVENA WAROMI</p>
        <p class="lead">1204210168 ANITA RAMBE</p>
    </div>
    <div class="col-md-5">
        <img src="{{ Vite::asset('resources/images/tim.jpg')}}" class="d-block w-100" alt="image">
</div>
@endsection