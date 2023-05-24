@extends('layout.admin')

@section('content')
    <div class="container" style="margin-top: 100px;">

        <div class="row">
            <div class="col-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                                <form action="{{route("citas.store")}}" method="post">
                                   <fieldset>
                                       @csrf
                                       <div class="form-group">
                                           <label for="mascota">Nombre de la mascota</label>
                                           <input type="text"  name="mascota" id="mascota" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="dia">Dia </label>
                                           <input type="date" class="form-control" name="dia" id="dia" required>
                                       </div>
                                       <div class="form-group">
                                           <label for="hora">Hora </label>
                                           <input type="time" class="form-control" name="hora" id="hora">
                                       </div>
                                       <button type="submit" class="btn btn-primary">Crear cita </button>
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
