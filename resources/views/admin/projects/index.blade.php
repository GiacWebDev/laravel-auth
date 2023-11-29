@extends('layouts.admin')

@section('content')
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project_data)
                <tr>
                    <td>{{ $project_data->id }}</td>
                    <td>{{ $project_data->name }}</td>
                    <td>{{ $project_data->description }}</td>
                    <td><a href="#" class="btn btn-success"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
