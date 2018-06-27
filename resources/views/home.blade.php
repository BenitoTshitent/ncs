@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Acceuil</div>
                <div class="card-body">

                        <form method="POST" action="{{ route('home') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Logo </label>
                                <div class="col-md-6">
                                    <input id="logo" type="file" class="form-control" name="logo" value="" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Texte primaire</label>
                                <div class="col-md-6">
                                    <input id="primeTextAcc" type="text" class="form-control" name="primeTextAcc"  value="{{$acceuils['primeTextAcc']}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Texte secondaire</label>
                                <div class="col-md-6">
                                     <textarea id="secTextAcc" type="text" class="form-control" name="secTextAcc" >{{$acceuils['secTextAcc']}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Image </label>
                                <div class="col-md-6">
                                    <input id="ImageAcc" type="file" class="form-control" name="ImageAcc" value="" required >
                                </div>
                            </div>
                            <input type="hidden" value="acceuil" name="checker">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Mettre a jour
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>

             <div class="card">
                <div class="card-header">Apropos de nous</div>
                <div class="card-body">

                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Image de fond</label>
                            <div class="col-md-6">
                                <input id="imagefdApp" type="file" class="form-control" name="imagefdApp" value="" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Entete</label>
                            <div class="col-md-6">
                                <input id="enteteTextApp" type="text" class="form-control" name="enteteTextApp" value="{{$acceuils['enteteTextApp']}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="descTextApp" type="text" class="form-control" name="descTextApp">{{$acceuils['descTextApp']}}</textarea>
                            </div>
                        </div>
                        <input type="hidden" value="apropos" name="checker">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Mettre a jour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

             <div class="card">
                <div class="card-header">Nos contacts</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('home') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Adresse mail</label>
                            <div class="col-md-6">
                                <input id="emailTextContact" type="text" class="form-control" name="emailTextContact" value="{{$acceuils['emailTextContact']}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Numero 1</label>
                            <div class="col-md-6">
                                <input id="num1TextContact" type="text" class="form-control" name="num1TextContact" value="{{$acceuils['num1TextContact']}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Numero 2</label>
                            <div class="col-md-6">
                                <input id="num2TextContact" type="file" class="form-control" name="num2TextContact" value="{{$acceuils['num2TextContact']}}" required >
                            </div>
                        </div>
                        <input type="hidden" value="contacts" name="checker">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Mettre a jour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

             <div class="card">
                <div class="card-header">Notre adresse</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('home') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Numero, Avenue</label>
                            <div class="col-md-6">
                                <input id="numAvenenue" type="text" class="form-control" name="numAvenenue" value="{{$acceuils['numAvenenue']}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ville, Commune</label>
                            <div class="col-md-6">
                                <input id="villeCommune" type="text" class="form-control" name="villeCommune" value="{{$acceuils['villeCommune']}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Pays, Province</label>
                            <div class="col-md-6">
                                <input id="paysProv" type="text" class="form-control" name="paysProv" value="{{$acceuils['paysProv']}}" required >
                            </div>
                        </div>
                        <input type="hidden" value="adresse" name="checker">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Mettre a jour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

             <div class="card">
                <div class="card-header">Roseaux sociaux</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('home') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">FaceBook</label>
                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{$acceuils['facebook']}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Twitter</label>
                            <div class="col-md-6">
                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{$acceuils['twitter']}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Intagram</label>
                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control" name="instagram" value="{{$acceuils['instagram']}}" required >
                            </div>
                        </div>
                        <input type="hidden" value="reseauxsociaux" name="checker">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Mettre a jour
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
