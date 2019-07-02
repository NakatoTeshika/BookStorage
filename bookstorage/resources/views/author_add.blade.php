@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Добавить автора
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('authors.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Имя</label>
              <input type="text" class="form-control" name="author_name"/>
          </div>
          <div class="form-group">
              <label for="quantitypages">Фамилия</label>
              <input type="text" class="form-control" name="author_surname"/>
          </div>
          <div class="form-group">
              <label for="description">Отчество</label>
              <input type="text" class="form-control" name="author_patronymic"/>
          </div>
          <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
  </div>
</div>
@endsection