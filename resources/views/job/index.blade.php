@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Puesto</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('jobs-employee.create') }}" class="btn btn-sm btn-primary float-right">Crete job    </a>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>description</th>
                                <th>Department</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->get_excerpt }}</td>
                                <td>{{ $job->department->name }}</td>

                                <td>
                                    <a href="{{ route('jobs-employee.edit', $job) }}" class="btn btn-sm btn-primary float-right">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('jobs-employee.destroy', $job->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea Eliminar ?...')">

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection