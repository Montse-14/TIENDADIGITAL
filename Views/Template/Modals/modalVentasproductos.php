<div class="modal fade" id="modalVentasproductos" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <div class="main-content">-->
        <div class="section__content section__content--p40">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">Formulario ventas</div>
                  <div class="card-body">
                    <div class="card-title">
                      <h3 class="text-center title-2" id="titlemodalventasProductos">Ventas - Productos</h3>
                    </div>
                    <hr>
                    <form id="formVentasProductos" name="formVentasProductos">
                      <input id="id_ventapro" name="id_ventapro" type="hidden" class="form-control" value="">
                      <div class="form-group">
                        <label for="listidproductos" class="control-label mb-1">Producto(s)<span class="text-danger"> *</span></label>
                        <select class="form-control" data-live-search="true" id="listidproductos" name="listidproductos" required>

                        </select>
                      </div>
                      <div class="form-group has-success">
                        <label for="listidventas" class=" control-label mb-1">Ventas<span class="text-danger"> *</span></label>
                        <!-- <input id="txtconcepto" name="txtconcepto" type="text" class="form-control" data-val="true" placeholder="Ingresar concepto"> -->
                        <!-- <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span> -->
                         <select class="form-control" data-live-search="true" id="listidventas" name="listidventas" required>

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="txtcantidad" class="control-label mb-1">Cantidad<span class="text-danger"> *</span></label>
                        <input id="txtcantidad" name="txtcantidad" type="text" class="form-control " value="" placeholder="Ingrese una cantidad" onkeyup="calculoVP();" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">

                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="txtCostoU" class="control-label mb-1">Costo Unitario<span class="text-danger"> *</span></label>
                            <input id="txtCostoU" name="txtCostoU" type="text" class="form-control" value="" placeholder="Costo " onkeyup="calculoVP();" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" >   <!-- o podemos usar onChange/*-->

                          </div>
                        </div>
                        <div class="col-6">
                          <label for="txtTotal" class="control-label mb-1">Total<span class="text-danger"> *</span></label>
                          <div class="input-group">
                            <input id="txtTotal" name="txtTotal" type="text" class="form-control cc-cvc"  autocomplete="off" placeholder="total"  readonly>

                          </div>
                        </div>
                      </div>


                      <!-- <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="txtsubto" class="control-label mb-1">Total<span class="text-danger"> *</span></label>
                            <input id="txtTotal" name="txtTotal" type="text" class="form-control" value="" placeholder="Total" readonly>

                          </div>
                        </div>
                        <div class="col-6">
                          <label for="txtpassword" class="control-label mb-1">Fecha<span class="text-danger"> *</span></label>
                          <div class="input-group">
                            <input id="txtfecha" name="txtfecha" type="text" class="form-control cc-cvc" value="<?php echo $date ?>" autocomplete="off" readonly>

                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="form-group">
                                                <label for="selecttipou" class="control-label mb-1">Tipo</label>

                                                <select name="selecttipou" id="selecttipou" class="form-control">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Asistente</option>

                                                </select>
                                            </div> -->
                      <div>
                        <button id="btnactionguardarVP" type="submit" class="btn btn-lg btn-info btn-block">
                          <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                          <!-- <span id="payment-button-amount">Pay $100.00</span> -->
                          <span id="btntext">Guardar Venta</span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--</div> -->
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="modalViewVentasP" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos de las ventas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Producto:</td>
              <td id="celProducto"></td>
            </tr>
            <tr>
              <td>Venta:</td>
              <td id="celVenta"></td>
            </tr>
            <tr>
              <td>Cantidad:</td>
              <td id="celCantidad"></td>
            </tr>
            <tr>
              <td>Costo Unitario:</td>
              <td id="celCostoUnitario"></td>
            </tr>
            <tr>
              <td>Total:</td>
              <td id="celTotal"></td>
            </tr>
            
            <!-- <tr>
              <td>Tipo Usuario:</td>
              <td id="celTipoUsuario">Larry</td>
            </tr> -->
           
            <!-- <tr>
              <td>Fecha registro:</td>
              <td id="celFechaRegistro">Larry</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>