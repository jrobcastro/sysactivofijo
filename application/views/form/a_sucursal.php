          <div class="row">
          <div class="col-lg-12">
            <center><h1>Sucursales</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Activo Fijo</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form action="<?php echo base_url().'Sucursal/insertar_sucursal'; ?>" id="mi_form" method="post" role="form">
              <div class="form-group">
                <label>Nombre de la Sucursal</label>
                <input name="nombre_sucursal" class="form-control">
              </div>

               <div class="form-group">
                <label>Telefono</label>
                <input name="telefono_sucursal" class="form-control">
              </div>

              <div class="form-group">
                <label>Direccion</label>
                <input name="direccion_sucursal" class="form-control">
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Dapartamento</label>
                  <select id="disabledSelect" name="departamento" class="form-control">
                  <option>Seleccione un Dapartamento</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
 

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'direccion/hrefsucur'; ?>" class="btn btn-primary">Cancelar</button>
              </div>              


            </form>

           </div>
        </div><!-- /.row -->