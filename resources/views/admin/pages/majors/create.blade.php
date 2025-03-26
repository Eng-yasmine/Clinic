@extends('admin.layout.app')
@section('title','create major')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Major</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('majors.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form action="{{ route('majors.store') }}" method="POST">
            @csrf

        <div class="container-fluid">
            @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>


            @enderror
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
                                        <label for="title">Title</label>
                                        <input type="text" name="title"  id="title" class="form-control" placeholder="Title">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('majors.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
        </form>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection
