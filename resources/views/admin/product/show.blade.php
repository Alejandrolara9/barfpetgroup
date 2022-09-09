@extends('layouts.admin')
@section('title','Información del producto')
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
            {{$product->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item" aria-current="page">Productos</li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{asset('image/'.$product->image)}}" alt="profile" class="img-responsive img-lg mb3"/>
                                <h3>{{$product->name}}</h3>
                            </div>
                            <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button type="button" class="btn-success list-group-item list-group-item-action active">Sobre
                                        producto</button>
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
                                    <h3>Información del producto</h3>
                                </div>
                            </div>
                            {{-- code
                            name
                            image
                            stock
                            precio
                            status
                            category_id
                            provider_id --}}
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-address-card mr-1"></i>
                                            Nombre
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-code mr-1"></i>
                                            Código
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->code}}
                                        </p>
                                        <strong><i class="fa fa-balance-scale mr-1"></i>
                                            Precio
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->precio}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i>
                                            Estado
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->status}}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fa fa-university mr-1"></i>
                                            Stock
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-map mr-1"></i>
                                            Categoría
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->category->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-map mr-1"></i>
                                            Proveedor
                                        </strong>
                                        <p class="text-muted">
                                            {{$product->provider->name}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('products.index')}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
