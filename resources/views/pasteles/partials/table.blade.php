<h1 class="text-primary">Control de Pasteles</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Sabor</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pasteles as $pastel)
        <tr>
            <td class="text-center">{{ $pastel->id }}</td>
            <td class="text-center">{{ $pastel->nombre }}</td>
            <td class="text-center">{{ $pastel->sabor }}</td>
        <td class="text-center">{{ $pastel->created_at }}</td>

            <td class="text-center">

              <form action="{{ route('pasteles.destroy' , $pastel->id)}}" method="POST">
                  <input name="_method" type="hidden" value="DELETE">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary">Yes</button>
              </form>

                <a href="{{ url('/pasteles/'.$pastel->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Sabor</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>
