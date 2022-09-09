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
            Editar Proveedores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Proveedores</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Proveedores</h4>
                    </div>
                    {!! Form::model($provider, ['route'=>['providers.update',$provider], 'method'=>'PUT']) !!}
                    {{-- Formulario Editar --}}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" value="{{ $provider->name }}" name="name" id="name" aria-describedby="helpId" placeholder="Nombre"required>
                    </div>
                    <div class="form-group">
                        <label for="name">Correo</label>
                        <input type="text" class="form-control" value="{{ $provider->email }}" name="email" id="email" aria-describedby="helpId" placeholder="ejemplo@gmail.com"required>
                    </div>
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="text" class="form-control" value="{{ $provider->nit }}" name="nit" id="nit" aria-describedby="helpId" placeholder="Nit"required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" value="{{ $provider->celular }}" name="celular" id="celular" aria-describedby="helpId" placeholder="Celular"required>
                    </div>
                    {{-- Botones --}}
                    <button type="submit" class="btn btn-primary">Actualizar</button>
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