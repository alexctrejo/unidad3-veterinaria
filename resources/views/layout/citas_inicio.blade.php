@extends('layout.admin')

@section('content')
    <div class="container" style="margin-top: 100px;">

        <div class="row">
            <div class="col-12">
                <a href="{{route("citas.create")}}" class="btn btn-success mb-5">Agregar</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Dia/Mascota</th>
                        <th>Editar</th>
                        <th>Eliminar</th> </tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->dia}}Hora: {{$cita->hora}} Mascota{{$cita->mascota}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("citas.edit",[$cita])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("citas.destroy",[$cita])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
