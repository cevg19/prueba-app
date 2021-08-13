@component('components.admin.layout')
   @slot('title','Editar Docente')
    @slot('body')
     
    <form action="{{ route('professors.update',$professors->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')    
                @include('professors.form')
             </form>   
    
    @endslot   
   
@endcomponent