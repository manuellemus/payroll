@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Puestos</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('jobs-employee.update', $job) }}" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required value="{{ old('name', $job->name) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="department_id">Select option</label>
                                <select class="form-control" name="department_id" id="department_id">
                                    @foreach($departments as $department)

                                    <option value="{{ $department->id }}">{{ $department->name }}</option>

                                    @if ($department->id == $job->id)
                                    <option selected value="{{ $department->id }}">{{ $department->name }}</option>

                                    @else
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>

                                    @endif

                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <label for="description">Description *</label>
                                <textarea class="form-control " name="description" id="" cols="15" rows="5" require>
                                {{ old('description', $job->description) }}
                                </textarea>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{ $job->user_id }}">
                        <input type="hidden" name="id" value="{{ $job->id }}">

                        <div class=" form-group">
                            @csrf
                            @method('PUT')

                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary col-12">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection