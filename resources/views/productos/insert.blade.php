@extends("layouts.plantilla")


@section("contenido")

<form method="post" action="/Productos">
    <table>
        <tr>
            <td>Nombre: </td>
            <td> <input type="text" name="NombreArticulo"></td>
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
    </table>
    
    
    
    
    
    {{csrf_field()}}
    <input type="submit" name="Enviar" value="Enviar">
</form>