@extends('layouts.admin')
@section('title','Información del proveedor')
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
            {{$provider->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item" aria-current="page">Proveedores</li>
                <li class="breadcrumb-item active" aria-current="page">{{$provider->name}}</li>
            </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <h3>{{$provider->name}}</h3>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button type="button" class="btn-success list-group-item list-group-item-action active">Sobre
                                        proveedor</button>
                                    <button type="button"
                                        class="list-group-item list-group-item-action ">productos</button>
                                    <button type="button" class="list-group-item list-group-item-action ">Registrar
                                        productos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>Información del proveedor</h3>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="far fa-clock mr-1"></i>
                                            Nombre
                                        </strong>
                                        <p class="text-muted">
                                            {{$provider->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i>
                                            Nit
                                        </strong>
                                        <p class="text-muted">
                                            {{$provider->nit}}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-mobile mr-1"></i>
                                            Teléfono
                                        </strong>
                                        <p class="text-muted">
                                            {{$provider->celular}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-envelope mr-1"></i>
                                            Correo
                                        </strong>
                                        <p class="text-muted">
                                            {{$provider->email}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('providers.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
