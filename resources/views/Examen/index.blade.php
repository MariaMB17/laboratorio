@extends('layout.app')
@section('title', 'Examenes')
@section('content')
<h1>Listado de Examenes</h1>
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('examen.create') }}">Registrar examen</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Código Examen</th>
            <th>Descripción</th>
            <th>Valor de referencia</th>
            <th>Subgrupo</th>
            <th>Precio</th>
            <th width="280px">Action</th>
        </tr>
    @foreach($subgrupos as $subgrup)
    <tr>
        <td>{{$subgrup->idexamen}}</td>
        <td>{{$subgrup->decripcion}}</td>
        <td>{{$subgrup->valor_referencia}}</td>
        <td>{{$subgrup->descripcion_sg}}</td>
        <td>{{$subgrup->precio}}</td>
        <td>
            
            <a class="btn btn-primary" href="./examen/{{$subgrup->idexamen}}/{{$subgrup->idgrupo}}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['examen.destroy', $subgrup->idexamen],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
@endsection
