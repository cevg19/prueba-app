<div class="col-md-8 order-md-1">
         
         
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="number">Numero del salon</label>
                <input type="number" class="form-control" id="number" placeholder="" value="{{ isset($classrooms->number)?$classrooms->number:''}}" required="" name="number">
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>                           
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Guardar</button>
            <a href="{{ route('classrooms.index')}}" class="btn btn-secondary btn-lg " type="submit">Volver</a>
          
        </div>