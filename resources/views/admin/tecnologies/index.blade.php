@extends('layouts.admin')

@section('content')
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnologies as $tecnology_data)
                <tr>
                    <td>{{ $tecnology_data->id }}</td>
                    <td>{{ $tecnology_data->name }}</td>
                    <td><a href="#" class="btn btn-success"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
