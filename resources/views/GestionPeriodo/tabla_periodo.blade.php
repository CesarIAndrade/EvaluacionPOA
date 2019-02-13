<table class="table">
    <thead class="bg-info text-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Fecha de inicio</th>
        <th scope="col">Fecha fin</th>
        <th scope="col">Estado</th>
        <th scope="col">Abrir Periodo</th>
        <th scope="col">Eliminar Periodo</th>
      </tr>
    </thead>
    <tbody id="tabla_periodos">
      <tr>
        @foreach ($estudiantesModelo as $item)
          <tr>
              <th scope="row">{{$item['id_estudiante']}}</th>
              <td>{{$item['nombres']}}</td>
              <td>{{$item['apellidoPaterno']}}</td>
              <td>{{$item['apellidoMaterno']}}</td>
              <td>{{$item['edad']}}</td>
              <td>{{$item->Tipo->descripcion}}</td>
              <td>
                <button value="{{$item->id_estudiante}}" class="btn btn-info open-modal">Añadir telefono</button>
              </td>
              <td>
                <a href="{{action('EstudiantesController@edit',$item['id_estudiante'])}}" class="btn btn-warning">Modificar</a>
              </td>
              <td>
                <form method="POST" action="{{url('estudiantes',$item['id_estudiante'])}}">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
              </td>
          </tr>
          @endforeach
      </tr>
    </tbody>
  </table>
