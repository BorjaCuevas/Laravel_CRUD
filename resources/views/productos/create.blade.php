@extends("layouts.plantilla")

@section("cabecera")

INSERTAR REGISTROS

@endsection

@section("contenido")

<form method="post" action="/Productos">
    <table>
        <tr>
            <td>Nombre: </td>
            <td> <input type="text" name="NombreArticulo"></td>
            {{csrf_field()}}
        </tr>
        <tr>
            <td>Seccion: </td>
            <td><input type="int" name="Seccion"></td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td><input type="text" name="Precio"></td>
        </tr>
        <tr>
            <td>Fecha: </td>
            <td><input type="text" name="Fecha"></td>
        </tr>
        <tr>
            <td>País de origen: </td>
            <td><input type="text" name="PaisOrigen"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="Enviar" value="Enviar">
            </td>
            <td>
                <input type="reset" name="Borrar"  value="Borrar">
            </td>
        </tr>
    </table>    
</form>

@endsection

@section("pie")


@endsection