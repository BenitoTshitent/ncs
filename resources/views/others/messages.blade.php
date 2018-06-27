@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Boite de reception</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table">
                                <tr class="table">
                                    <th class="table">Nom</th>
                                    <th class="table">Email</th>
                                    <th class="table">Phone</th>
                                    <th class="table">Sujet</th>
                                    <th class="table">Message</th>
                                    <th class="table">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msg as $ms)
                                    <tr>
                                        <td>{{$ms['nom_entite']}}</td>
                                        <td>{{$ms['email']}}</td>
                                        <td>{{$ms['phone']}}</td>
                                        <td>{{$ms['sujet']}}</td>
                                        <td>{{$ms['contenu']}}</td>
                                        <td>{{$ms['created_at']}}</td>
                                        <td><a href="{{ route('destroyMessage', $ms['id']) }}">Supprimer</a></td>
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
