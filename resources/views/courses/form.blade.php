<div class="col-md-8 order-md-1">
         
 
         
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name">Nombre del Curso</label>
                <input type="text" class="form-control" id="name" placeholder="" value="{{ isset($courses->name)?$courses->name:''}}" required="" name="name">
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>  
              <div class="col-md-6 mb-3">
                <label for="name">Docente a asignar</label>
                <select name="professor_id" class="form-control">
                    <option selected hidden>Seleccionar</option>
                @foreach ($professors as $professor)
                <option  value="{{ $professor->id }}">{{ $professor->name}}
                </option>
                @endforeach
                        
                        
                    </select>
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div> 
              <div class="relative inline-block text-gray-700">
                    

                </div>                         
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Guardar</button>
            <a href="{{ route('courses.index')}}" class="btn btn-secondary btn-lg " type="submit">Volver</a>
          
        </div>