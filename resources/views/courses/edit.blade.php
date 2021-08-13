@component('components.admin.layout')
   @slot('title','Editar Curso')
    @slot('body')
     
    <form action="{{ route('courses.update',$courses->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')    
                @include('courses.form')
             </form>   
    
    @endslot   
   
@endcomponent