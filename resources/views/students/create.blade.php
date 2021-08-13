@component('components.admin.layout')
   @slot('title','Agregar Estudiante')
    @slot('body')
        <form action="{{ route('students.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('students.form')
             </form>                       
    @endslot      
@endcomponent