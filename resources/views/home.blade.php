@extends('layouts.app')

@section('content')
    <div class="hero">
        <img src="/assets/hero.jpg" class="w-100" alt="" />
    </div>

    <div class="d-flex justify-content-between fraudButton">
        <div class="col-lg-3">
            <a class="nav-link buttonBiru" href="{{ url('drafting') }}">Drafting</a>
        </div>
    </div>

    <div class="d-flex justify-content-between fraudButton">
        <div class="col-lg-3">
            <a class="nav-link buttonMerah" href="{{ url('litigation') }}">Litigation</a>
        </div>
        <div class="col-lg-3 mt-3 me-3">
            <a class="nav-link cardSearch">
                <p style="margin-top: 5px; text-transform: uppercase">Penelusuran</p>
                <p style="margin-top: -8px; text-transform: uppercase">
                    Permohonan/Pelaporan
                </p>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Keyword" aria-label="Search" />
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-between fraudButton">
        <div class="col-lg-3">
            <a class="nav-link buttonAbu" href="{{ url('permit/perizinanbaru') }}">Permit</a>
        </div>
    </div>

    <div class="d-flex justify-content-between fraudButton mb-5">
        <div class="col-lg-3">
            <a class="nav-link buttonBiru" href="{{ url('/admin/dashboard') }}">Admin</a>
        </div>
    </div>
@endsection
