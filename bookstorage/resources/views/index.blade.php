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
          <td>Название книги</td>
          <td>Цена</td>
          <td>Год издания</td>
          <td>Количество экземпляров</td>
          <td>Количество страниц</td>
          <td>Описание</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->Name}}</td>
            <td>{{$book->Price}}</td>
            <td>{{$book->Year_of_publishing}}</td>
            <td>{{$book->Number_of_copies}}</td>
            <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Изменить</a></td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection