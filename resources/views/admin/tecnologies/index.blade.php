@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">

            @if (@session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if (@session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.tecnologies.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nuova Tecnologia" name="name">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Crea</button>
                </div>
            </form>


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
                            {{-- <form action="{{ route('admin.tecnologies.destroy', $tecnology->id) }}" method="POST"
                                onsubmit="return confirm('Sei sicuro di voler eliminare questa tecnologia?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </form> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
