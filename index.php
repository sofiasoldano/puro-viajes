<?php $page_name = "home" ?>
<?php include('header.php'); ?>

<section class="form-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="scroll-mobile">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill"  class="hosteleria" href="#hosteleria">Hosteleria</a></li>
                        <li><a data-toggle="pill" class="admisiones" href="#admisiones">Admisiones</a></li>
                        <li><a data-toggle="pill"  class="aereos" href="#aereos">Aereos</a></li>
                        <li><a data-toggle="pill" class="autos" href="#autos">Autos</a></li>
                        <li><a data-toggle="pill"  class="circuitos" href="#circuitos">Circuitos</a></li>
                        <li><a data-toggle="pill"  class="cruceros" href="#cruceros">Cruceros</a></li>
                        <li><a data-toggle="pill"  class="disney" href="#disney">Disney</a></li>
                        <li><a data-toggle="pill"  class="universal" href="#universal">Universal</a></li>
                        <li><a data-toggle="pill"  class="paquetes" href="#paquetes">Paquetes</a></li>
                        <li><a data-toggle="pill"  class="servicios" href="#servicios">Servicios</a></li>
                        <li><a data-toggle="pill"  class="traslados" href="#traslados">Traslados</a></li>
                        <li><a data-toggle="pill"  class="trenes" href="#trenes">Trenes</a></li>
                    </ul>
                </div>
                
                  <div class="tab-content">
                       <div id="hosteleria" class="tab-pane fade in active">
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
                                         <option value="" disabled selected hidden>Infoa</option>
                                        <option value="bla">bla</option>
                                    </select>
                                </div>
                                <div class="submit-btn">
                                    <input type="submit" value="Buscar" class="btn-blue">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="admisiones" class="tab-pane fade in">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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
                                <div class="submit-btn">
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

<section class="combo bg-light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <img src="img/icono-bloque-1.png">
                    <div class="title">Estados unidos y mexico</div>
                </div>
                <div class="three-rows">
                    <ul>
                        <li>
                            <a href="#">
                            <div class="img-relative">
                                <div class="discount">Usd 1.545.-</div>
                                <img src="img/mexico.png" width="320">
                            </div>
                            </a>
                            <div class="box-info">
                                <div class="title">De Mexico a Cancún por tierra</div>
                                <div class="box-description">
                                    <div class="desc">13 días visitando:</div>
                                    <div class="desc bold">México - Puebla - Oaxaca - Tehuantepec - Tuxla - Gutierrez - San Cristobal de las casas - Palenque - Campeche - Mérida - Cancún </div>
                                </div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                            <div class="img-relative">
                                <div class="discount">Usd 326.-</div>
                                <img src="img/new-york.png" width="320">
                            </div>
                            </a>
                            <div class="box-info">
                                <div class="title">New York</div>
                                <div class="box-description">
                                    <div class="desc bold">Alojamiento + Trf In / Out + Visita Alto y Bajo Manhattan</div>
                                </div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                            <div class="img-relative">
                                <div class="discount">Usd 1.839.-</div>
                                <img src="img/triangulo-oeste.png" width="320">
                            </div>
                            </a>
                            <div class="box-info">
                                <div class="title">Tiangulo del oeste</div>
                                <div class="box-description">
                                    <div class="desc">9 días visitando:</div>
                                    <div class="desc bold">Los Angeles - GRand Canyon - Ruta 66 - Hoover Dam - Las Vegas - Fresno - Yosemite - San Francisco</div>
                                </div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="#" class="btn-border-white caret-right">Ver más ofertas</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Salida grupal</h1>
                 <a href="#" class="btn-border-white caret-right">Ver más ofertas</a>
            </div>
        </div>
    </div>
</section>

<section class="combo bg-light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading long">
                    <img src="img/icono-bloque-2.png">
                    <div class="title">Europa, medio y lejano oriente</div>
                </div>
                <div class="four-rows">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="img-relative">
                                    <div class="discount">Usd 890.-</div>
                                    <img src="img/tailandia.png" width="290">
                                </div>
                            </a>
                            <div class="box-info">
                                <div class="title">Tailandia</div>
                                <div class="desc">10 días visitando:</div>
                                <div class="desc bold">Bangkok - Rio Kwai - Ayutthaya - Lopburi - Phitsanulok - Sukhotai - Chiang Rai - Chiang Mai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-relative">
                                    <div class="discount">Usd 520.-</div>
                                    <img src="img/egipto.png" width="290">
                                </div>
                            </a>
                            <div class="box-info">
                                <div class="title">Egipto</div>
                                <div class="desc">8 días visitando:</div>
                                <div class="desc bold">El Cairo - Aswan - Kom Ombo - Edfu - Esna - Luxor - El Cairo</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-relative">
                                    <div class="discount">Usd 397.-</div>
                                    <img src="img/dubai.png" width="290">
                                </div>
                            </a>
                            <div class="box-info">
                                <div class="title">Dubai</div>
                                <div class="desc">4 días visitando:</div>
                                <div class="desc bold">Dubai</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-relative">
                                    <div class="discount">Usd 1.180.-</div>
                                    <img src="img/capitales-imperiales.png" width="290">
                                </div>
                            </a>
                            <div class="box-info">
                                <div class="title">Capitales imperiales</div>
                                <div class="desc">9 días visitando:</div>
                                <div class="desc bold">Viena - Budapest - Praga</div>
                                <a href="#" class="btn-border caret-right">Ver oferta</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>