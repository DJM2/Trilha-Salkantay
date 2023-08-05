@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="lima">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Lima, Ciudad de reyes</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Lima"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    ¿Por qué se le llama Ciudad de reyes?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Cuando al conquistador <strong>Francisco Pizarro</strong> se le asignó la tarea de
                                    elegir la capital del Virreinato español, tomó en cuenta que esta capital debía
                                    estar cerca al mar. Y así se decidió por un hermoso valle al lado del río Rímac,
                                    donde finalmente fundó la ciudad de Lima, hecho que quedó oficializado el 18 de
                                    enero de 1535.<br><br>
                                    Según los historiadores, esta fecha coincide con el mes de la bajada de los reyes
                                    magos, y por eso Pizarro la bautizó como la <strong>“Ciudad de los Reyes”</strong>.
                                    Han pasado 486 años y, desde entonces, Lima ha cambiado mucho desde la óptica
                                    territorial, demográfica y cultural.<br><br>
                                    A pesar de esas transformaciones, Lima todavía cuenta con espacios
                                    naturales que merecen ser conservados, pues son los pulmones de una ciudad de mil
                                    rostros que hoy alberga más de 10 millones de personas.<br><br>
                                    <img src="{{ asset('img/panoramico/ciudad-de-reyes-lima.webp') }}"
                                        alt="Ciudad de Lima, Miraflores" width="100%" loading="lazy">
                                    <i>Foto: Miraflores, Lima</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    La ciudad de Lima Metropolitana
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Lima es la ciudad capital de la República del Perú. Se encuentra situada en la costa
                                    central del país, a orillas del océano Pacífico, conformando una extensa y populosa
                                    área urbana conocida como Lima Metropolitana, flanqueada por el desierto costero y
                                    extendida sobre los valles de los ríos Chillón, Rímac y Lurín. Según el Censo
                                    Nacional del año 2017, el departamento con mayor población en el país es Lima, al
                                    totalizar 9 millones 485 mil 405 habitantes.<br><br>
                                    En la actualidad se le considera como el centro político, financiero y
                                    comercial del país. A nivel internacional, la ciudad ocupa el quinto lugar dentro de
                                    las ciudades más pobladas de América Latina y es una de las treinta aglomeraciones
                                    urbanas más pobladas del mundo. Por su importancia geoestratégica, ha sido definida
                                    como una ciudad global de «clase beta».<br><br>
                                    <h3>La comunidad más grande de Latinoamérica</h3>
                                    Actualmente, más de un millón de personas de descendencia china viven en el Perú y
                                    cerca de 200 mil en Lima. Se trata de la mayor colonia que tiene el país asiático en
                                    el mundo. Llegaron a trabajar hace tres generaciones cuando la abolición de la
                                    esclavitud dejó un vacío en la fuerza laboral.
                                    El barrio chino de Lima, ubicado en el centro de la capital, es una concurrida zona
                                    comercial con mercados, tiendas y chifas -restaurantes de comida fusión oriental- de
                                    deliciosa comida que los peruanos han llegado a amar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Lima: Reseña Histórica
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Lima <strong>(que proviene del quechua Limaq)</strong> es la capital del Perú. Se
                                    encuentra situada
                                    en la costa central del país, a orillas del Océano Pacífico, flanqueada por el
                                    desierto costero y extendida sobre los valles de los ríos Chillón, Rímac y Lurín.
                                    Fue fundada el 18 de enero de 1535 con el nombre “La Ciudad de los Reyes” en la
                                    región agrícola que hasta entonces era conocida por los indígenas como
                                    Limaq.<br><br>

                                    Lima fue la capital del Virreinato del Perú y la ciudad más grande e importante de
                                    América del Sur durante el régimen español; después de la Independencia, pasó a ser
                                    la capital de la República.<br><br>

                                    Por su expansión y populosa área urbana, hoy se le denomina Lima Metropolitana, y
                                    cuenta con una población mayor a 9 millones 320 mil habitantes, quienes representan
                                    el 30% de la población peruana. Esta cifra la ha convertido en la ciudad más poblada
                                    del país, la quinta de América Latina y el Caribe y en una de las treinta
                                    aglomeraciones urbanas más pobladas del mundo. Asimismo, Lima es considerada como el
                                    centro comercial, financiero, cultural y político del país.<br><br>

                                    Jurisdiccionalmente, la metrópoli se extiende mayoritariamente dentro de la
                                    provincia de Lima y en una porción menor, hacia el oeste, dentro de la provincia
                                    Constitucional del Callao, donde se encuentran el puerto marítimo y el Aeropuerto
                                    Internacional Jorge Chávez. Ambas provincias cuentan con autonomía regional desde el
                                    año 2002.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Lugares turísticos en Lima
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Centro histórico de Lima</h3>
                                    <i>El linaje de una capital con tradición</i><br>
                                    Una de las principales atracciones de las ciudades más longevas a lo largo del mundo
                                    entero, es la visita a su Centro Histórico. Y el de la majestuosa ciudad de Lima no
                                    podría ser la excepción: en las calles, iglesias y edificios, puedes dar un salto y
                                    visitar el pasado en primera persona. Como si se tratase de una máquina del tiempo a
                                    la cual acudes para ver la antigua Lima, esa que guarda su toque colonial hasta hoy
                                    en día.<br><br>
                                    Ser la única capital de Sudamérica con salida al Océano Pacífico tiene su atractivo:
                                    en los acantilados de la Costa Verde puedes ver una Lima moderna, que está a la
                                    vanguardia tal como las ciudades más importantes del globo terráqueo. Pero si
                                    quieres conectarte con la Lima histórica, la visita al centro de la ciudad es
                                    indispensable.<br><br>
                                    <img src="{{ asset('img/galeria/tour-caballos-en-centro-de-lima.webp') }}"
                                        alt="Tour con caballos en el centro de Lima" width="100%" loading="lazy">
                                    <i>Foto: Tour en caballos, centro de Lima</i><br><br>

                                    <h3>Miraflores y Costa Verde</h3>
                                    <i>Ventana al Pacífico</i><br>
                                    Lima es la única capital sudamericana frente al mar y el barrio de Miraflores sí que
                                    sabe sacarle provecho; sobre todo cuando la Costa Verde cruza debajo de sus
                                    acantilados acercando a los turistas a las olas y a una oferta gastronómica que
                                    incluye sunsets a la carta.<br><br>
                                    Miraflores combina esta mágica cercanía al Pacífico con sus casonas de antaño, que
                                    sobreviven intercaladas con modernos edificios y sitios arqueológicos, y un malecón
                                    privilegiado: aquí se encuentra desde un exclusivo centro comercial hasta preciosos
                                    parques y decenas de parapentes jugando con el viento. Simplemente precioso.<br><br>

                                    <h3>Museo Larco</h3>
                                    <i>Cita con 5000 años de historia</i><br>
                                    Rodeada por hermosos jardines, una mansión virreinal del siglo XVIII resguarda una
                                    impresionante colección privada de piezas del Perú precolombino. Dentro de la
                                    muestra permanente del museo destaca la Sala de Oro y Joyas con
                                    maravillosas piezas hechas por virtuosos orfebres del antiguo Perú para honrar a sus
                                    dioses. No menos atención capta la sala de huacos eróticos, que nos muestra su
                                    interesante visión sobre la sexualidad.<br>

                                    Definitivamente, visitar el museo Larco es conectarse y reconectarse con la
                                    cosmovisión andina.<br><br>
                                    <strong>Información general:</strong>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Clima</th>
                                                <th scope="col">Horario</th>
                                                <th scope="col">Altura</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>- Adultos: S/30 <br>- Mayores de 65: S/25 <br>- Estudiantes: S/15
                                                </td>
                                                <td>mín. 17,3 ℃/ máx.: 21,5 ℃</td>
                                                <td>10:00 hrs a 19:00 hrs</td>
                                                <td>82 m s. n. m.</td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <img src="{{ asset('img/galeria/Museo-Larco-lima-Pacha-Mama-Spirit.webp') }}"
                                        alt="Museo de Larco Herrera, Lima" width="100%" loading="lazy">
                                    <i>Foto: Museo de Larco Herrera, Lima</i>
                                    <br><br>
                                    <h3>Museos en Lima</h3>
                                    <i>Punto de encuentro de conocedores y cosmopolitas</i><br>
                                    La mejor manera de comprender la historia del Perú es visitando los Museos de Lima.
                                    En ellos se conserva el mayor patrimonio cultural del país.

                                    Algunas de las mejores colecciones de la época prehispánica las tienen el Museo
                                    Nacional de Antropología y Arqueología, el Museo Larco y el Museo Amano; el Museo de
                                    Arte de Lima (MALI) resume todas las manifestaciones artísticas el país; y el MAC y
                                    el MATE (que exhibe la obra del fotógrafo peruano Mario Testino) son excelentes
                                    opciones de arte moderno. Simplemente imperdibles.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Fechas más importantes en Lima
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Aniversario de Lima</h3>
                                    <p><strong>Fecha: 18 de enero</strong></p>
                                    Lima es la capital del Perú. Esta tiene como fecha de fundación el día 18 de enero,
                                    cuando allá en el año 1535 fuera fundado por el conquistador <strong>Francisco
                                        Pizarro.</strong> Este
                                    es un evento muy importante para los habitantes de la región ya que son muchas las
                                    actividades que se programan para tal fecha además de los días que la anteceden.
                                    Programa que cambia según el gobernante a cargo, pero que en esencia conserva el
                                    espíritu de todos los limeños.<br><br>

                                    Las celebraciones por el aniversario de la Capital dan comienzo con diferentes
                                    actividades culturales, entre ellas conferencias cuyo motivo varía cada año. Además
                                    de ello se ha vuelto una tradición la presencia de una impresionante Serenata por
                                    Lima, misma que se realiza en la Plaza de Armas y en la que se exhiben los talentos
                                    musicales de personas de nuestro país, quienes expresan su música de los géneros
                                    modernos y tradicionales.<br><br>

                                    Es común también para estas celebraciones la organización de diferentes pasacalles,
                                    en estos queda expuesto el colorido de las danzas tradicionales de Lima, donde es
                                    infaltable la presencia de la marinera, también se ven tonderos, festejos y
                                    sayas.<br><br>

                                    Además se encuentran las infaltables ferias gastronómicas donde las exquisiteces y
                                    amplia variedad de la culinaria local quedan exhibidas y puestas a la disposición
                                    del consumidor. Platos de fondo como arroz con pollo o pato, lomo saltado, causa
                                    rellena, entre muchos otros vienen acompañados de exquisitos postres infaltables
                                    como mazamorra morada, suspiro a la limeña y demás para entretener al estómago de
                                    nuestros visitantes.<br><br>

                                    <h3>2. Santa Rosa de Lima</h3>
                                    <p><strong>Fecha: 30 de agosto</strong></p>
                                    Santa Rosa de Lima es la santa protectora de las Américas y de las Filipinas,
                                    protectora además de la Policía Nacional de nuestro país, cuya fecha de
                                    celebraciones presentan como día central el 30 de Agosto.<br><br>

                                    Cuenta la historia de esta Santa, cuyo nombre verdadero era Isabel Flores de Oliva
                                    que aquella, nacida en el año de 1586 vivió una vida llena de hechos
                                    extraordinarios. Entre ellos el milagro de las rosas que le diera el nombre ya que,
                                    se cuenta que para entonces en Lima no se cultivaban este tipo de plantas y que fue
                                    milagrosamente en el huerto de su casa donde surgieron espontáneamente estas flores.
                                    Otro motivo que caracteriza a las rosas como símbolo de la Santa es el milagro por
                                    el cual el Papa Clemente IX la canonizara ya que, según se dice, en el momento en el
                                    que aquel dudara de la santidad de limeña esta hizo llover rosas sobre su
                                    escritorio, motivo por el cual, el Sumo Pontífice realizara posteriormente muchas
                                    disposiciones en su honor, aunque fuera su sucesor Clemente X quien finalmente
                                    lograra canonizarla.<br><br>

                                    Para las celebraciones en conmemoración por esta Santa se llevan a cabo
                                    peregrinaciones hasta su templo. En este se realiza la práctica de un acto
                                    tradicional que es depositar una carta en el llamado “Pozo de los deseos” ya que se
                                    dice que aquello que uno le pida a la Santa se le va a volver realidad si se le
                                    solicita con mucho fervor.<br><br>

                                    <h3>3. Concurso Nacional de Caballo Peruano de Paso</h3>
                                    <p><strong>Fecha: Mes de abril</strong></p>
                                    El Concurso Nacional de Caballo Peruano de Paso es un evento que se lleva a cabo en
                                    Mamacona que se localiza en el distrito de Lurín dentro de la provincia y región de
                                    Lima. El concurso ha cumplido para el año 2011 su XLVI presentación misma que se
                                    realiza entre los meses de Marzo o Abril y que presenta una semana de duración.

                                    El Concurso convoca a cientos de amantes de estos equinos, tal es el grado de la
                                    recepción que presenta este concurso que son más de 700 los animales que son
                                    presentados en esta competencia Nacional, y que son la representación de los mejores
                                    caballos de esta raza que son oriundos del país, pero que son criados tanto en
                                    ámbito nacional como en países vecinos de Bolivia, Ecuador y otros estados de
                                    Centroamérica.

                                    En la actualidad la importancia de este concurso es tal que se ha creado dentro del
                                    Fundo Mamacona el Local de Exhibiciones de Mamacona que se trata del primer museo en
                                    honor a esta especie aborigen y que ha surgido gracias a la colaboración de los
                                    interesados.

                                    En el último día de las celebraciones se realiza dentro del establecimiento la
                                    premiación de los ganadores de las diferentes categorías que existen, entre las
                                    cuales se pueden reconocer: <br>
                                    <ul>
                                        <li>“Maestro Enfrenador”</li>
                                        <li>Prueba de Menores de 10 a 12 años con la subdivisión de niños y niñas</li>
                                        <li>Premio a la Mejor Potranca Presentada al Cabestro</li>
                                        <li>Campeona de Bozal Hembra</li>
                                        <li>Premio Pisos Para Yeguas</li>
                                        <li>Premio Progenie de Madre</li>
                                        <li>Premio Madre e Hija</li>
                                        <li>Premio Conjunto de Yeguas</li>
                                        <li>Premio Mérito Zootécnico Hembra</li>
                                        <li>Categoría de Potrillos al Cabestro</li>
                                        <li>Categoría de Potrillos de Bozal</li>
                                        <li>Premio Afición, entre otros.</li>
                                    </ul>
                                    <h3>Día de La Canción Criolla</h3>
                                    <i><strong>Fecha: 31 de octubre</strong></i><br>
                                    El día de la canción criolla se celebra todos los años el 31 de Octubre, esta fecha
                                    fue instaurada dentro del calendario de festividades peruanas durante el gobierno de
                                    Manuel Prado y Ugarteche en la década del cuarenta.<br><br>

                                    La canción criolla y los intérpretes de la misma, a quienes se homenajea en esta
                                    fecha, tienen una historia importante que presenta su periodo de apogeo en los años
                                    veinte y a cuyos integrantes se ha denominado “la guardia vieja”.<br><br>

                                    La Guardia Vieja comprende a los clásicos del criollismo entre los que cabe destacar
                                    a José Sabas Libornio-Ibarra, a Juan Peña Lobatón, Julio Flores, Óscar Molina, entre
                                    otros. Y a quienes seguirían importantes intérpretes y compositores de la década del
                                    treinta al cuarenta con una gran influencia de Felipe Pinglo quien dejara en la
                                    memoria de la música peruana hermosas composiciones como es el caso de “El plebeyo”,
                                    “El Huerto de mi amada”, “El espejo de mi vida” y que darían pie a la expansión de
                                    la popularidad de este tipo de música entonada y creada por voces como las de Jesús
                                    Vásquez, Lucha Reyes, Oscar Avilés, Luis Abanto Morales o la recordada y gran
                                    Chabuca Granda.<br><br>
                                    Las Celebraciones que se dan en tiempos actuales por el Día de la Canción Criolla se
                                    concentran principalmente en las diferentes peñas criollas que se celebran a lo
                                    largo del país y en especial en la capital. O también gracias serenatas y conciertos
                                    que organizan ya sean las autoridades de cada uno de los distritos, o particulares
                                    adeptos a esta importante celebración.<br><br>

                                    <h3>Día Nacional del Pisco Sour</h3>
                                    <i><strong>Fecha: primer sábado del mes de Febrero</strong></i><br>
                                    El pisco sour se ha vuelto en los últimos años la bebida bandera del Perú, se trata
                                    de un trago exquisito a base de pisco de las tierras iqueñas que cada vez adquiere
                                    también más fuerza y reconocimiento en el extranjero. Por tales atributos el Estado
                                    ha reconocido un Día Nacional del Pisco Sour como tributo a esta exquisita bebida y
                                    que tiene como fecha central el primer sábado del mes de Febrero y se viene
                                    celebrando desde el año 2004.<br><br>
                                    <img src="{{ asset('img/galeria/pisco-sour-peru.webp') }}" alt="Pisco Sour, Peru"
                                        width="100%" loading="lazy">
                                    <i>Foto: Pisco Sour</i><br><br>

                                    Si bien el pisco es una bebida tradicional que se origina en la región de Ica, es el
                                    Lima y sus diferentes distritos en lo que esta celebración cobra más fuerza, siendo
                                    uno de los distritos seleccionado como sede oficial cada año de celebración.<br><br>

                                    Cada distrito presenta una manera diferente de celebrar este día, por ejemplo, en
                                    Barranco, las actividades principales se desarrollan en el Museo de Arte
                                    Contemporáneo en donde se realiza la exhibición y venta de este licor
                                    peruano.<br><br>

                                    En otros distritos como en Pueblo Libre se llevan a cabo además diferentes shows
                                    artísticos para amenizar el día, entre ellos competencias de bailes, junto con
                                    competencias de barman, además de la obligatoria venta de este licor junto con
                                    platos típicos de la zona.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours más populares para Cusco:</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="camino-inca-cantera-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/caminata-a-choquequirao.webp') }}"
                                alt="camino inca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Chquequirao, caminata 4 días </h5>
                            <p class="text-card">Cachicata o Inca Quarry es una de las antiguas canteras utilizadas
                                por las civilizaciones Pre-Inca e Inca para construir el vasto complejo…</p>
                            <a href="camino-inca-cantera-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="#">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="City tour en Cusco ciudad" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">City tour en Cusco</h5>
                            <p class="text-card">Antes del amanecer en el lago Titicaca, una neblina azul cubre
                                nuestra vista. Muchos conejillos de indias corren para...</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="viajar-a-puno">
                            <img class="card-img-top" src="{{ asset('img/thumb/tour-a-la-laguna-de-humantay.webp') }}"
                                alt="Tour a Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour a la laguna Humantay</h5>
                            <p class="text-card">Puno es una de las ciudades más importantes de la orilla del lago
                                Titicaca, el lago más navegable y...</p>
                            <a href="viajar-a-puno" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="vilcabamba">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Llactapata inca trail" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour gastronómico</h5>
                            <p class="text-card">Hasta hace poco, Vilcabamba era un rincón relativamente seguro y
                                accesible de la...</p>
                            <a href="vilcabamba" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
