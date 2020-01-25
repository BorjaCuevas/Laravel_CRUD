@extends("layouts.plantilla")

@section("cabecera")

MOSTRAR REGISTROS

@endsection


@section("contenido")
<table border="1">
    <tr>
        <td>Nombre Artículo: </td>
        <td>Seccion: </td>
        <td>Precio: </td>
        <td>Fecha: </td>
        <td>País de origen: </td>
    </tr>

    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->NombreArticulo}}&nbsp;</td>
            <td>{{$producto->Seccion}}&nbsp;</td>
            <td>{{$producto->Precio}}&nbsp;</td>
            <td>{{$producto->Fecha}}&nbsp;</td>
            <td>{{$producto->PaisOrigen}}&nbsp;</td>
            <td><input type="button" onclick="location.href='{{route('Productos.edit', $producto->id)}}'" value="Modificar"></td>
        </tr>
    @endforeach
    
</table>

@endsection


@section("pie")


@endsection