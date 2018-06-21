@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des services</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table">
                            <tr class="table">
                                <th class="table">dasda</th>
                                <th class="table">dasda</th>
                                <th class="table">dasda</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table">
                                <td>dddd</td>
                                <td>dddd</td>
                                <td>dddd</td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                            <tr class="table">
                                <td>dddd</td>
                                <td>dddd</td>
                                <td>dddd</td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                            <tr class="table">
                                <td>dddd</td>
                                <td>dddd</td>
                                <td>dddd</td>
                                <td><a href="#">Supprimer</a></td>
                            </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>

                        <form method="POST" action="">
                            @csrf
                            <h3>Nouveau service</h3>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="name" type="text" class="form-control" name="name"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Icon</label>
                                <div class="col-md-6">
                                    <input id="name" type="file" class="form-control" name="name" value="" required >
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
