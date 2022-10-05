@extends("layout.app")
@sections('title', "Contato - {{$contato->nome}}")
@section("content")

    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>ID: {{contato->nome}}</li>
        <li>email: {{contato->email}}</li>
        <li>Telefone: {{contato->telefone}}</li>
        <li>Cidade: {{contato->cidade}}</li>
        <li>Estado: {{contato->estado}}</li>
        <li>ID: {{contato->ID}}</li>
        <li>ID: {{contato->ID}}</li>
        <li>ID: {{contato->ID}}</li>
    </ul>
   
@endsection