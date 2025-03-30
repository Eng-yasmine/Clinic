@extends('user.layout.app')

@section('title','appointment')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Book an appointment</h1>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form action="{{ route('user.store') }}" method="POST">
            @csrf




            @if(session('success'))


            <div class="alert alert-success">
                {{session('success') }}
            </div>


            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name"  id="name" class="form-control" placeholder="type your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">email</label>
                                        <input type="text" name="email"  id="email" class="form-control" placeholder="type your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">phone</label>
                                        <input type="text" name="number"  id="number" class="form-control" placeholder="type your phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">gender</label>
                                        <select name="gender" id="">
                                            <option value="1">male</option>
                                            <option value="2">female</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">

                                        <input  type="hidden" name="doctor_id" value="{{ $doctor->id }}"  class="form-control" placeholder="Title">
                                        <p>Book an appointment with doctor : <strong>{{ $doctor->name }}</strong></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Major</label>
                                        <select name="majors" id="">
                                            <option value="{{ $doctor->major_id }}">{{ $doctor->major->title }}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('home') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
        </form>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

@endsection
