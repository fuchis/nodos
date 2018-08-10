@extends('layout')
@section('contenido')
    <table>
        <div class="">
            <input type="text" name="searchUser" placeholder="Buscar" value="">
        </div>
        <div class="">
            <a href="#">Nuevo Usuario</a>
        </div>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Carrera</th>
                <th>Rol</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <tr>
                    <td>Daniel Alfonso</td>
                    <td>Jiménez Suárez</td>
                    <td>Sistemas</td>
                    <td>Servicio Social</td>
                    <td>kanakemandatos@gmail.com</td>
                    <td>9341127035</td>
                    <td>
                        <a href="#">Editar</a>
                    </td>
                    <td>
                        <a href="#">Ver Horas</a>
                    </td>
                </tr>
            </tr>
        </tbody>
    </table>
@stop
