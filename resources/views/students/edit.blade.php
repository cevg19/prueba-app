@component('components.admin.layout')
   @slot('title','Editar Estudiante')
    @slot('body')
     
    <form action="{{ route('students.update',$students->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')    
                @include('students.form')
             </form>   
    
    @endslot   
   
@endcomponent