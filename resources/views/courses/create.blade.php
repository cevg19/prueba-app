@component('components.admin.layout')
   @slot('title','Agregar Curso')
    @slot('body')
        <form action="{{ route('courses.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('courses.form')
             </form>                       
    @endslot      
@endcomponent