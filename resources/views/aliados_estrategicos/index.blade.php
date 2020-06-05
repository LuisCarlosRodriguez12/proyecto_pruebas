@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aliados</div>
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-md-5">
                        <a class="btn btn-small btn-success" href="{{ route('aliados_estrategicos.create') }}">Nuevo</a>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lis_aliados as $values)
                            <tr>
                                <td>{{ $values ['id'] }}</td>
                                <td><a href="{{route('aliados_estrategicos.show',$values)}}">{{ $values['nombre'] }}</a></td>
                                <td>{{ $values['descripcion'] }}</td>
                                <td>{{ $values['logo'] }}</td>
            
                            </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection