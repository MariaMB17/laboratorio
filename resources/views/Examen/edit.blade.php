@extends('layout.app')
@section('title', 'Editar examen')
@section('content')
<h1>Editar Examenes </h1>
{!! Form::model($subgrupos, ['method' => 'PATCH','route' => ['examen.update', $subgrupos->idexamen]]) !!}
    
 {!! Form::close() !!}
@endsection
<script type="text/javascript"src="../jquery/jquery.min.js"></script>


