@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des produits</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table">
                            <tr class="table">
                                <th class="table">Titre</th>
                                <th class="table">Lien</th>
                                <th class="table">Image</th>
                                <th class="table">Description</th>
                                <th class="table">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td>{{$produit['titre']}}</td>
                                    <td>{{$produit['lien']}}</td>
                                    <td>{{$produit['imageUrl']}}</td>
                                    <td>{{$produit['description']}}</td>
                                    <td>{{$produit['created_at']}}</td>
                                    <td><a href="{{ route('destroyProduit', $produit['id']) }}">Supprimer</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <form method="post" action="/newproduct" enctype="multipart/form-data">
                                @csrf
                                <h3> Nouveau produit</h3>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-6">
                                        <input  id="image" type="file" class="form-control" name="image" value="" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>
                                    <div class="col-md-6">
                                        <input id="titre" type="text" class="form-control" name="titre" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Lien</label>
                                    <div class="col-md-6">
                                        <input id="lien" type="text" class="form-control" name="lien" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea id="description" type="text" class="form-control" name="description"></textarea>
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
