@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>

    <div class="text-center mt-3 mb-4">
        <a href="{{url("/books")}}">
            <button class="btn btn-dark">Voltar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @php
            $autor = $book->relUsers;
        @endphp
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Páginas</th>
                <th scope="col">Preço</th>
                <th scope="col">Autor</th>
                <th scope="col">Email do Autor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$book->title}}</th>
                <td>{{$book->pages}}</td>
                <td>{{$book->price}}</td>
                <td>{{$autor->name}}</td>
                <td>{{$autor->email}}</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection