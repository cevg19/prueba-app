@component('components.admin.layout')
   @slot('title','Crear Salon')
    @slot('body')
        <form action="{{ route('classrooms.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('classrooms.form')
             </form>                       
    @endslot      
@endcomponent