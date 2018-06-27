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
                                <th class="table">Titre</th>
                                <th class="table">Image</th>
                                <th class="table">Description</th>
                                <th class="table">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service['titre']}}</td>
                                    <td>{{$service['iconUrl']}}</td>
                                    <td>{{$service['description']}}</td>
                                    <td>{{$service['created_at']}}</td>
                                    <td><a href="{{ route('destroyProduit', $service['id']) }}">Supprimer</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <form method="POST" action="/newservice">
                            @csrf
                            <h3>Nouveau service</h3>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>
                                <div class="col-md-6">
                                    <input id="titre" type="text" class="form-control" name="titre" value="" required  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Icon</label>
                                <div class="col-md-6">
                                    <input id="icon" type="file" class="form-control" name="icon" value="" required >
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
