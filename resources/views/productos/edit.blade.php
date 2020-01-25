@extends("layouts.plantilla")

@section("cabecera")

ACTUALIZAR REGISTROS

@endsection

@section("contenido")

<form method="POST" action="/Productos/{{$producto->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nombre: </td>
            <td> <input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}"></td>
            {{csrf_field()}}
        </tr>
        <tr>
            <td>Seccion: </td>
            <td><input type="int" name="Seccion" value="{{$producto->Seccion}}"></td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td><input type="text" name="Precio" value="{{$producto->Precio}}"></td>
        </tr>
        <tr>
            <td>Fecha: </td>
            <td><input type="text" name="Fecha" value="{{$producto->Fecha}}"></td>
        </tr>
        <tr>
            <td>País de origen: </td>
            <td><input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="Update" value="Actualizar">
            </td>
        </tr>
    </table>    
</form>

<form method="POST" action="/Productos/{{$producto->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="Borrar" value="Borrar">    
</form>
@endsection

@section("pie")


@endsection