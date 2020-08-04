@extends('templates.template')

@section('content')
    <h1 class="text-center">@if (isset($book))
        Editar
        @else
        Cadastrar
    @endif</h1>
    
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        
        @if (isset($book))
            <form action="{{url("books/$book->id")}}" method="POST" name="formEdit" id="formEdit">
            @method("PUT") 
        @else
            <form action="{{url('books')}}" method="POST" name="formCad" id="formCad">
        @endif
            @csrf
            <input type="text" name="title" id="title" class="form-control mb-3" required placeholder="Título" value="{{$book->title ?? ''}}">
            <select name="id_user" id="id_user" class="form-control mb-3" required>
            <option value="{{$book->relUsers->id}}">{{$book->relUsers->name}}</option>
                @foreach ($users as $user)
                    @php
                        if($user->name == $book->relUsers->name){
                            continue;
                        }
                    @endphp
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input type="text" name="pages" id="pages" class="form-control mb-3" placeholder="Páginas" required value="{{$book->pages ?? ''}}">
            <input type="text" name="price" id="price" class="form-control mb-3" placeholder="Preço" required value="{{$book->price ?? ''}}">
            <input type="submit" class="btn btn-primary" value="@if (isset($book)) Editar @else Cadastrar @endif">
            <a href="{{url("/books")}}">
                <input type="button" class="btn btn-dark" value="Voltar">
            </a>
        </form>
    </div>
@endsection