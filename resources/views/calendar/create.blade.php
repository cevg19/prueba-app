 @component('components.admin.layout')
   @slot('title','Agendar Curso ') 
    @slot('body')
     <form action="{{ route('calendar.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
               @include('calendar.form')
        </form>       
    @endslot   
   
@endcomponent