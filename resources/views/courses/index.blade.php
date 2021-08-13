@component('components.admin.layout')
   @slot('title','Cursos')
  
    @slot('body')
  
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Profesor</th>
                <th colspan="2"><a href="{{ route('courses.create')}}" class="btn btn-sm btn-outline-success ">                
               Crear curso
              </a></th>
            </tr>
        </thead>
        <tbody>
            @if ($courses->count())
            @foreach ($courses as $course)
                
            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$course->name}}</td>               
                <td>{{$course->Name}}</td>               
                <td>
                
                 
                    <a type="button" class="btn btn-primary" href="{{ route('courses.edit', $course)}}" title="Editar">Editar</a>
                    </td>
                <td>
                     <form action="{{route('courses.destroy', $course)}}" class="formulario-eliminar" method="POST">
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
    {{ $courses->links() }}    
   
    @endslot   
   
@endcomponent