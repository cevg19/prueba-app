@component('components.admin.layout')
   @slot('title','Editar Salon')
    @slot('body')
     
    <form action="{{ route('classrooms.update',$classrooms->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')    
                @include('classrooms.form')
             </form>   
    
    @endslot   
   
@endcomponent