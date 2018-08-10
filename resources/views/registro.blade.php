@extends('layout')

@section('contenido')
    @if( session()->has("info"))
        <div class="notificacion">
            <h4>{{session("info")}}</h4>
        </div>
    @else
        <form class="" action="new" method="post">
            {!!csrf_field()!!}
            <table>
                <tr>
                    <td>
                        <label for="nombres">Nombres:</label>
                    </td>
                    <td>
                        <input type="text" id="nombres" name="nombres" value="{{old("nombres")}}">
                        {!! $errors->first("nombres", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellidos">Apellidos:</label>
                    </td>
                    <td>
                        <input type="text" id="apellidos" name="apellidos" value="{{old("apellidos")}}">
                        {!! $errors->first("apellidos", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telefono">Telefono:</label>
                    </td>
                    <td>
                        <input type="tel" id="telefono" name="telefono" value="{{old("telefono")}}">
                        {!! $errors->first("telefono", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="correo">Correo:</label>
                    </td>
                    <td>
                        <input type="email" id="correo" name="correo" value="{{old("correo")}}">
                        {!! $errors->first("correo", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="matricula">Matricula:</label>
                    </td>
                    <td>
                        <input type="text" id="matricula" name="matricula" value="{{old("matricula")}}">
                        {!! $errors->first("matricula", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="carrera">Carrera:</label>
                    </td>
                    <td>
                        <select class="" id="carrera" name="carrera">
                            <option value=""></option>

                            <option value="Ing. Bioquimica" {{old("rol") == "Ing. Bioquimica" ? "selected" : "" }}>Ing. Bioquimica</option>

                            <option value="Ing. Sistemas Computacionales" {{old("rol") == "Ing. Sistemas Computacionales" ? "selected" : "" }}>Ing. Sistemas Computacionales</option>
                            <option value="Ing. Electronica" {{old("rol") == "Ing. Electronica" ? "selected" : "" }}>Ing. Electronica</option>
                            <option value="Ing. Bioquimica" {{old("rol") == "Ing. Bioquimica" ? "selected" : "" }}>Ing. Bioquimica</option>
                        </select>
                        {!! $errors->first("carrera", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rol">Rol:</label>
                    </td>
                    <td>
                        <select class="" id="rol" name="rol">
                            <option value=""></option>
                            <option value="Servicio Social" {{old("rol") == "Servicio Social" ? "selected" : "" }}>Servicio Social</option>
                            <option value="Residencia" {{old("rol") == "Residencia" ? "selected" : "" }}>Residencia</option>
                            <option value="Maestro" {{old("rol") == "Maestro" ? "selected" : "" }}>Maestro</option>
                            <option value="Celulas de Innovación" {{old("rol") == "Celulas de Innovación" ? "selected" : "" }}>Celulas de Innovación</option>
                            <option value="Celulas de Innovación - Coach" {{old("rol") == "Celulas de Innovación - Coach" ? "selected" : "" }}>Celulas de Innovación - Coach</option>
                            <option value="Incubadora de innovación" {{old("rol") == "Incubadora de innovación" ? "selected" : "" }}>Incubadora de innovación</option>
                            <option value="Alumnos Doctor Chan" {{old("rol") == "Alumnos Doctor Chan" ? "selected" : "" }}>Alumnos Doctor Chan</option>
                        </select>
                        {!! $errors->first("rol", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tipo:</label>
                    </td>
                    <td>
                        <label for="admin">Administrador</label>
                        <input type="radio" id="admin" name="tipoUser" value="admin" {{old("tipoUser") == "admin" ? "checked" : "" }}>

                        <label for="asist">Asistente</label>
                        <input type="radio" id="asist" name="tipoUser" value="asist" {{old("tipoUser") == "asist" ? "checked" : "" }}>

                        {!! $errors->first("tipoUser", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="foto">Foto:</label>
                    </td>
                    <td>
                        <input type="file" id="foto" name="foto" value="{{old("foto")}}">
                        {!! $errors->first("foto", "<span class=error>:message</span>")!!}
                    </td>
                </tr>
            </table>
            <input type="submit" name="" value="Registrar">
        </form>
    @endif
@stop
