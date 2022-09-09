@extends('layouts.admin')
@section('title','Gestión de categorías')
@section('styles')

@endsection
@section('create')
    <li class="nav-item d-none d-lg-flex">
        <a class="nav-link" href="{{route('categories.create')}}">
            <span class="btn btn-primary">Crear nuevo</span>
        </a>
    </li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Categorías
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Categorías</h4>
                        {{-- <i class="fas fa-ellipsis-v"></i> --}}
                        <div class="btn-group">
                            <h4 class="card-title">
                                <a href="#" >
                                    <i class="fas fa-download"></i>
                                    Exportar
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="products_listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            @foreach($categories as $category)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td><a href="{{route('categories.show', $category)}}">{{$category->name}}</a></td>
                                    <td>{{$category->description}}</td>
                                    {{-- <th scope="row">1</th>
                                    <td>Prueba</td>
                                    <td>Prueba</td>
                                    <td>Prueba</td>
                                    <td>Prueba</td>
                                    <td>Prueba</td>
                                    <td style="width: 20%;">
                                        <a class="btn btn-outline-info" href="#" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <button class="btn btn-outline-danger delete-confirm"
                                        type="button" onclick="confirmDelete('delete-item_{{$product->id}}')" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td> --}}
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

@endsection