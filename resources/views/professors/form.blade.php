<div class="col-md-8 order-md-1">
         
         
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name">Nombre del Docente</label>
                <input type="text" class="form-control" id="name" placeholder="" value="{{ isset($professors->name)?$professors->name:''}}" required="" name="name">
                <div class="invalid-feedback">
                 Campo Requerido
                </div>
              </div>                           
            </div>
            <button class="btn btn-primary btn-lg " type="submit">Guardar</button>
            <a href="{{ route('professors.index')}}" class="btn btn-secondary btn-lg " type="submit">Volver</a>
          
        </div>