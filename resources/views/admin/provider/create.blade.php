@extends('layouts.admin')
@section('title','Gestión de proveedores')
@section('styles')

@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de Proveedores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Proveedores</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Proveedores</h4>
                    </div>
                    {!! Form::open(['route'=>'providers.store', 'method'=>'POST']) !!}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre"required>
                    </div>
                    <div class="form-group">
                        <label for="name">Correo</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="ejemplo@gmail.com"required>
                    </div>
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="text" class="form-control" name="nit" id="nit" aria-describedby="helpId" placeholder="Nit"required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular" aria-describedby="helpId" placeholder="Celular"required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{route('providers.index')}}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    {!! Html::script('melody/js/data-table.js') !!}
@endsection