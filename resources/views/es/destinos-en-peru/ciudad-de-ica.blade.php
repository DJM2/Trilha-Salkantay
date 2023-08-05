@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="container">
        <div class="row">
            <h1 class="h1-destinos">Ica, la ciudad del eterno sol</h1>
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
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Ica</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Ica"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Ica, la ciudad del eterno sol
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <i>Ica, también conocida como la ciudad del eterno sol, cuna del pisco o ciudad del
                                        sol</i>
                                    <p>
                                        Ica es considerada la tierra del sol eterno, aquella donde será difícil que
                                        despiertes para ver días grises ya que el astro rey no se cansa de iluminar sus
                                        terrenos. Por esta y muchas otras razones, esta región del país, a pocas horas
                                        de Lima, es la favorita para tomar unas vacaciones solo, en pareja, con amigos,
                                        o con la familia.<br><br>
                                        Debido a su proximidad con <a href="{{ route('lima-ciudad-de-reyes') }}"
                                            title="Ciudad de Lima" target="_blank"> Lima</a>,
                                        la capital del Perú, Ica es uno de los destinos
                                        ideales para escaparse: esta región sureña está ubicada a (aproximadamente) 4
                                        horas de la urbe limeña y tiene un sinnúmero de actividades, tan distintas como
                                        divertidas, para los viajeros que se aventuren a recorrer su territorio.<br><br>
                                        Porque en Ica, las dunas de sus enormes desiertos resguardan el legado cultural
                                        e histórico de antiguas civilizaciones, como también son la locación de un oasis
                                        que parece sacado de una película o un cuento de hadas. En Ica abundan las
                                        hermosas playas con aguas refrescantes. Ese mismo mar que sirve para practicar
                                        tus chapuzones con tu familia y amigos, también es el hábitat de hermosas
                                        especies de fauna silvestre, que están ansiosas porque las visites.<br><br>
                                        No es una exageración: en Ica hay una actividad distinta para cada tipo de
                                        turista. Es un lugar donde el tiempo pasa volando, porque siempre hay algo qué
                                        hacer.<br><br>
                                        Ica es famosa por sus campiñas, centros vitivinícolas; por la calidad de su
                                        vinos, encontrándose en esta zona los más importantes productores de vino.
                                        Merece destacar la fiesta de la vendimia de Ica, llevado a cabo con gran consumo
                                        de vino y cachina. En sus fértiles valles se cultiva el algodón, vid, tabaco y
                                        lino.
                                    </p>
                                    <img src="{{ asset('img/panoramico/huacachina-ica-peru-tour.webp') }}" width="100%"
                                        alt="Oasis de Huacachina" loading="lazy">
                                    <i>Foto: Oasis de Huacachina</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Historia y origen de la ciudad de Ica
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Los primeros habitantes se asentaron en la región Ica hace unos 9 000 años. El
                                        <strong>“hombre de Paracas”</strong>, descubierto en las Pampas de Santo
                                        Domingo, data del año 6
                                        870 a.C. constituyendo el segundo horticultor más antiguo del Perú. Dos
                                        importantes culturas pre inca se asentaron en la región, la cultura Paracas (600
                                        a.C. al 100 d.C.) y la cultura Nazca (100-800 d.C.). De la primera quedan los
                                        hermosos mantos de fibras de algodón y lana, conservados en sus colores y
                                        textura por las condiciones climáticas y el suelo de la zona, así como los
                                        fardos funerarios con momias en cuclillas que muestran el avance en la técnica
                                        no sólo de la momificación sino también de conocimientos avanzados de medicina y
                                        cirugía a través de la llamada trepanación. Estas momias fueron encontradas
                                        principalmente en Cerro Colorado, en donde tallaron la roca en forma de copa
                                        invertida para acondicionar subterráneamente cada fardo.<br><br>
                                        <strong>La ciudad de Ica</strong> es la capital de la Región (o departamento) de
                                        Ica, que se encuentra en el sur de Perú, ubicada en el río del mismo nombre a
                                        unos 300 km al sur de Lima. Esta ciudad fundada en 1563 por el conquistador
                                        español Gerónimo Luis de Cabrera (de origen andaluz), bajo el nombre de Villa de
                                        Valverde. Se trata de una zona con una extensa e importante pasado histórico, ya
                                        que los primeros pobladores se remontan a más de 10.000 años de
                                        antigüedad.<br><br>
                                        La ciudad fue el hogar de muchas culturas como por ejemplo la de los Paracas,
                                        Wari, Ica o Nasca.
                                        Luego de su fundación comenzaron a realizarse una buena cantidad de
                                        edificaciones religiosas de gran importancia, y ya en el siglo 20 se llevó a
                                        cabo la construcción del majestuoso Santuario de Luren, una de las más
                                        conocidas.<br><br>
                                        Ya acercándonos a datos más actuales, hasta el año 2005, en Ica había una
                                        población estimada de más de 219.856 habitantes; sin embargo, la ciudad sufrió
                                        grandes daños y la pérdida de un gran número de vidas durante el terremoto de
                                        Perú en el año 2007.
                                        Esta zona es una portante región agrícola, donde se cultivan uvas, algodón,
                                        espárragos, aceitunas y otros productos para consumo local y para la
                                        exportación. Es conocida por peruanos como la tierra del sol, y aunque se hacen
                                        presentes las 4 estaciones del año, el cálido clima seco hace que se sienta como
                                        en verano durante todo el año, algo que seguramente sabrán apreciar (y
                                        sobretodo, aprovechar) los turistas.
                                        En toda la región de Ica y sus alrededores los visitantes podrás visitar las
                                        fábricas de producción de Pisco, ya que esta región vendría a ser la fuente
                                        tradicional de Perú.<br><br>
                                        La ciudad además se encuentra muy bien comunicada ya que cuenta con varios
                                        canales de acceso, siendo la más conocida la carretera Panamericana. Por
                                        ejemplo, si quieres hacer el viaje desde la ciudad de Lima hasta Ica (como hemos
                                        dicho, habrá una distancia aproximada de unos 300 km), en tan sólo unas 4 horas
                                        de viaje en auto ya estarás llegando a destino.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Ica, cuna del Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        El Pisco nació en la región Ica a finales del siglo XVI, cuando los lugareños de
                                        la zona empezaron a producir una bebida transparente obtenido de la destilación
                                        de uvas, el mismo que embarcaban en el puerto de Pisco para distribuirlo a todas
                                        las zonas ribereñas del Virreinato del Perú. El investigador Emilio Romero
                                        apunta que en 1580 el pirata inglés Francis Drake incursionó en el puerto de
                                        Pisco y pidió un rescate por los prisioneros que tomó; los aldeanos para
                                        completar el rescate le pagaron con 300 botijas de Pisco. La primera
                                        identificación de la bebida como Pisco habría sido realizada en 1630 por el
                                        español Francisco López de Caravantes, al exponer en un manuscrito
                                        datado en 1630, que “el valle de Pisco, sigue siendo el más abundante de
                                        excelentes vinos de todo el Perú. Desde allí uno que compite con nuestro Jerez,
                                        el llamado “aguardiente Pisco”, por extraerse de la uva pequeña, es una de las
                                        bebidas más exquisitos que se bebe en el mundo.”<br><br>
                                    </p>
                                    <h3>Pisco y su comercialización</h3>
                                    <p>
                                        Sobre este punto, un importante aporte es el que hizo Enrique Witt, un
                                        comerciante alemán que llegó al Perú en 1824. En el diario que dejó sobre sus
                                        recorridos por nuestro país, anotó que, cuando estaba en el valle de Quilca
                                        (Arequipa), junto a sus compañeros tomaron “vino, pisco y chicha, una bebida
                                        fermentada hecha de maíz”.<br><br>

                                        Para corroborar más aún esta información, Witt, al llegar a Chincha Baja, acota
                                        que “Pisco es el puerto de Ica, y desde aquí se exporta todo el brandy o
                                        aguardiente del país que se produce y destila en ese lugar. De ahí proviene el
                                        nombre de pisco, palabra con la que se conoce el brandy en todo el Perú”.
                                        Además, describió los precios del pisco, así como su elaboración y transporte.
                                        “La comercialización que la gente de Ica realiza del brandy llamado pisco, es
                                        bastante considerable; proveen de este destilado a todos los departamentos del
                                        norte del Perú, mientras que el brandy o aguardiente producido en los valles de
                                        Majes, Vitor, Moquegua y otros, es consumido en el sur y exportado a
                                        Bolivia”.<br><br>
                                        <img src="{{ asset('img/galeria/la-comercializacion-del-pisco.webp') }}"
                                            width="100%" alt="Comercializacion del Pisco" loading="lazy">
                                        <i>Foto: Comercialización del Pisco</i><br><br>

                                        Por su parte, el marino sueco Carl Johan Skogman, que visitó el Perú a bordo de
                                        la Fragata “Eugenie”, enviada por su gobierno a dar la vuelta al mundo entre
                                        1851 y 1853, comentó sobre su paso por el puerto de Pisco: “allí se fabrica en
                                        gran escala un aguardiente que tiene mucha aceptación en toda la costa
                                        occidental y que se llama simplemente pisco”.
                                        El científico suizo, Jacob Von Tshudi, que recorrió nuestro país entre 1838 y
                                        1842, narró en su libro producto de sus investigaciones, sus impresiones de
                                        Pisco, indicado que este puerto “es solo una especie de llave para la gran
                                        ciudad de Ica”, y explica que lo que le ha dado importancia es la exportación de
                                        aguardientes que se realiza por él.
                                    </p>
                                    <h3>El pisco en la actualidad</h3>
                                    <p>
                                        El Perú cuenta con varias empresas dedicadas a la producción de pisco; algunas
                                        de ellas con la última tecnología, poseen equipos modernos y han contratado
                                        especialistas de alto nivel en los diferentes campos de la producción y
                                        comercialización. Esto ha permitido no solo recuperar el nivel que se tenía sino
                                        superarlo. A nivel educacional, destaca también la creación de instituciones
                                        como la primera Escuela de Ingeniería Enológica, y el Instituto del Vino y del
                                        Pisco que cuenta con la sala de cata más moderna del país; así como otras
                                        escuelas especializadas.<br><br>
                                        Actualmente, nuestra bebida bandera llega a 33 mercados de América, Asia y
                                        Europa. Estados Unidos es el principal con 46.2 % de participación, seguido de
                                        España con el 15 %.
                                    </p>
                                    <h3>¿Sabías que?</h3>
                                    <ul>
                                        <li>La denominación de Origen de Pisco es reconocida en 70 países y ha sido
                                            merecedor de innumerables premios en los más importantes certámenes de
                                            licores y bebidas espirituosas del mundo.
                                        </li>
                                        <li>A comienzos de 2019, el ministerio de Comercio Exterior y Turismo
                                            (Mincetur), lanzó la marca sectorial “Pisco, Spirit of Peru”, lema que
                                            acompañará a nuestra bebida de bandera en la conquista de los mercados del
                                            mundo.
                                        </li>
                                        <li>En los últimos años, las exportaciones de Pisco vienen mostrando un
                                            crecimiento sostenido. En el 2009 los envíos al exterior sumaron US$ 1.3
                                            millones y en el 2018 acumularon US$ 5.7 millones, creciendo en 320% en este
                                            periodo.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Principales Lugares Turísticos de Ica
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Líneas de Nazca</h3>
                                    <p>
                                        Son geoglifos que se ubican en el desierto de Nazca. A la fecha no se conoce el
                                        método que utilizaron las antiguas poblaciones para crear estas pictografías de
                                        gran magnitud. Las líneas de Nazca se pueden visualizar desde miradores o al
                                        contratar el servicio de sobrevuelos por la zona.
                                        Llaman la atención entre los geoglifos del colibrí, el mono con nueve dedos, y
                                        una extraña figura conocida como el hombre búho que algunos suelen identificar
                                        con la silueta de un astronauta.
                                    </p>
                                    <img src="{{ asset('img/galeria/Overflight-of-the-Nazca-lines.webp') }}" loading="lazy"
                                        width="100%" alt="Sobrevuelo en las lineas de Nazca">
                                    <i>Foto: Sobrevuelo en las lineas de Nazca</i><br><br>
                                    <h3>Reserva Nacional de Paracas</h3>
                                    <p>
                                        Es un área natural de más de tres mil hectáreas. Es la única área protegida del
                                        Perú que cuenta con un ecosistema marino. Se puede acceder a la reserva y
                                        navegar por su mar para conocer la diversidad de especies que la habitan. Por
                                        bote se puede conocer las Islas Ballestas y San Gallán que forman parte de este
                                        atractivo.
                                    </p>
                                    <h3>La Huacachina</h3>
                                    <p>
                                        Es un oasis en medio del desierto. Se pueden practicar diferentes actividades en
                                        ella, como navegar en bote por la laguna. También se pueden dar paseos en
                                        tubulares y animarse a deslizarse en tablas de sandboard por el desierto.
                                    </p>
                                    <h3>Tambo Colorado</h3>
                                    <p>
                                        Son restos arqueológicos incaicos. Recibe el nombre de “colorado” por el
                                        predominio del rojo en sus estructuras. Su grado de conservación es
                                        impresionante y permite comprender cómo vivieron los incas de las costas
                                        peruanas. Tambo Colorado se sitúa en Pisco.
                                    </p>
                                    <h3>Cañón de los perdidos</h3>
                                    <p>
                                        El atractivo turístico de Ica que se descubrió en 2011. El cañón tiene 600
                                        metros de profundidad y cuenta en su parte más profunda con pequeñas lagunas. A
                                        aquel se llega tras 2 horas de recorrido desde la capital de Ocucaje. Ha sido
                                        comparado con el Cañón del Colorado en EE.UU.
                                        En Ica existen muchos lugares más para conocer. En la misma ciudad se pueden
                                        visitar atractivos arquitectónicos e históricos como la plaza de armas. También
                                        es posible planear un tour por los principales viñedos de la región y degustar
                                        su licor bandera: el pisco. Si se quiere conocer los misterios de Ica, una
                                        visita a Cachiche también es una buena opción, las “brujas” de Cachiche te
                                        contarán la leyenda de su pueblo y se animarán a leerte la suerte.
                                    </p>
                                    <img src="{{ asset('img/galeria/canon-de-los-pasos-perdidos.webp') }}" width="100%"
                                        loading="lazy" alt="Cañon de los perdidos, Ica">
                                    <i>Foto: Cañon de los perdidos</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Actividades para realizar en Ica
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Lo primero es visitar el centro de la ciudad, aquí podrás recorrer las rústicas
                                        calles y apreciar un poco de su historia plasmada en la arquitectura colonial.
                                        Al llegar a la <strong>Plaza de Armas</strong> podrás visitar el Palacio
                                        Municipal con sus
                                        hermosos portales, en el segundo piso puedes apreciar el Salón Consistorial
                                        donde podrás ver figuras ornamentales hechas de madera que representan las
                                        estaciones del año.<br><br>
                                        La Catedral también está en la Plaza de Armas justo en el cruce de las calles
                                        Bolívar y Libertad, construida en el siglo XVIII ha sufrido varias reparaciones
                                        por lo cual su fachada ha ido cambiando. También se puede conocer el
                                        <strong>Museo Regional</strong> donde podrás ver restos arqueológicos de las
                                        distintas culturas que habitaron la zona, además de lienzos y muebles de la
                                        época virreinal y republicana.<br><br>

                                        Por otro lado el <strong>Museo de Piedras</strong> también es un sitio
                                        interesante donde se
                                        expone piedras grabadas en las cuales se puede apreciar la vida que llevaban los
                                        antiguos pobladores de la región. Luego de dar un paseo por el centro de la
                                        ciudad de Ica se recomienda visitar la Laguna de la Huacachina un bello oasis
                                        que está ubicado a 5 Km. al sur oeste de la ciudad de Ica al cual se puede
                                        llegar en auto en solo 10 minutos.
                                        En la <strong>Huacachina</strong> si le gusta la aventura y el deporte se
                                        recomienda hacer sandboarding, disfrutará de un grato momento deslizándose por
                                        la arena, también puede acceder a los carros tubulares que lo llevaran por un
                                        paseo en las dunas a alta velocidad.<br><br>
                                        Otro lugar majestuoso para visitar es la <strong>Reserva Nacional de
                                            Paracas</strong> donde viven
                                        lobos marinos, pingüinos de Humboldt, delfines, flamencos y gran cantidad de
                                        aves. Durante el paseo por la reserva se puede observar el impresionante
                                        Candelabro el cual lo dejará maravillado sobre todo por el enigma que encierra,
                                        otras obras de la naturaleza como la Catedral y las lindas playas también
                                        estarán a la vista.
                                    </p>
                                    <h3>La Ruta del Pisco</h3>
                                    <p>
                                        Ica cuenta con más de <strong>85 bodegas artesanales de vino y pisco</strong>
                                        donde se elaboran
                                        estas bebidas con una alta calidad, si te gusta vivir una experiencia diferente
                                        esta ruta sin duda es para ti.
                                        Podrás estar en el mismo sitio donde se elaboran las bebidas, desde recorrer las
                                        plantaciones de uvas hasta realizar una pequeña cata de las distintas bebidas
                                        que se elaboran en el lugar.<br><br>
                                        A continuación, una lista de algunas de las principales bodegas:
                                    </p>
                                    <ul>
                                        <li>La Caravedo de Ica</li>
                                        <li>Bodega artesanal Lazo</li>
                                        <li>El Catador</li>
                                        <li>Bodega artesanal Lovera</li>
                                        <li>Vista Alegre</li>
                                        <li>Bodega Ocucaje</li>
                                        <li>Bodega Tacama</li>
                                        <li>Santiago Queirolo</li>
                                    </ul>
                                    <h3>Festividades importantes de Ica</h3>
                                    <ul>
                                        <li><strong>Febrero:</strong> Fiesta de los carnavales de la Candelaria. Del 13
                                            al 15 de febrero
                                            Fiesta de la Sirena.</li>
                                        <li><strong>Marzo:</strong> Del 8 al 18 de marzo Festival Internacional de la
                                            Vendimia. Semana
                                            Santa fecha movible.</li>
                                        <li><strong>Abril:</strong> Semana Santa fecha movible.</li>
                                        <li><strong>Mayo:</strong> Fiesta de las Cruces Fechas diversas. Segunda semana
                                            de mayo Semana
                                            Nacional del Pisco.</li>
                                        <li><strong>Septiembre:</strong> Última semana de septiembre Semana turística de
                                            la ciudad.</li>
                                        <li><strong>Octubre:</strong> Primer jueves y tercer lunes de octubre Festividad
                                            del Señor de
                                            Luren.</li>
                                        <li><strong>Noviembre:</strong> 01 de noviembre Fiesta de Todos los Santos.</li>
                                        <li><strong>Diciembre:</strong> 25 de diciembre Paseo de los Negritos.</li>
                                    </ul>
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
