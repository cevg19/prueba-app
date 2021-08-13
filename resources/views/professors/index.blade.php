@component('components.admin.layout')
   @slot('title','Listado Docentes')
  
    @slot('body')
  
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th colspan="2"><a href="{{ route('professors.create')}}" class="btn btn-sm btn-outline-success ">                
               Agregar Docente
              </a></th>
            </tr>
        </thead>
        <tbody>
            @if ($professors->count())
            @foreach ($professors as $professor)
                
            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$professor->name}}</td>               
                <td>
                
                 
                    <a type="button" class="btn btn-primary" href="{{ route('professors.edit', $professor)}}" title="Editar">Editar</a>
                    </td>
                <td>
                     <form action="{{route('professors.destroy', $professor)}}" class="formulario-eliminar" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger " title="Eliminar">Eliminar</button>
                                </form>
                  
                </td>          
                            
            </tr>
            @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registros...</td>
              </tr>
              @endif
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nombre</th>
            </tr>
        </tfoot>
    </table>
    {{ $professors->links() }}    
   
    @endslot   
   
@endcomponent