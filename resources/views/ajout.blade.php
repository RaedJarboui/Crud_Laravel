@extends('template')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-dark ">
            <h4 class="card-header">Liste des Modules</h4>
            <div class="card-body">

                <form method="GET" action="/add">

                @csrf
                <table>
                @if ($errors->any())

<div class="alert alert-danger">

<ul>

        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
            @endif
                    <tr>
                        <td><label>Nom du module:</label></td>
                        <td><input type="text" name="Nom_Module" placeholder="nom du module" ></td>
                    </tr>
                    <tr>
                        <td><label>Durée:</label></td>
                        <td><input type="text" name="duree" id="duree" placeholder="duree" ></td>
                    </tr>
                    <tr>
                        <td><label>Description:</label></td>
                        <td> <textarea name="description" id="description" placeholder="Votre description" cols=23></textarea></td>
                    </tr>
                    <tr>
                        <td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
                    </tr>
                </table>
                </form>

@endsection

