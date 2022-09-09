@extends('layouts.admin')
@section('title','Gestión de productos')
@section('styles')
    {{-- {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}
    {!! Html::style('https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css') !!} --}}
    @exclude('melody/css/style.css')
    <style type="text/css">
        .unstyled-button{
            border:none!important;
            padding:0;
            background:none;
        }
        div.container {
            width: 80%;
        }
    </style>
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Productos</h4>
                        {{-- <i class="fas fa-ellipsis-v"></i> --}}
                        <div class="btn-group dropleft">
                                <a href="{{route('products.create')}}" class="btn btn-primary" type="button">Agregar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="products" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Imagen</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                            <th>Precio</th>
                                            <th>Categoría</th>
                                            <th>Proveedor</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{$product->id}}</th>
                                            <th scope="row">{{$product->code}}</th>
                                            <td><a href="{{route('products.show', $product)}}">{{$product->name}}</a></td>
                                            <td>{{$product->image}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td>{{$product->status}}</td>
                                            <td>{{$product->precio}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->provider->name}}</td>
                                            <td style="width: 5%;">
                                                {!! Form::open(['route'=>['products.destroy', $product], 'method'=>'DELETE']) !!}
                                                <a href="{{route('products.edit', $product)}}" tilte="Editar"><i class="far fa-edit"></i></a>
                                                <button class="unstyled-button" type="submit" tilte="Eliminar"><i class="far fa-trash-alt"></i></button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    {{-- {!! Html::script('https://code.jquery.com/jquery-3.5.1.js') !!}
    {!! Html::script('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js') !!}
    {!! Html::script('https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js') !!}
    {!! Html::script('https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js') !!}
    {!! Html::script('https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js') !!} --}}
    {{-- {!! Html::script('melody/js/data-table.js') !!} --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#products').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]]
            });
        });
    </script>
@endsection