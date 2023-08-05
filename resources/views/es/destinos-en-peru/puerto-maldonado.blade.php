@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="puerto">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">El corazón de la selva peruana</h1>
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
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Madre de Dios</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Madre de Dios"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Madre de Dios, tierra de la biodiversidad
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Esta región, ubicada al sureste del Perú, guarda a la naturaleza en su estado
                                        más puro. Árboles que se abrazan entre sí, mientras que manadas de monos los
                                        recorren velozmente. Y mientras aprecias este espectáculo único, escuchas de
                                        fondo el melodioso canto de los guacamayos que anidan en esta zona.
                                        Lo más probable es que tu primera parada sea en la ciudad de Puerto Maldonado,
                                        la capital de Madre de Dios. Aquí, encontrarás una extensa oferta hotelera para
                                        que escojas el lugar ideal de acuerdo a tus necesidades. aunque es preferible
                                        tener un hospedaje ya reservado desde antes de llegar a este destino. Una vez
                                        instalado Puerto Maldonado te ofrece la oprtunidad de conocer los lugares más
                                        hermosos de la selva peruana.
                                    </p>
                                    <h3>Donde la biodiversidad se siente:</h3>
                                    <p>
                                        Todo lo mencionado puede haberte impactado. Pero, honestamente, aún no ves lo
                                        mejor de Madre de Dios, te esperan tres santuarios enormes, repletos de magia y
                                        naturaleza. La tercera región más grande del Perú, guarda en su territorio al
                                        Parque Nacional del Manu, reconocido como zona núcleo de la Reserva de Biosfera
                                        por la Unesco (1977) y declarado Patrimonio Natural de la Humanidad
                                        (1987).<br><br>

                                        Este espacio natural no solo es un espectáculo para la vista. También es
                                        considerado un foco de concentración de especies de flora y fauna, muchas de
                                        ellas únicas. Por ejemplo, en su territorio vive el ave nacional del Perú, el
                                        famoso gallito de las rocas. Incluso, en su espacio aún habitan poblaciones
                                        agrupadas en 30 distintas comunidades campesinas, que aún practican técnicas
                                        milenarias.<br><br>
                                        <img src="{{ asset('img/galeria/biodiversidad-de-la-selva-peruana-madre-de-dios.webp') }}"
                                            width="100%" alt="Biodiversidad de la selva peruana - Madre de Dios"
                                            loading="lazy">
                                        <i>Biodiversidad de la selva Peruana</i><br><br>

                                        Asimismo, están a tu disposición la Reserva Nacional de Tambopata y el Parque
                                        Nacional Bahuaja Sonene. El primero de los mencionados es descrito como un lugar
                                        paradisiaco, donde la naturaleza se fusiona contigo tras cada paso que das. Esta
                                        reserva natural protegida es considerada globalmente como una de las de mayor
                                        diversidad biológica. A su vez, no solo es un viaje necesario para los amantes
                                        de la biología, también lo es para los aventureros: viaja hacia los lagos
                                        Sandoval y Sachavacayoc, donde puedes pasear en lancha y presenciar las collpas
                                        de guacamayos, chunchos y colorados, en su estado más puro.<br><br>

                                        El no tan explorado Parque Nacional Bahuaja Sonene alberga una gran
                                        biodiversidad: encontrarás cientos de mamíferos, reptiles y peces, casi un
                                        millar de especies de aves y más de 20 mil especies de vegetales. Es el hogar de
                                        especies increíbles como el ciervo de los pantanos, el lobo de crin, el lagarto
                                        negro y el oso hormiguero gigante.<br><br>

                                        Si quieres conectarte con la naturaleza, Madre de Dios es el lugar indicado para
                                        convertirte en uno con el ambiente.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Reseña histórica de Puerto Maldonado
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        El departamento de Madre de Dios fue creado el 26 de diciembre de 1912 a partir
                                        de los territorios de Cusco y Puno. Recibe su nombre del río Madre de Dios, de
                                        cuya cuenca son tributarios la mayor parte de los ríos de la región.
                                        Los petroglifos en el río Shinkebeni (Petroglifos de Pusharo), indican una muy
                                        antigua presencia de seres humanos. Se cree que los Arahuacos (o sus
                                        antecesores) llegaron en migraciones, y de ellos se derivaron muchas etnias.
                                        Algunas tribus, como la machiguenga, sobreviven hasta nuestros días. Lo que hoy
                                        se conoce como Madre de Dios, formaba parte del antiguo Imperio inca, en la
                                        región conocida como Antisuyo. Los historiadores coinciden que la conquista de
                                        esta región fue difícil para los Incas, pues debieron enfrentar a tribus
                                        aguerridas y conocedoras de la zona. En la zona de la cuenca del río Nistron se
                                        encuentran también las ruinas de Mameria, asentamiento Inca, que fue descubierto
                                        en 1979.<br><br>
                                        Durante la colonia ingresaron expediciones españolas con resultados trágicos
                                        para los europeos. Al fin, en 1861, el coronel Faustino Maldonado exploró todo
                                        el territorio y en 1890; Carlos Fermín Fitzcarrald descubrió un istmo que unía
                                        las cuencas de los ríos Ucayali y Madre de Dios. Durante las siguientes décadas
                                        numerosos aventureros y comerciantes explotaron los bosques, ávidos de caucho y
                                        oro. A partir de 1915, ante la persistencia de los misioneros dominicos, las
                                        tribus locales empezaron a aceptar la civilización. Esto no siempre ha sido
                                        bueno para ellas, ya que tribus como los harakmbet han abandonado muchos de sus
                                        instrumentos tradicionales dependiendo en gran medida de los habitantes de la
                                        ciudad. Sin embargo, aún hoy existen grupos en total aislamiento físico y
                                        cultural.<br><br>

                                        Durante el presente siglo, ha existido una fuerte presión sobre los ecosistemas
                                        por la explotación de los recursos naturales. En especial por parte de la
                                        minería de oro (en su mayoría ilegal).

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Parque Nacional del Manu
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        La Amazonía peruana nunca se muestra tan abiertamente como en el Parque Nacional
                                        del Manu, que es considerado Patrimonio Natural de la Humanidad.<br><br>
                                        En el Manu es común encontrarse la naturaleza en su forma más pura, un promedio
                                        de 221 especies de mamíferos, miles de aves y mucha diversidad respecto al clima
                                        desde la selva baja tropical hasta las frígidas punas de más de 4000 m.s.n.m. En
                                        el Manu viven poblaciones nativas que conservan sus tradiciones, algunas están
                                        completamente aisladas de la civilización de manera voluntaria.<br><br>
                                        El manu está ubicado al este de la cordillera oriental de los Andes y comprende
                                        parte de los departamentos de Cusco y Madre de Dios. Se puede llegar por aire o
                                        por tierra. Lo más recomendable es tomar los servicios organizados y autorizados
                                        de una agencia de viajes organizada como Pacha Mama Spirit.
                                    </p>
                                    <img src="{{ asset('img/galeria/Macaws-of-the-peruvian-jungle.webp') }}" width="100%"
                                        loading="lazy" alt="Guacamayos del manu">
                                    <i>Guacamayos del Paqrue Nacional del Manu</i><br><br>
                                    <h3>Descripción del Parque Nacional del Manu</h3>
                                    <p>
                                        El Manu es el único lugar del mundo que se encuentran bajo protección tres
                                        distintos ecosistemas que están diferenciados por:
                                    </p>
                                    <ul>
                                        <li>La puna, zona de gran altitud y escasez de vegetación, similar a la
                                            tundra, en la que crece un tipo de hierba amarillenta denominada ichu,
                                            salpicada de lagos de un azul profundo y poblada de llamas de orejas chatas
                                            y peludas.</li>
                                        <li>El bosque nuboso, un mundo de misterio siempre bañado de intensas nieblas
                                            y poblado de gallos salvajes de un púrpura intenso y llamativo, osos de
                                            anteojos y abundantes helechos que cuelgan de los árboles como interminables
                                            y tupidos muros.</li>
                                        <li>Zonas bajas de selva tropical, pobladas de enormes caimanes negros, lobos
                                            de río o nutrias gigantes, trece especies distintas de mono y de más de mil
                                            variedades de pájaros (el 10% de las que hay en todo el mundo). </li>
                                    </ul>
                                    <p>
                                        En las zonas más altas la temperatura oscila entre los 3ºC y 6ºC, mientras que
                                        en la parte más baja el promedio anual llega hasta aproximadamente 24ºC.
                                    </p>
                                    <h3>Atractivos turísticos del Manu</h3>
                                    <p>
                                        La Reserva Nacional del Manú siempre ha gozado de protección gracias a lo
                                        difícil que es llegar a ella, además de contar con la presencia de distintas
                                        tribus indígenas. Actualmente habitan en el Manú cuatro grupos étnicos
                                        distintos, dos de ellos permanecen todavía aislados de cualquier contacto con la
                                        civilización. Tiene un área de 1 716 295.22 hectáreas. De una extensión
                                        equivalente a la mitad de Suiza, el Manú es probablemente la zona protegida más
                                        rica en especies de todo el planeta.
                                    </p>
                                    <h3>Flora del Manu:</h3>
                                    <p>
                                        La gran variación de pisos altitudinales permite la existencia de gran variedad
                                        de especies y formas de plantas, estimándose entre 2000 a 5000 especies de
                                        plantas con flores. A modo referencial, en el bosque de nubes se han registrado
                                        179 especies de orquídeas.
                                    </p>
                                    <h3>Fauna del Manu</h3>
                                    <p>
                                        La gran diversidad de ecosistemas ha permitido el desarrollo de una de las más
                                        grandes muestras de diversidad de fauna en el mundo. El Parque Nacional del Manú
                                        alberga una gran variedad de aves, mamíferos, reptiles y anfibios, al igual que
                                        invertebrados. En mamíferos, se ha identificado 200 especies (alrededor del 40%
                                        de los mamíferos de todo el Perú). Las aves constituyen una población sumamente
                                        importante y de una variedad admirable que sobrepasa las 1000 especies.<br><br>
                                        Al recorrer algunas zonas aptas para los turistas, podrás descubrir un gran
                                        número de reptiles, como los caimanes de seis metros de largo, o mamíferos
                                        terrestres y marinos, hasta peces y anfibios.<br><br>
                                        Entre los mamíferos que habitan en el Manu destaca el mono tití, considerado el
                                        más pequeño del mundo. Estos primates suelen ser muy amistosos con los
                                        visitantes y hasta realizan una que otra travesura.
                                        Otra de las especies más queridas y buscadas por los turistas es la nutria
                                        gigante o lobo de río. Este divertido y juguetón mamífero lamentablemente se
                                        encuentra en peligro de extinción. Anteriormente, el lobo se encontraba en
                                        prácticamente todos los ríos de la cuenca amazónica. Ahora, la mayor parte de
                                        los que quedan con vida se encuentran dentro del Manu.
                                    </p>
                                    <h3>Restos arqueológicos del Manu</h3>
                                    <p>
                                        El Manu no solo resalta por su encanto natural, sino también por sus valiosos
                                        restos arqueológicos. En él se ha encontrado reliquias y vestigios, algunos aún
                                        en estudio, que demuestran la presencia humana en este territorio desde tiempos
                                        muy antiguos. Los más conocidos son los petroglifos de Patiacolla, considerados
                                        los más grandes del Perú. Otro sitio arqueológico importante en esta zona son
                                        las ruinas de Mameria.
                                    </p>
                                    <h3>La mayor biodiversidad del mundo</h3>
                                    <p>
                                        Reconocida como el área protegida de mayor diversidad biológica del mundo por la
                                        Unesco, el Parque Nacional del Manu alberga más de mil especies de aves y cerca
                                        de doscientas de mamíferos. Gran parte de esta abundante fauna se debe a su
                                        privilegiada ubicación: abarca prácticamente todos los pisos altitudinales,
                                        desde la puna cusqueña hasta la planicie amazónica.
                                    </p>
                                    <h3>Un paraíso de aves</h3>
                                    <p>
                                        Las más de mil especies de aves censadas en el Manu representan al 25 % del
                                        total que habitan en América del Sur y alrededor del 10 % de todas las especies
                                        del mundo, de acuerdo con el Programa de Áreas Protegidas de Naciones Unidas.
                                        Por ello, el parque es uno de los lugares más recomendables para los aficionados
                                        a la observación de aves.<br><br>
                                        Por su vistosidad, los loros y los guacamayos son las especies más preciadas y
                                        también las más amenazadas. El guacamayo rojo, de gran tamaño, es una de las
                                        aves más hermosas que se pueden encontrar en este lugar: posee una gran cabeza
                                        de plumas anaranjadas combinadas con el azul y verde de sus alas y cola. Entre
                                        los loros destaca el de cabeza azul, de solo treinta centímetros de longitud.
                                    </p>
                                    <h3>Hogar de los nativos</h3>
                                    <p>
                                        Las cuencas de los ríos Alto Madre de Dios y Manú son áreas de asentamiento
                                        tradicional de diversos grupos indígenas que en su mayoría se mantienen
                                        voluntariamente aislados, y que pertenecen a familias lingüísticas diferentes..
                                        Los más conocidos son los machiguenga, piro, yora y yaminahua. La relación que
                                        mantienen estos pobladores con la modernidad es muy reducida, incluso algunos de
                                        ellos jamás han tenido contacto con el mundo exterior. La gran mayoría de ellos
                                        se organiza en comunidades nativas; otros viven en aislamiento voluntario,
                                        aparentemente rechazando todo contacto con la sociedad moderna.<br><br>
                                        La actividad económica de estas comunidades se limita a la caza, la pesca, la
                                        recolección y a una incipiente agricultura. De esta manera, mantienen sus
                                        tradiciones ancestrales y estilo de vida silvestre puesto que son las únicas
                                        personas autorizadas para explotar los recursos naturales que brinda el parque.
                                        Actualmente, son cerca de 50 mil habitantes distribuidos en aproximadamente
                                        treinta comunidades.
                                    </p>
                                    <img src="{{ asset('img/galeria/Centro-amaznico-de-antropologia.webp') }}"
                                        width="100%" loading="lazy" alt="Centro amazonico de antropologia">
                                    <i>Centro amazónico de antropoligía y Aplicación práctica</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Principales lugares turísticos de Madre de Dios
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Parque Nacional del Manu</h3>
                                    <p>
                                        Ubicado entre las provincias de Paucartambo y la Convención en el departamento
                                        de Cusco, este parque contiene un total de 1.884.200 hectáreas de pura
                                        naturaleza y agradable ambiente, en el mismo sitio viven un sinfín de aves
                                        coloridas de variables especies, el sitio se presta para poder tomar fotos y
                                        grabar videos de todo tipo por la belleza con la que cuenta.<br><br>

                                        Es el segundo parte nacional del país con la mayor cantidad en especies de aves,
                                        más de 860 en total las cuales son protegidas y resguardadas. Los turistas
                                        pueden acampar en el parque, quedando prohibido las fogatas y los restos de
                                        basuras en la zona. Es imprescindible que las personas lleven ropa cómoda,
                                        repente de insecto y agua potable suficiente para l trayecto.<br><br>

                                        La entrada al parque es totalmente gratis, no es necesario la cancelación o el
                                        pago para disfrutar de un ambiente ameno y único de la provincia. Existen
                                        excursiones con guías capacitados que conocen los lugares más hermosos del mismo
                                        parque y las sorpresas que tiene para sus visitantes.
                                    </p>
                                    <h3>2. Santuario nacional de las Pampas del Heath</h3>
                                    <p>
                                        Comprende un total de 102.109 hectáreas de pura belleza y grandes territorios
                                        naturales, en donde existen muchas especies en fauna y flora, se considera un
                                        santuario sagrado por los animales que ahí habitan y su importancia para el
                                        país. Entre ellos el ciervo del pantano, habitado solamente en este santuario
                                        único en todo el Perú.<br><br>

                                        Aparte del ciervo, se podrá gozar la gran cantidad de aves que ahí hacen vida,
                                        entre ellas las famosas guacamayas coloridas, según cuenta la historia, cuando
                                        las personas son tocadas por las guacamayas, las almas benditas del santuario le
                                        ofrecen la bendición y la protección a través del ave, que para ellos es
                                        emblemática.<br><br>

                                        El santuario nacional de las pampas del Hearth está disponible en todo momento
                                        del año para quienes lo deseen conocer, como consejo para los turistas es
                                        indeseable ropa cómoda, calzado ligero, agua potable suficiente, repelente para
                                        insectos y una buena cámara fotográfica para captar la belleza única del lugar.
                                        Totalmente gratis, no requiere de pago de entrada para el disfrute de dicho
                                        santuario.
                                    </p>
                                    <h3>3. Zona reservada del Tambopata Candamo</h3>
                                    <p>
                                        Como su nombre lo indica, es una zona reservada en donde su única llegada es a
                                        través de vías fluviales, o por la carrera del Maldonado. Tiene un total de
                                        1.400.000 hectáreas de gran impacto y belleza, esperando la llegada de los
                                        turistas para dejarlos impactados con todas las sorpresas con las que la zona
                                        reservada cuenta.<br><br>
                                        Se considera como el paraíso de las mariposas, ya que cuenta en todo su
                                        territorio con un total de 1.300 especies de mariposas. Es la zona de todo el
                                        Perú con más diversidad de animales en sus habitad natural, jaguares, caimanes,
                                        lobos de ríos, nutrias capibaras entre otros, todos y cada uno de estos son
                                        resguardados por la nación. La zona reservada de Tambopata Candamo se encuentra
                                        disponible durante todo el año, existen organizaciones privadas que permiten con
                                        permiso de la nación, la entrada privada al área y hacer turismo sin problema
                                        alguno, es indispensable llevar ropa y calzado adecuado, queda prohibido hacer
                                        fogatas y depositar restos de basura en el lugar.
                                    </p>
                                    <img src="{{ asset('img/galeria/Lugares-turísticos-de-Puerto-Maldonado-Reserva-Tambopata-Candamo.webp') }}"
                                        width="100%" loading="lazy" alt="Zona reservada del Tambopata Candamo">
                                    <i>Zona reservada del Tambopata Candamo</i><br><br>
                                    <h3>4. La Cascada de Baltimore</h3>
                                    <p>
                                        Para los amantes del agua, Madre de Dios tiene una sorpresa impetuosa y mágica
                                        como lo es la cascada de Baltimore, se encuentra a unos 85 kilómetros de Puerto
                                        Maldonado, para lograr acceder y ver a la cascada es necesario viajar en lancha
                                        por un tiempo aproximado de 4 a 5 horas contra corriente del rio
                                        Tambopata.<br><br>

                                        Pero, el tiempo de espera valdrá la pena, al llegar se gozará de una imponente
                                        caída de agua contemplando la belleza de la cascada, dando una vista similar a
                                        la caída de agua del cielo, se sentirá la frescura del agua y el agradable
                                        ambiente que proporciona.<br><br>

                                        En épocas de lluvia el caudal crece aumentando el flujo de agua de la caída,
                                        notándose aún más hermoso el paisaje, se le aconseja a los turistas llevar
                                        cámaras a prueba de agua para sí poder captar imágenes únicas y perpetuar la
                                        visita a la cascada, como también al paisaje en el trayecto por el mismo río.
                                    </p>
                                    <h3>5. La comunidad nativa de Palma Real</h3>
                                    <p>
                                        La comunidad de Palma Real es un sitio único y ejemplar de la zona, ubicado al
                                        borde del río de Madre de Dios a unos aproximados de 45 kilómetros del puerto
                                        Maldonado, se podrá llegar al sitio. Lo ejemplar de esta zona es la manera en
                                        como están construidas las casas totalmente habitables. Elevadas por encima del
                                        río con parantes de madera que proporcionan una estabilidad inigualable.<br><br>

                                        La comunidad de Palma Real es un sitio que a pesar de su ubicación, cuenta con
                                        buena económica gracias al comercio que ahí se maneja, los turistas tienen la
                                        posibilidad de comprar artesanía y gozar de platos típicos de la localidad. A su
                                        vez, se pueden encontrar prendas de vestir, artículos propios de la área y demás
                                        productos que pueden ser adquiridos para recuerdo del viaje.<br><br>

                                        Las artesanías de lugar levan la identidad de la zona como también su valor, se
                                        pueden ver la elaboración de arcos, flechas, collares de semillas y todo tipo de
                                        tejido en base a fibras de origen vegetal, sin duda alguna, la Comunidad De
                                        Palma Real es mágica, autónoma, hermosa y digna de visitar para conocer sus
                                        costumbres, valores, economía y estilo de vida.
                                    </p>
                                    <h3>6. Comunidad de Miraflores</h3>
                                    <p>
                                        La comunidad de Miraflores se encuentra a unos 50 kilómetros del puerto
                                        Maldonado, los primero 30 kilómetros se deben recorrer en lancha por el río
                                        Hearth, a medida que van pasando los kilómetros se puede notar como el paisaje
                                        cambia de una manera única, el contraste de la naturaleza con el río y el cielo
                                        es muy mágico.<br><br>

                                        Esta comunidad tiene una de las más importantes características de todas, siendo
                                        la única que a pesar del tiempo conserva su cultura tan intacta que sorprende la
                                        forma en cómo habitan de una manera tranquila. Los lugareños siempre buscan que
                                        las personas y los turistas que no pertenecen a ellos se sientan cómodos y
                                        logren disfrutar de un ambiente totalmente nuevo para ellos.<br><br>

                                        Para llegar a la comunidad solo es necesario un total o menos de dos horas, por
                                        ende es indispensable y como aconsejo para los viajeros, que lleven protector
                                        para insectos, ropa y calzado adecuados para el viaje como también agua potable,
                                        se considera un falta de respeto a la comunidad y al lugar el botar basura en
                                        las áreas verdes, por ende es un aspecto muy importante de cuidar.<br><br>

                                        Perú siempre protegerá sus comunidades y todo lo que preserve la identidad y las
                                        culturas de los antepasados. Conocer un poco de esta pequeña pero valiosa
                                        población, es ver la manera en como los peruanos nativos hacían vida con total
                                        tranquilidad proveyéndose de la naturaleza y todo lo que los rodea. Esta
                                        comunidad es de las más sagradas para la nación.
                                    </p>
                                    <h3>7. Lago Sandoval</h3>
                                    <p>
                                        El lago Sandoval es un lugar que ha sido formado gracias a un estrangulamiento
                                        de uno de los drenajes o meandros del río madre de Dios. Para llegar al sitio
                                        final hay que ir en lancha a unos 25 kilómetros en el mismo sentido que el río,
                                        pasado el tiempo se requiere caminar por una trocha entre los bosques. Es
                                        importante que el turista o visitante tenga protector contra los insectos por
                                        ser un tramo muy frondoso.<br><br>

                                        Los que hace bonito el trayecto a la visita del lago Sandoval es el pasaje y su
                                        extensa cantidad de orquídeas, todas y cada una de ellas intocables, pues se
                                        consideran sagradas para el lugar. Según cuenta la historia, los dioses
                                        decidieron bendecir el lugar dándoles algo de gran belleza e imponencia, así
                                        pensaron en adornar los árboles de baja estatura con una flor preciosa y única
                                        naciendo la orquídea. Queda totalmente prohibido arrancarlas de sus
                                        asientos.<br><br>

                                        Una vez en el lago, es permitido la pesca como deporte en sus aguas, los peces
                                        encontrados se puede llevar sin problema alguno, e inclusive poder cocinarlos
                                        con una simple fogata en las orillas del mismo lago, siendo importante que al
                                        final de todo, el fuego sea apagado para evitar problemas con las autoridades.
                                        Los turistas también pueden acampar durante el día y disfrutar del majestuoso
                                        atardecer que les ofrecerá el lago durante la puesta del sol.
                                    </p>
                                    <h3>8. Puerto Maldonado</h3>
                                    <p>
                                        Esta zona es la capital de la Jurisdicción en la Tambopata y la conocida comarca
                                        de Madre de Dios. Se trata de una localidad sumamente atractiva y muy saludada
                                        en el bosque peruano. De igual manera, tiene su puerto como eje fluvial para
                                        diversas embarcaciones en el área tropical.<br><br>

                                        El sitio se examina como eje para la biodiversidad, donde recalca el clima alto.
                                        Además, cuenta con un gran número de espacios de mucho interés para explorar,
                                        desde el Parque de la Juventud por respeto a César Vallejo, el Serpentario,
                                        exhibiciones en Mariposario, y otros.
                                    </p>
                                    <h3>9. Reserva Nacional de Tambopata</h3>
                                    <p>
                                        La Reserva Nacional es localizada a tres horas del hermoso río Madre de Dios, o
                                        a cuarenta y seis kilómetros de distancia del Puerto Maldonado. Esta se acreditó
                                        como una zona natural predilecta gracias a su belleza natural, la flora y fauna
                                        tan exuberante, la gran vida silvestre y el área territorial que
                                        comprende.<br><br>

                                        En la Reserva se cuentan cerca de 530 las diversidades en aves, 205 los
                                        prototipos de peces, 1082 los géneros de mariposas, y muchos géneros de especies
                                        más. Los mamíferos que resaltan aquí son la nutria gigante y el guacamayo.
                                        Aparte de algunas colectividades nativas.<br><br>

                                        Es seguro de que no querrás irte ni un instante de todos estos lugares en Madre
                                        de Dios mientras los exploras.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Calendario Festivo en Madre de Dios
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>23 de enero:</strong> Día de la artesanía</li>
                                        <li><strong>Febrero:</strong> Carnaval de comparsas</li>
                                        <li><strong>Marzo - Abril:</strong> Semana Santa</li>
                                        <li><strong>1-6 mayo:</strong> Fiesta de las cruces religiosas</li>
                                        <li><strong>3 de mayo:</strong> Fiesta de la cruz</li>
                                        <li><strong>24 de mayo:</strong> La virgen de Chapi</li>
                                        <li><strong>24 de junio:</strong> Fiesta de San Juan</li>
                                        <li><strong>25-29 de junio:</strong> Fiesta de San pedro y San pablo</li>
                                        <li><strong>28-29 de junio:</strong> Fiesta del caserío de Cachuela</li>
                                        <li><strong>20 de julio:</strong> Semana turistica de Madre de Dios</li>
                                        <li><strong>26-30 de julio:</strong> Feria agropecuaria, industrial y artesanal
                                        </li>
                                        <li><strong>15 de agosto:</strong> Chachapoyas</li>
                                        <li><strong>17 de octubre:</strong> Feria de alimentos nativos y artesanía</li>
                                        <li><strong>6 de noviembre:</strong> Fiesta de la comunidad nativa de Palma Real
                                        </li>
                                        <li><strong>26 de diciembre:</strong> Aniversario de la creación política de
                                            Madre de Dios (1912)</li>
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
