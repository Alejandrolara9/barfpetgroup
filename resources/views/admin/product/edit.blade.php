@extends('layouts.admin')
@section('title','Gestión de Productos')
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
            Editar Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Productos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Productos</h4>
                    </div>
                    {!! Form::model($product, ['route'=>['products.update',$product], 'method'=>'PUT', 'files'=> true]) !!}
                    {{-- Formulario Editar --}}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" value="{{$product->name}}" name="name" id="name" aria-describedby="helpId" placeholder="Nombre"required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" id="stock" aria-describedby="helpId" placeholder="Stock"required>
                    </div> --}}
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" value="{{$product->precio}}" name="precio" id="precio" aria-describedby="helpId" placeholder="precio"required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="status">Estado</label>
                        <input type="text" class="form-control" name="status" id="status" aria-describedby="helpId" placeholder="Estado"required>
                    </div> --}}
                    <div class="form-group">
                        <label for="category_id">Categoría</label>
                        <select  class="form-control" name="category_id" id="category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if ($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="provider_id">Proveedor</label>
                        <select  class="form-control" name="provider_id" id="provider_id" required>
                            @foreach ($providers as $provider)
                                <option value="{{$provider->id}}" @if ($provider->id == $product->provider_id) selected @endif>{{$provider->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="custom-file mb-4">
                        <input type="file" name="picture" class="custom-file-input" id="picture" value="{{$product->image}}" lang="es">
                        <label class="custom-file-label"  for="picture">Seleccionar Archivo</label>
                    </div>
                    {{-- Botones --}}
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{route('products.index')}}" class="btn btn-light">Cancelar</a>
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