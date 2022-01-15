@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="last_name">Last name *</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="address">Address *</Address></label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="telephone">Telephone *</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" required>
                            </div>
                        </div>
                        <div class=" form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection