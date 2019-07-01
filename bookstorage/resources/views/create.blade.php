@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Добавить книгу
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
      <form method="post" action="{{ route('books.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Название книги</label>
              <input type="text" class="form-control" name="book_name"/>
          </div>
          <div class="form-group">
              <label for="year">Год издания</label>
              <input type="text" class="form-control" name="book_year"/>
          </div>
          <div class="form-group">
              <label for="price">Цена</label>
              <input type="text" class="form-control" name="book_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Количество экземпляров</label>
              <input type="text" class="form-control" name="book_qty"/>
          </div>
          <div class="form-group">
              <label for="quantitypages">Количество страниц</label>
              <input type="text" class="form-control" name="book_pages"/>
          </div>
          <div class="form-group">
              <label for="description">Описание</label>
              <input type="text" class="form-control" name="book_desc"/>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Жанр</label>
            <select class="form-control" id="exampleFormControlSelect1" name="book_genre">
              <option value=1>Роман</option>
              <option value=2>Фентези</option>
              <option value=3>Фантастика</option>
              <option value=4>Детектив</option>
              <option value=5>Публицистика</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Издательство</label>
            <select class="form-control" id="exampleFormControlSelect2" name="book_ph">
              <option value=1>АСТ</option>
              <option value=2>Фантом</option>
              <option value=3>Эксмо</option>
              <option value=4>Махаон</option>
              <option value=5>Астрель</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Переплет</label>
            <select class="form-control" id="exampleFormControlSelect2" name="book_binding">
              <option value=1>Твердый А4</option>
              <option value=2>Мягкий А4</option>
              <option value=3>Интегральный А4</option>
              <option value=4>Твердый А5</option>
              <option value=5>Мягкий А5</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
  </div>
</div>
@endsection