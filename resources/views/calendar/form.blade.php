<div class="col-md-8 order-md-1">
         
         
            <div class="row">
              {{-- <div class="col-md-6 mb-3">
                <label for="classroom_id">Salón</label>
                <input type="number" class="form-control" id="number" placeholder="" value="{{ isset($classrooms->number)?$classrooms->number:''}}" required="" name="number">
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>  --}} 
              <div class="col-md-6 mb-3">
                <label for="classroom_id">Salon</label>
                <select name="classroom_id" class="form-control">
                    <option selected hidden>Seleccionar</option>
                @foreach ($classrooms as $classroom)
                <option  value="{{ $classroom->id }}">{{ $classroom->number}}
                </option>
                @endforeach                    
                    </select>

                <label for="name">Curso</label>
                <select name="course_id" class="form-control">
                    <option selected hidden>Seleccionar</option>
                @foreach ($courses as $course)
                <option  value="{{ $course->id }}">{{ $course->name}} - {{$course->Name}}
                </option>
                @endforeach
                        
                        
                    </select>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
               
                    <th scope="col">Lunes</th>    
                    <th scope="col">Martes</th>    
                    <th scope="col">Miercoles</th>    
                    <th scope="col">Jueves</th>    
                    <th scope="col">Viernes</th>    
               
                
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Lunes</th>
                 @foreach ($hours as $hour)
                <td><div class="form-check">                   
                       <input name="times[]" class="form-check-input" type="checkbox" value="{{$hour->hour.'-M'}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$hour->hour}}
                    </label>                     
                    </div></td>
                    @endforeach
                
                </tr>
                <tr>
                <th scope="row">Martes</th>
                 @foreach ($hours as $hour)
                <td><div class="form-check">                   
                       <input name="times[]" class="form-check-input" type="checkbox" value="{{$hour->hour.'-T'}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$hour->hour}}
                    </label>                     
                    </div></td>
                    @endforeach
                
                </tr>
                <tr>
                <th scope="row">Miercoles</th>
                 @foreach ($hours as $hour)
                <td><div class="form-check">                   
                       <input name="times[]" class="form-check-input" type="checkbox" value="{{$hour->hour.'-W'}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$hour->hour}}
                    </label>                     
                    </div></td>
                    @endforeach
                
                </tr>
                <tr>
                <th scope="row">Jueves</th>
                 @foreach ($hours as $hour)
                <td><div class="form-check">                   
                       <input name="times[]" class="form-check-input" type="checkbox" value="{{$hour->hour.'-T'}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$hour->hour}}
                    </label>                     
                    </div></td>
                    @endforeach
                
                </tr>
                <tr>
                <th scope="row">Viernes</th>
                 @foreach ($hours as $hour)
                <td><div class="form-check">                   
                       <input name="times[]" class="form-check-input" type="checkbox" value="{{$hour->hour.'-F'}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$hour->hour}}
                    </label>                     
                    </div></td>
                    @endforeach
                
                </tr>
                
            </tbody>
            </table>
                
              </div>                          
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Guardar</button>
            <a href="{{ route('calendar.index')}}" class="btn btn-secondary btn-lg " type="submit">Volver</a>
          
        </div>