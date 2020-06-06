@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD CARROS</h1>
    <hr>

    <div class="text-center mb-3">
        <a href="{{url('')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>


    <div class="col-8 m-auto text-center">
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Marca</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        @foreach($car as $cars)

        @php
            $user = $cars->find($cars->id)->relUsers;
        @endphp

        <tr>
            <th scope="row">{{$cars->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$cars->name}}</td>
                <td>
                    <a href="{{url('')}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>

                    <a href="{{url('')}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="{{url('')}}">
                        <button class="btn btn-danger">Excluir</button>
                    </a>
                </td>
        </tr>
        @endforeach

            
        </tbody>
        </table>
    </div>
@endsection