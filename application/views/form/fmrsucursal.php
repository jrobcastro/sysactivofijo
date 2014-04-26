        <div class="row">
          <div class="col-lg-12">
            <center><h1>Sucursales</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Edicion de Sucursales</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <table class="completa table" align="center"> 
              <thead> 
                <tr> 
                  <th>Nombre de la Sucursal</th> 
                  <th>Telefono</th> 
                  <th>Direccion</th> 
                  <th>Departamento</th> 
                </tr> 
              </thead> 
            <tbody id="lista"></tbody> 
            </table> 
           <button type="button" onclick=location="<?php echo base_url().'direccion/hrefa_sucur'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button>
          </div>
        </div><!-- /.row -->
    