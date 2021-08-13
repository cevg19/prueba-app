@component('components.admin.layout')
   @slot('title','Salones de Clases')
  
    @slot('body')
  
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Numero del Aula</th>
                <th colspan="2"><a href="{{ route('classrooms.create')}}" class="btn btn-sm btn-outline-success ">                
               Crear salon
              </a></th>
            </tr>
        </thead>
        <tbody>
            @if ($classrooms->count())
            @foreach ($classrooms as $classroom)
                
            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$classroom->number}}</td>               
                <td>
                
                 
                    <a type="button" class="btn btn-primary" href="{{ route('classrooms.edit', $classroom)}}" title="Editar">Editar</a>
                    </td>
                <td>
                     <form action="{{route('classrooms.destroy', $classroom)}}" class="formulario-eliminar" method="POST">
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
                <th>Numero del Aula</th>
            </tr>
        </tfoot>
    </table>
    {{ $classrooms->links() }}    
   
    @endslot   
   
@endcomponent