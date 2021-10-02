@extends('template')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-dark ">
            <h4 class="card-header">Liste des Modules</h4>
            <div class="card-body">
                <form action="{{ route('module.update', $module->id) }}" method="GET">
                    <div class="form-group">
                        <table>
                            <tr>
                                <td><label>Nom du module:</label></td>
                                <td><input type="text" name="Nom_Module" id="Nom_Module" value="{{ $module->Nom_Module }}" ></td>

                            </tr>
                            <tr>
                                <td><label>Durée:</label></td>
                                <td><input type="text" name="duree" id="duree" value="{{ $module->duree }}" ></td>
                            </tr><tr>
                                <td><label>Description:</label></td>
                                <td>
                                    <textarea name="description" id="description" cols=23>
                                        {{ $module->description }}</textarea>
                                </td>
                            </tr>
                    </div>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-secondary">Modifier</button>

                        </td>
                    </tr>




                    </table>
                </form>

@endsection

