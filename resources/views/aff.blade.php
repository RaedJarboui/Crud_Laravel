@extends('template')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-black ">
            <a href="/create" class="bg-blue-500 tracking-wide text-red px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Module</a>

            <h4 class="card-header">Liste des Modules</h4>
            <div class="card-body">
                @csrf
                <table border="1">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom du Module</th>
                        <th>Description</th>
                        <th>Duree</th>
                        <th>Actions</th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listmodule as $listmodule)
                        <tr>
                            <td>{{ $listmodule->id }}</td>
                            <td>{{ $listmodule->Nom_Module }}</td>
                            <td>{{ $listmodule->description  }}</td>
                            <td>{{ $listmodule->duree }}</td>
                            <td>
                                <form action="{{ route('module.delete', [$listmodule->id]) }}" method="get">
                                    <button type="submit" class="btn btn-link">Supprimer</button>
                                </form>
                                <form action="{{ route('module.edit', [$listmodule->id]) }}" method="get">
                            <button type="submit" class="btn btn-link">Modifier</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
@endsection
