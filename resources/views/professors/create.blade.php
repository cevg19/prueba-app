@component('components.admin.layout')
   @slot('title','Agregar Docente')
    @slot('body')
        <form action="{{ route('professors.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('professors.form')
             </form>                       
    @endslot      
@endcomponent