@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="arequipa">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">La ciudad blanca de Arequipa</h1>
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
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Arequipa</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Arequipa"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    ¿Por qué se le llama la ciudad blanca?
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Arequipa es conocida como la Ciudad Blanca debido a su arquitectura construida con
                                    piedra volcánica blanca, llamada sillar, que resistente a la intemperie y
                                    antisísmica. Su utilización se inicia a finales del siglo XVI. Esta piedra volcánica
                                    (provocada por el asentamiento de la ceniza) es blanca o excepcionalmente rosada. Su
                                    textura es blanda, ligera y resistente a la intemperie, por lo que surgió como
                                    solución estructural antisísmica privilegiada y una gran alternativa al adobe. Se
                                    extrae de canteras ubicadas en quebradas naturales ubicadas en la provincia de
                                    Arequipa.<br><br>

                                    Así, por ese motivo, podemos ver en las calles de Arequipa grandes construcciones de
                                    sillar, como arcos, piletas, templos, conventos, museos, bancos, sedes
                                    institucionales, así como hoteles y restaurantes que le da un sello
                                    particular.<br><br>
                                    <img src="{{ asset('img/panoramico/la-ciudad-blanca-de-arequipa.webp') }}"
                                        alt="La ciudad blanca de Arequipa" width="100%" loading="lazy">
                                    <i>Foto: Catedral central de Arequipa y volcán Misti</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Arequipa, patrimonio de la humanidad
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    El casco histórico de Arequipa es considerado por la Unesco como parte del
                                    Patrimonio Cultural de la Humanidad, debido a la mezcla de dos culturas y por ser
                                    capaz de crear estructuras que perduran en el tiempo. El Centro Histórico de
                                    Arequipa también es reconocido por estar enmarcado por la campiña, su pulmón.
                                    <br><br>
                                    El Ministerio de Cultura declaró, además, Patrimonio Cultural de la Nación Los
                                    Saberes y Técnicas de Extracción y Labrado de Sillar en la Ciudad de Arequipa.
                                    <br><br>
                                    Arequipa es una preciosa ciudad que se ubica al sur del Perú, en la provincia y el
                                    departamento del mismo nombre. Conocida como la <strong>'Ciudad Blanca'</strong>.
                                    ​Arequipa es una joya que te enamorará para siempre. Se trata de la segunda ciudad
                                    más poblada del
                                    Perú, después de la capital Lima, y alberga una población de 1.008.290 habitantes
                                    según los datos del Censo Nacional del año 2017.<br><br>

                                    Fundada el 15 de agosto de 1540, es una ciudad con un gran legado histórico, que
                                    cautiva a los visitantes gracias a su sorprendente arquitectura. Pues los edificios
                                    históricos de la ciudad son un grandioso ejemplo de la fusión de la arquitectura
                                    europea y de la andina.<br><br>

                                    Hoy en día, esta metrópoli que funciona como capital tanto de la provincia como del
                                    departamento homónimo es un interesante destino que eligen turistas de todo el mundo
                                    para apreciar de cerca el pasado y la cultura peruana. Los viajeros tienen la
                                    posibilidad de recorrer un casco histórico impactante que ha sido reconocido por la
                                    UNESCO como Patrimonio Cultural de la Humanidad y sorprenderse con los atractivos
                                    espacios que se encuentran a su alrededor.<br><br>

                                    La Basílica Catedral de Arequipa, el Museo Histórico Municipal, el Palacio de
                                    Goyeneche, el Monasterio de Santa Catalina de Siena y la Casa de Tristán del Pozo
                                    son sólo algunos de los sitios que todo visitante debe apreciar para conocer la
                                    historia, el perfil religioso y las riquezas arquitectónicas que atesora la ciudad.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Arequipa: Reseña Histórica
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    La región de Arequipa se encuentra poblada desde antes de la época incaica. Grupos
                                    nómadas y pueblos como los collaguas, los chimbas y los yarabayas habitaban esta
                                    zona.<br><br>

                                    A partir de 1170, los incas se establecieron en estas tierras y ejercieron su
                                    dominio. En 1540 los españoles lograrían asentarse para fundar la ciudad, con Juan
                                    de la Torre y Díaz Chacón y Garcí Manuel de Carbajal como principales responsables y
                                    a órdenes de Francisco Pizarro.<br><br>
                                    El 15 de agosto de 1540, Don Garcí Manuel de Carvajal, Teniente de Gobernados y
                                    Gobernador, por mandato del Conquistador Don Francisco Pizarro, fundó la Villa
                                    Hermosa de Nuestra Señora de la Asunción, Arequipa en el sitio denominado La Chimba
                                    (San Lázaro) a la margen izquierda del río. Al hallarse entre los fundadores y
                                    vecinos, algunos nobles e hidalgos andaluces, extremeños y castellanos, la villa
                                    inmediatamente fue elevada a la categoría de ciudad el 22 de septiembre de
                                    1541.<br><br>
                                    La actividad que pronto se hizo predominante fue la agricultura; se
                                    habían aclimatado con gran éxito la vid y el olivo, iniciándose al poco tiempo una
                                    próspera producción de vinos y aguardientes de uva, así como de aceite de oliva,
                                    sobre todo en la zona de Yauca.<br><br>
                                    Al usarse el sillar, un tipo de piedra volcánica abundante en la región, en las
                                    construcciones, la urbe virreinal empezó a adquirir su característico aspecto,
                                    llenándose paulatinamente de majestuosas casonas de hacendados, hermosos templos y
                                    monumentales conventos, como el de Santa Catalina.<br><br>
                                    Cuando los primeros vientos de la independencia empezaron a soplar, muchos
                                    arequipeños de ilustres familias criollas se plegaron a la causa, aun en un medio
                                    poco propicio, vinculándose con sociedades patrióticas de Argentina y otros países.
                                    <br><br>
                                    <img src="{{ asset('img/galeria/historia-sobre-arequipa-Perú.webp') }}" width="80%"
                                        alt="Historia de Arequipa" loading="lazy">
                                    <i>Foto: Tradiciones</i><br>
                                    Uno de los sucesos más notables de la gesta emancipadora fue la campaña del cuzqueño
                                    Mateo García Pumacahua, quien salió hacia Arequipa en octubre de 1814 con un
                                    ejército de más de 5 mil hombres; tras derrotar a las filas realistas que comandaba
                                    el mariscal Francisco Picoaga, entró triunfante a la Ciudad Blanca y formó una junta
                                    provisional de gobierno.<br><br>
                                    Actualmente Arequipa mantiene su liderazgo económico en el sur del país y es una
                                    pujante urbe donde se concentran comercio, servicios, agricultura e industrias,
                                    aunque la lechera atraviesa por una momentánea retracción. Ha esta ciudad le fue muy
                                    bien en crecimiento y economía, la historia y el tiempo al final dan sus buenos
                                    frutos. Arequipa hoy en día tal vez es la segunda ciudad más importante del Perú
                                    después de Lima.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principales lugares turísticos en Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Arequipa es el destino perfecto para disfrutar de unas vacaciones llenas de
                                    naturaleza, aventura, historia y deliciosa gastronomía. Nombrada como Patrimonio
                                    Cultural de la Humanidad, esta ciudad es, sin duda, uno de esos lugares que hay que
                                    visitar al menos una vez en la vida. Aquí te dejamos 10 lugares turísticos de
                                    Arequipa que debes conocer.<br><br>
                                    <h3>1. Volcán Misti</h3>
                                    Arequipa tiene uno de los destinos más impresionantes para los viajeros más
                                    atrevidos: el Misti, un volcán de 5.822 metros, con más de 800 mil años de
                                    antigüedad y que se encuentra entre los 16 volcanes activos y potencialmente activos
                                    del Perú. Si buscas un plan de máxima aventura, te recomendamos realizar el ascenso
                                    al Volcán Misti, una travesía de dos días rodeada de increíbles paisajes, acampando
                                    a más de 4.000 metros sobre el nivel del mar y con una llegada a la meta totalmente
                                    única: la vista del cráter del Misti.<br><br>
                                    <img src="{{ asset('img/galeria/volcan--misti-Arequipa-Peru-Pacha-Mama.webp') }}"
                                        width="100%" alt="Volcán Misti Arequipa Perú" loading="lazy">
                                    <i>Foto: Volcán Misti, Arequipa</i><br><br>

                                    <h3>2. Monasterio de Santa Catalina</h3>
                                    En pleno centro de la ciudad de Arequipa se encuentra una de las grandes obras
                                    arquitectectónicas del Perú colonial. Se trata del Monasterio de Santa Catalina, un
                                    convento de clausura construido en el siglo XVI y que cuenta con más de 20 mil
                                    metros cuadrados que podrás explorar de punta a punta. Sus coloridas calles, su
                                    interesante historia y su asombrosa arquitectura han convertido al Monasterio de
                                    Santa Catalina en uno de los principales lugares turísticos de Arequipa.<br><br>
                                    <img src="{{ asset('img/galeria/Monasterio-de-Santa-Catalina-Arequipa.webp') }}"
                                        width="100%" alt="Monasterio de Santa Catalina" loading="lazy">
                                    <i>Foto: Monasterio de Santa Catalina</i><br><br>

                                    <h3>3. Mirador de Yanahura</h3>
                                    Si eres de esos a los que les gusta tener una vista 360 de la ciudad que visita,
                                    tienes que conocer el Mirador de Yanahura. Situado en el pintoresco distrito del
                                    mismo nombre, este mirador ofrece una de las vistas más espectaculares de Arequipa,
                                    con la ciudad a los pies de sus tres volcanes más representativos: el Misti, el
                                    Chachani y el Pichu Pichu. Además, otro de los atractivos de este lugar son sus
                                    característicos arcos de sillar blanco, en los que podrás leer frases de personajes
                                    ilustres de Perú.<br><br>
                                    <img src="{{ asset('img/galeria/mirador-de-Yanahuara-Arequipa.webp') }}" width="100%"
                                        alt="Miradofr de Yanahuara" loading="lazy">
                                    <i>Foto: Mirador de Yanahuara y volcán Misti</i><br><br>

                                    <h3>4. Cañón del Colca</h3>
                                    Uno de los principales destinos turísticos del Peru; además, considerado como uno de
                                    los cañones más profundos de todo el mundo; este centro turístico ofrece paisajes
                                    espectaculares, restos arqueológicos, pequeños poblados coloniales y lo más
                                    interesante e importante el vuelo de cóndores andinos junto a la amanecida con el
                                    reflejo del sol bajo el cielo azul.<br><br>

                                    Para apreciar todo lo que ofrece el cañón de Colca se debe viajar a valle de Colca
                                    ubicado a 151 kilómetros de la Ciudad Blanca de Arequipa y por tres horas de viaje
                                    en auto bus, normalmente es recomendable descansar una noche en el valle de Colca
                                    (Chivay) para poder apreciar el fabuloso vuelo de los cóndores.<br><br>
                                    <img src="{{ asset('img/galeria/COLCA-canyon-AREQUIPA--pacha-mama-Spirit.webp') }}"
                                        alt="Cañon del Colca canyon" loading="lazy" width="100%">
                                    <i>Foto: Mirador de cóndor, cañon del Colca</i><br><br>

                                    <h3>5. Bosque de Piedras Choqolaqa</h3>
                                    El Bosque de Piedras Choqolaqa parece un paisaje de otro planeta, el escenario de
                                    una ficción marciana hollywoodense o incluso un cuadro surrealista de Dalí. Se le
                                    conoce también como Nueva Arequipa, y es que la leyenda dice que un día sus
                                    pobladores dejaron de guardar respeto a sus Apus y como castigo todo se volvió de
                                    piedra.<br><br>
                                    <h3>6. Las canteras de Sillar </h3>
                                    La ciudad de Arequipa es conocida por sus construcciones a base de sillar. Esta roca
                                    de color blanquecino fue utilizada por los Incas para edificaciones sagradas y,
                                    posteriormente, por los españoles para construir casas e iglesias. Es así que, por
                                    el uso del sillar, Arequipa es conocida como la Ciudad Blanca. Al visitar la Ruta
                                    del Sillar, podrás descubrir la manera cómo fue trabajado este material que, por la
                                    belleza y particularidad de las obras, te dejará impresionado.<br><br>
                                    <h3>7. Plaza de Armas de Arequipa</h3>
                                    La plaza mayor de Arequipa, se ubica en el Centro Histórico, es uno de los
                                    principales lugares públicos de la ciudad Blanca, considerado como una de las plazas
                                    más hermosas del Peru y de toda américa latina, rodeado de la catedral principal de
                                    Arequipa al norte, los tres portales al este, sur y oeste; la iglesia de la compañía
                                    al sur-este y en el centro de la plaza mayor presenta una hermosa fuente de bronce
                                    de tres platos coronados con la figura de un soldado del siglo XVI.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Fechas más importantes en Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Virgen de Chapi en Arequipa</h3>
                                    <i>Fecha: 1 de mayo</i><br>
                                    La fiesta de la Virgen de Chapi es una celebración cristiana que tiene una gran
                                    acogida en el pueblo arequipeño. Su culto en esta zona tiene su origen hace casi
                                    tres siglos y su fiesta clave y central es todos los años el día primero de Mayo,
                                    aunque existen pueblos donde la fecha es movible y comparte escenario con otras
                                    representaciones marianas.<br><br>

                                    <h3>2. Aniversario de La Fundación Española de La Ciudad de Arequipa en Arequipa
                                    </h3>
                                    <i>Fecha: 15 de agosto</i><br>
                                    La Ciudad de Arequipa fue fundada por los españoles en el año 1540, un 15 de Agosto.
                                    De ahí en adelante anualmente, en vísperas de dicha fecha Arequipa se viste de gala
                                    para celebrar su aniversario.<br><br>

                                    Existe un programa que varía cada año, pero dentro del cual, por lo general, las
                                    festividades dan comienzo con una semana de anticipación. Entre los eventos que se
                                    encuentran para el día de apertura se hallan: Un pasacalle, que recorre las
                                    principales avenidas de la ciudad.<br><br>

                                    <h3>3. Aniversario de Cotahuasi en Arequipa</h3>
                                    <i>Fecha: 4 de mayo</i><br>
                                    El aniversario de Cotahuasi es una importante celebración que en la actualidad se
                                    encuentra comprendida dentro de la Semana Turística de Cotahuasi y que tiene como
                                    fecha clave el día 4 de Mayo, fecha en la que se conmemora y festeja la creación
                                    política de la provincia de La Unión, a la que pertenece el distrito de Cotahuasi,
                                    en Arequipa.<br><br>
                                    Es común en la celebración encontrar diferentes ferias, además de las gastronómicas.
                                    Sobre estas otras, estas pueden ser ferias artesanales, aunque también existen
                                    exhibiciones de las danzas típicas de la zona, estas se dan en los corsos o también
                                    en el llamado “Llacta Tupay de la Reserva Paisajística de Cotahuasi”.<br><br>

                                    <h3>4. Fiesta de La Inmaculada Concepción en Arequipa</h3>
                                    <i>Fecha: 8 de diciembre</i><br>
                                    La fiesta de la Inmaculada Concepción es una festividad religiosa mundial, pero que
                                    presenta una interesante manera de celebración dentro del departamento de Arequipa,
                                    en específico en las zonas de Arequipa (ciudad), Chuquibamba y Cayma donde es
                                    llamada “Mamita Conchita” desde la aparición de la primera estatua allá por el siglo
                                    XVIII cuando fuera traída por un grupo de soldados españoles y dejada en el lugar a
                                    pedido de los habitantes de Chuquibamba. La fiesta es importante por el número de
                                    feligreses que congrega, así como también, por poder apreciar en ella la asimilación
                                    de una tradición occidental en un pueblo con influencias andinas.<br><br>

                                    <h3>5. Carnaval Chuquibambino en Arequipa</h3>
                                    <i>Fecha: primer sábado del mes de Febrero</i><br>
                                    El carnaval de Chuquibamba, es una celebración colorida y divertida que tiene su
                                    celebración el distrito del mismo nombre, dentro de la provincia de Condesuyos, en
                                    el departamento de Arequipa. Como todo carnaval presenta una fecha movible, pero que
                                    se puede seguir según calendario, y que la última vez se llevó a cabo durante el
                                    periodo comprendido entre el 27 de febrero y el 6 de marzo, aunque la ciudad se
                                    encuentra de carnaval desde el primero de febrero con los tradicionales juegos de
                                    aguas infaltables en el país.<br><br>
                                    <img src="{{ asset('img/galeria/pisco-sour-peru.webp') }}" alt="Pisco Sour, Peru"
                                        width="100%" loading="lazy">
                                    <i>Foto: Pisco Sour</i>
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
