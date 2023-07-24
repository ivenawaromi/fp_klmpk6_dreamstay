@extends('layouts.app')
@section('content')
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

        <button type="submit" class="btn btn-primary">Booking</button>

    </div>
</form>
@endsection
