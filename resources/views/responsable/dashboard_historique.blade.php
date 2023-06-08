@extends('responsable.dashboard')

@section('style')
  <link rel='stylesheet' href="{{ url('css/responsable/dashboard_historique.css') }}" >
@endsection
@section('tableContent')
<div class='data_gride'>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">CEF Stagiaire</th>
        <th scope="col">Titre de livre</th>
        <th scope="col">Nom et Prénom</th>
        <th scope="col">Date de réservation</th>
        <th scope="col">Date de retour</th>
        <th scope="col">Historique</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>Otto</td>
        <td><a href="" class=" Supprimer ">Supprimer</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Jacob</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><a href="" class=" Supprimer ">Supprimer </a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td >Larry the Bird</td>
        <td >Larry the Bird</td>
        <td >Larry the Bird</td>
        <td>@twitter</td>
        <td><a href="" class=" Supprimer ">Supprimer</a></td>
      </tr>
    </tbody>
  </table>
@endsection