@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Фамилия</td>
          <td>Имя</td>
          <td>Отчество</td>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{$author->Surname}}</td>
            <td>{{$author->Name}}</td>
            <td>{{$author->Patronymic}}</td>
            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection