@extends('layouts.admin')

@section('content')
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                    </td>
                    <td><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen" style="color: #ffffff;"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}
@endsection
