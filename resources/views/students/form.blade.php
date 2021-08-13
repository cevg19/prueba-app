<div class="col-md-8 order-md-1">
         
         
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name">Nombre del Estudiante</label>
                <input type="text" class="form-control" id="name" placeholder="" value="{{ isset($students->name)?$students->name:''}}" required="" name="name">
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>  
             {{--  <div class="col-md-6 mb-3">
                <label for="course_id">Curso asignado</label>
                <select name="course_id" class="form-control">
                    <option selected hidden>Seleccionar</option>
                @foreach ($professors as $professor)
                <option  value="{{ $professor->id }}">{{ $professor->name}}
                </option>
                @endforeach
                        
                        
                    </select>
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>  --}}                         
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Guardar</button>
            <a href="{{ route('students.index')}}" class="btn btn-secondary btn-lg " type="submit">Volver</a>
          
        </div>