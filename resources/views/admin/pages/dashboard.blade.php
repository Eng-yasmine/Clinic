<?php use App\Models\Doctor; ?>
@extends('admin.layout.app')
@section('title','DashBoard')


@section('content')

{{-- @php
$doctorsCount = 0;
foreach ($majors as $major) {
    $doctorsCount += count($major->doctor);
}
@endphp --}}
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DashBoard</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>120</h3><p>Patients</p></div><div class="icon"><i class="fas fa-user-injured"></i></div></div></div>
                {{-- @foreach ($majors as $major) --}}

                <div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>{{ Doctor::count() }}</h3><p>Doctors</p></div><div class="icon"><i class="fas fa-user-md"></i></div></div></div>
                {{-- @endforeach --}}
                <div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>350</h3><p>Appointments</p></div><div class="icon"><i class="fas fa-calendar-check"></i></div></div></div>
                <div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>$50,000</h3><p>Revenue</p></div><div class="icon"><i class="fas fa-dollar-sign"></i></div></div></div>

            </div>
        </div>
    </section>
</div>
@endsection
