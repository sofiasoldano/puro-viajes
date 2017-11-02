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
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="aereos" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="autos" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="circuitos" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                      <div id="cruceros" class="tab-pane fade">
                          <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="hosteleria" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="disney" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                      <div id="universal" class="tab-pane fade">
                          <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="paquetes" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="servicios" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                      <div id="traslados" class="tab-pane fade">
                          <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="trenes" class="tab-pane fade">
                        <form>
                            <div class="option ciudad">
                                <label for="ciudad">Ciudad</label>
                                <div class="select-icon">
                                    <select name="ciudad">
                                         <option value="" disabled selected hidden>¿En que ciudad buscar?</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option fecha">
                                <label for="fecha">Fecha</label>
                                <div class="select-icon">
                                    <select name="fecha">
                                         <option value="" disabled selected hidden>desde - hasta</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitaciones">
                                <label for="habitaciones">Habitaciones</label>
                                <div class="select-icon">
                                    <select name="habitaciones">
                                         <option value="" selected>1</option>
                                        <option value="bla">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option mercado">
                                <label for="mercado">Mercado</label>
                                <div class="select-icon">
                                    <select name="mercado">
                                         <option value="" disabled selected hidden>Residentes viajantes al exterior</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option habitacion right">
                                <label for="habitacion">Habitacion 1</label>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Adultos</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Niños</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="select-icon">
                                    <select name="habitacion">
                                         <option value="" disabled selected hidden>Bebes</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn right">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</section>

<section class="combo bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <img src="img/icono-bloque-1.png">
                    <div class="title">Estados unidos y mexico</div>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis massa lectus, fringilla at dictum sit amet, semper aliquet est.</div>
                <div class="three-rows">
                    <ul>
                        <li>
                            <a href="#"><div class="discount">10% OFF</div>
                            <img src="http://via.placeholder.com/320x240"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Mexico</div>
                                <p class="subtitle">1 enero - 15 enero 2017</p>
                                <div class="desc">Lorem ipsum dolor sit amet, consec adipiscing elit.</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="#"><div class="discount">10% OFF</div>
                            <img src="http://via.placeholder.com/320x240"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Cuba</div>
                                <p class="subtitle">5 enero - 5 feb 2017</p>
                                <div class="desc">Lorem ipsum dolor sit amet, consec adipiscing elit.</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="#"><div class="discount">10% OFF</div>
                            <img src="http://via.placeholder.com/320x240"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Republica dominicana</div>
                                <p class="subtitle">5 enero - 5 feb 2017</p>
                                <div class="desc">Lorem ipsum dolor sit amet, consec adipiscing elit.</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                    </ul>
                    
                    <a href="#" class="btn-border caret-right">Ver más ofertas</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <h1 class="heading">Salida grupal</h1>
    <p class="description">Lorem ipsum dolor sit amet, consec adipiscing elit. consec adipiscing elit.</p>
     <a href="#" class="btn-border-white caret-right">Ver más ofertas</a>
</section>

<section class="combo bg-light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading long">
                    <img src="img/icono-bloque-2.png">
                    <div class="title">Europa, medio y lejano oriente</div>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis massa lectus, fringilla at dictum sit amet, semper aliquet est.</div>
                <div class="four-rows">
                    <ul>
                        <li>
                            <a href="#"><div class="discount">Usd 890.-</div>
                            <img src="http://via.placeholder.com/240x160"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Tailandia</div>
                                <div class="desc">10 días visitando:</div>
                                <div class="desc bold">Bangkok - Rio Kwai - Ayutthaya - Lopburi - Phitsanulok - Sukhotai - Chiang Rai - Chiang Mai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="#"><div class="discount">Usd 890.-</div>
                            <img src="http://via.placeholder.com/240x160"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Tailandia</div>
                                <div class="desc">10 días visitando:</div>
                                <div class="desc bold">Bangkok - Rio Kwai - Ayutthaya - Lopburi - Phitsanulok - Sukhotai - Chiang Rai - Chiang Mai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="#"><div class="discount">Usd 890.-</div>
                            <img src="http://via.placeholder.com/240x160"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Tailandia</div>
                                <div class="desc">10 días visitando:</div>
                                <div class="desc bold">Bangkok - Rio Kwai - Ayutthaya - Lopburi - Phitsanulok - Sukhotai - Chiang Rai - Chiang Mai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="#"><div class="discount">Usd 890.-</div>
                            <img src="http://via.placeholder.com/240x160"></a>
                            <a href="#"><div class="box-info">
                                <div class="title">Tailandia</div>
                                <div class="desc">10 días visitando:</div>
                                <div class="desc bold">Bangkok - Rio Kwai - Ayutthaya - Lopburi - Phitsanulok - Sukhotai - Chiang Rai - Chiang Mai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                                </div></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>