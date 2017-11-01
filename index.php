<?php $page_name = "home" ?>
<?php include('header.php'); ?>

<section class="form-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" class="admisiones" href="#admisiones">Admisiones</a></li>
                    <li><a data-toggle="pill"  class="aereos" href="#aereos">Aereos</a></li>
                    <li><a data-toggle="pill" class="autos" href="#autos">Autos</a></li>
                    <li><a data-toggle="pill"  class="circuitos" href="#circuitos">Circuitos</a></li>
                    <li><a data-toggle="pill"  class="cruceros" href="#cruceros">Cruceros</a></li>
                    <li><a data-toggle="pill"  class="hosteleria" href="#hosteleria">Hosteleria</a></li>
                    <li><a data-toggle="pill"  class="disney" href="#disney">Disney</a></li>
                    <li><a data-toggle="pill"  class="universal" href="#universal">Universal</a></li>
                    <li><a data-toggle="pill"  class="paquetes" href="#paquetes">Paquetes</a></li>
                    <li><a data-toggle="pill"  class="servicios" href="#servicios">Servicios</a></li>
                    <li><a data-toggle="pill"  class="traslados" href="#traslados">Traslados</a></li>
                    <li><a data-toggle="pill"  class="trenes" href="#trenes">Trenes</a></li>
                </ul>
                
                  <div class="tab-content">
                    <div id="admisiones" class="tab-pane fade in active">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <select name="ciudad">
                                     <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                    <option value="bla">bla</option>
                                </select>
                                <i class="fa fa-chevron-down select-icon" aria-hidden="true"></i>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <select name="fecha">
                                     <option value="" disabled selected hidden>desde - hasta</option>
                                    <option value="bla">bla</option>
                                </select>
                                <i class="fa fa-chevron-down select-icon" aria-hidden="true"></i>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <select name="habitaciones">
                                     <option value="" selected>1</option>
                                    <option value="bla">2</option>
                                </select>
                                <i class="fa fa-chevron-down select-icon" aria-hidden="true"></i>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <select name="mercado">
                                     <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                    <option value="bla">bla</option>
                                </select>
                                <i class="fa fa-chevron-down select-icon" aria-hidden="true"></i>
                            </div>
                            <!--<div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <select name="mercado">
                                     <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                    <option value="bla">bla</option>
                                </select>
                                <i class="fa fa-chevron-down select-icon" aria-hidden="true"></i>
                            </div>-->
                            
                        </form>
                    </div>
                    <div id="aereos" class="tab-pane fade">
                    </div>
                    <div id="autos" class="tab-pane fade">
                    </div>
                    <div id="circuitos" class="tab-pane fade">
                    </div>
                      <div id="cruceros" class="tab-pane fade">
                    </div>
                    <div id="hosteleria" class="tab-pane fade">
                    </div>
                    <div id="disney" class="tab-pane fade">
                    </div>
                      <div id="universal" class="tab-pane fade">
                    </div>
                    <div id="paquetes" class="tab-pane fade">
                    </div>
                    <div id="servicios" class="tab-pane fade">
                    </div>
                      <div id="traslados" class="tab-pane fade">
                    </div>
                    <div id="trenes" class="tab-pane fade">
                    </div>
                  </div>
                </div>
            </div>
        </div>
</section>

<?php include('footer.php'); ?>