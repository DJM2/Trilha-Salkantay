<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Pacha Mama Spirit | Agencia de viajes de lujo en Perú</title>
    <meta name="description"
        content="Pacha Mama Spirit es una agencia de viajes en Perú que tiene mas de 15 años de experiencia en el rubro turistico, dando siempre calidad de servicio con cada cliente." />
    <meta name="keywords"
        content="Viaja a Peru, conocer peru, reservar peru, como viajar a peru, como viajar a machu picchu, reservar machu picchu, book machu picchu, reservar tour a machu picchu, tours en Machu Picchu" />
    <meta property="og:description"
        content="Te ofrecemos en esta sección las mejores opciones para conocer Perú, un país lleno de maravillas en cada rinconcito al que se va.  Maravíllate con lo que Perú ofrece.">
    <meta name="DateCreated" content="Mon, 6 June 2022 00:00:00 GMT-5">
    <meta name="Revisit-after" content="30 days">
    <meta property="og:image" content="https://pachamamaspirit.com/img/" />
    <link rel="canonical" href="https://www.pachamamaspirit.com/inicio" />
</head>

<body>
    @include('layouts.menu-castellano')
    <li>
        <button onclick="window.location='/'" class="castellano-es">Ingles</button>
    </li>
    @include('layouts.menu-castellano-2')
    <div class="back-menu">
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Arma tu viaje a Perú</beige>
                    </h1>
                </div>
                <form style="padding: 0px 25px">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <h5>Informacion del solicitante:</h5>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" id="inputEmail4"
                                placeholder="alvarado547@ejemplo.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="David Miranda"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Teléfono/Whatsapp:</label>
                            <div class="row">
                                <div class="col-4">
                                    <input type="number" class="form-control" id="codigoPais"
                                        placeholder="Código de país" required>
                                </div>
                                <div class="col-1">-</div>
                                <div class="col-7">
                                    <input type="number" class="form-control" id="numeroTelefono"
                                        placeholder="Número de teléfono" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nacionalidad:</label>
                            <input type="text" class="form-control" id="name"
                                placeholder="Escriba su nacionalidad">
                        </div>

                        <div class="col-12">
                            <h5>Informacion del viaje:</h5>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fa">Numero de adultos:</label>
                            <input type="number" class="form-control" id="numeroDias" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fa">Número de niños: <i class="icon-info-circle"
                                data-title="Menores de 8 años no pagan ingresos"></i></label>
                            <input type="number" class="form-control" id="numeroDias" placeholder="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fa">Transporte y tours:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="Grupo">En grupo</option>
                                <option value="Privado">En privado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fa">Tipo de Alojamiento:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="Grupo">Hotel 3***</option>
                                <option value="Privado">Hotel 4****</option>
                                <option value="Privado">Hotel 5*****</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="fa">Actividades de preferencia:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="familiar">
                                <label class="form-check-label" for="familiar">Familiar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="aventura">
                                <label class="form-check-label" for="aventura">Aventura</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="cultural">
                                <label class="form-check-label" for="cultural">Cultural</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Gastronomico">
                                <label class="form-check-label" for="gastronomico">Gastronómico</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Caminatas">
                                <label class="form-check-label" for="caminatas">Caminatas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Mistico">
                                <label class="form-check-label" for="caminatas">Místico</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="enPareja">
                                <label class="form-check-label" for="enPareja">En pareja</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="lunaDeMiel">
                                <label class="form-check-label" for="lunaDeMiel">Luna de Miel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ecoturismo">
                                <label class="form-check-label" for="ecoturismo">Ecoturismo</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h5>Fechas de viaje:</h5>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="dateArrive">Fecha de arrivo:</label>
                            <input type="date" class="form-control" id="dateArrive">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cantidadDias">Cantidad de dias:</label>
                            <input type="number" class="form-control" id="cantidadDias" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cantidadDias">¿Tiene flexibilidad en sus fechas?:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="si" value="option1">
                                <label class="form-check-label" for="si">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="No" value="option2">
                                <label class="form-check-label" for="No">No</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <h5>Mensaje</h5>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 3.8em"
                                placeholder="Especifique peticiones especiales:"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="boton-index">Enviar</button>
                    </div>
                </form>
                <div class="space"></div>
            </div>
        </div>
    </section>
    @include('layouts.foot-castellano')
</body>

</html>
