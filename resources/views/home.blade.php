@extends('layouts.app')
@section('content')
<div class="p-5 mb-4 bg-body-secondary rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Hello, Traveller!</h1>
        <p class="col-md-8 fs-4">Enjoy your day, let's go around Indonesia</p>
        <p><button class="btn btn-outline-primary" type="button" href={{ route('form.index')}}>Booking</button></p>
    </div>
</div>

<!-- form booking -->
<form>
    <div class="container">
        <h3> Form Booking </h3>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <label for="kotaTujuan" class="form-label">Kota Tujuan</label>
                <input type="kotaTujuan" class="form-control" id="kotaTujuan" placeholder="Kota Tujuan">
            </div>
            <div class="col-md-4">
                <label for="validation" class="form-label">Person</label>
                <input type="number" class="form-control" id="person" placeholder="Person">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="validation" class="form-label">Tanggal Cek In</label>
                <input type="date" class="form-control" id="validation">
            </div>
            <div class="col-md-4">
                <label for="validation" class="form-label">Tanggal Cek Out</label>
                <input type="date" class="form-control" id="validation">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for="tipeKamar" class="form-label">Tipe Kamar</label>
                <select class="form-control" id="tipeKamar">
                    <option selected>Standard Room</option>
                    <option>Superior Room</option>
                    <option>Deluxe Room</option>
                    <option>Twin Room</option>
                    <option>Family Room</option>
                </select>
            </div>
        </div>


        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary" href="{{route ('hotel.index')}}">Booking</button>

    </div>
</form>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Bali</h2>
            <img src="{{ Vite::asset('resources/images/bali.jpg')}}" class="d-block w-100" alt="image">
            <p>Bali adalah sebuah pulau di indonesia yang dikenal karena memiliki pengunungan berapi yang hijau, teraseing sawah yang unik, pantai dan terumbu karang yang indah dan cantik.
                Terdapat banyak tempat wisata religi seperti Pura Uluwatu yang berdiri di atas tebing</p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Yogyakarta</h2>
            <img src="{{ Vite::asset('resources/images/jogja.jpg')}}" class="d-block w-100" alt="image">
            <p>Kota Yogyakarta adalah ibu kota daerah istimewa sekaligus pusat pemerintahan dan perekonomian dari Daerah Istimewa Yogyakarta, Indonesia.
                Kota ini adalah kota besar yang mempertahankan konsep tradisional dan budaya</p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Bandung</h2>
            <img src="{{ Vite::asset('resources/images/bandung.jpg')}}" class="d-block w-100" alt="image">
            <p>Bandung adalah kisah dan sejarah yang telah bergulir lebih dari dua abad silam. Kota yang dikelilingi pegunungan ini memang menyimpan berjuta keindahan alam.
                Tidak hanya itu, berbagai macam destinasi wisata menarik mulai dari tempat kuliner sampai tempat rekreasi bisa ditemukan di Kota Bandung. </p>
            <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
</div>

<hr class="featurette-divider">

{{-- Footer --}}
@endsection
