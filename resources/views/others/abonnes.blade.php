@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste d'abonnes</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table">
                                <tr class="table">
                                    <th class="table">Adresses mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abonnes as $abonne)
                                    <tr class="table" >
                                        <td>{{$abonne['email']}}</td>
                                        <td>{{$abonne['created_at']}}</td>
                                        <td><a href="{{ route('destroyAbonne', $abonne['id']) }}">Supprimer</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
