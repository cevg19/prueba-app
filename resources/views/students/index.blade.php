@component('components.admin.layout')
   @slot('title','Listado Estudiantes')
  
    @slot('body')
  
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th colspan="2"><a href="{{ route('students.create')}}" class="btn btn-sm btn-outline-success ">                
               Agregar Estudiante
              </a></th>
            </tr>
        </thead>
        <tbody>
            @if ($students->count())
            @foreach ($students as $student)
                
            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->name}}</td>               
                <td>
                
                 
                    <a type="button" class="btn btn-primary" href="{{ route('students.edit', $student)}}" title="Editar">Editar</a>
                    </td>
                <td>
                     <form action="{{route('students.destroy', $student)}}" class="formulario-eliminar" method="POST">
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
    {{ $students->links() }}    
   
    @endslot   
   
@endcomponent