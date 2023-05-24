@extends('layout.admin')

@section('content')
    <div class="container" style="margin-top: 100px;">

        <div class="row">
            <div class="col-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <form action="{{route("citas.update", $cita->id)}}" method="post">
                            <fieldset>
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="mascota">Nombre de la mascota </label>
                                    <input type="text"  name="mascota" id="mascota" value="{{$cita->mascota}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dia">Dia </label>
                                    <input type="date" class="form-control" name="dia" id="dia" value="{{$cita->dia}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="hora">Hora </label>
                                    <input type="time" class="form-control" name="hora" id="hora" value="{{$cita->hora}}">
                                </div>

                                <button type="submit" class="btn btn-primary">Modificar cita </button>
                            </fieldset>
                        </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

