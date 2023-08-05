@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="puno">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Puno, capital del folklore</h1>
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
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Puno</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"PUNO"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Capital del folklore peruano
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <strong>En efecto, es necesario precisar que la identidad de un país es
                                        compleja,</strong> y se
                                    manifiesta a través de diversas formas. La región Puno fue reconocida oficialmente,
                                    el 7 de noviembre de 1985, como la Capital del Folclor peruano, en mérito a sus más
                                    de 350 danzas que conjugan tradiciones ancestrales y mestizaje expresadas en baile,
                                    música y arte interpretados con alegría y sentimiento desbordante que han cruzado
                                    fronteras dentro y fuera del Perú.<br><br>
                                    Por 18 días la ciudad de Puno, que esta a orillas del Lago Titicaca, ubicada
                                    a 3.870 m.s.n.m, se convierte en la capital folklórica no solo de Perú, si no
                                    también de
                                    América, gracias a la fiesta de la VIRGEN DE LA CANDELARIA que se celebra cada año,
                                    en ella se concentran más de 200 bandas de músicos y danzantes para celebrar a la
                                    Mamacha Candelaria. Durante los nueve primeros días los mayordomos (encargados de
                                    liderar los festejos) arreglan el templo y celebran misas, banquetes y juegos
                                    pirotécnicos. El día central, 2 de febrero, la Virgen es conducida por la ciudad en
                                    una colorida procesión; detrás de ella, guardando cuidadosa jerarquía, desfilan
                                    curas, acólitos, fieles, cristianos y paganos: es el momento de la presentación de
                                    conjuntos de músicos y danzantes que bailan por toda la ciudad.<br><br>
                                    La fiesta está relacionada con los ciclos agrarios prehispánicos de la siembra y la
                                    cosecha, así como con la actividad minera de la región, y es producto de la mezcla
                                    entre la respetuosa alegría aymara y la gravedad ancestral quechua. La danza de los
                                    diablos o diablada, supuestamente soñada por unos mineros atrapados en un socavón
                                    que en su desesperación se encomendaron a la Virgen de la Candelaria, es la
                                    principal de las comparsas folklóricas. Los danzantes hacen sus ofrendas a la tierra
                                    <strong>(Pachamama)</strong> tocando zampoñas, vestidos con disfraces muy vistosos y
                                    casi siempre
                                    enmascarados. Las máscaras más impresionantes, por su efecto terrorífico, son las de
                                    venados con largos cuernos retorcidos asociados al demonio y, también, al Jacancho o
                                    dios de los minerales. En el cacharpari o despedida, las comparsas que van llenando
                                    las calles se dirigen finalmente al cementerio para rendirle culto a los
                                    muertos.<br><br>
                                    <img src="{{ asset('img/galeria/PUNO-PERU-CANDELARIA-VIRGIN.webp') }}" width="100%"
                                        alt="Danza Diablada Puno" loading="lazy">
                                    <i>Foto: Virgen de la Candelaria en procesión</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Reseña histórica de Puno
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Antes de la llegada de los españoles, <strong>la ciudad de Puno</strong>, esta
                                        era una aldea, tenía
                                        como escenario la Bahía del <strong>Lago Titikaka,</strong> formaba una
                                        población marginal
                                        localizada entre los linderos de los territorios de los Kollas (Quechuas) al
                                        norte y los Lupacas (Aymaras) al sur.<br><br>
                                        A fines del Siglo XVI el sur de Puno, estuvo bajo el gobierno de los Lupacas
                                        cuyo desarrollo alcanzó grandes avances en la agricultura, ganadería,
                                        organización social y cultura. Por otro lado, la parte norte a partir de lo que
                                        hoy es Juliaca, se encontraba en poder de los Kollas, cuyo dominio se proyectaba
                                        desde los linderos del actual Puno, hasta las riberas del Rió Ramis en el lado
                                        sur – oriental del Lago Titikaka.<br><br>
                                        La ciudad de Puno era un modesto poblado de indios hasta que el Virrey Conde de
                                        Lemos la convirtió en capital de la provincia de Paucarcolla, el 4 de noviembre
                                        de 1668. Paralelamente cambió su antiguo nombre de San Juan Bautista de Puno por
                                        el de San Carlos de Puno.<br><br>
                                        El periodo de paz había terminado en 1781 cuando las revoluciones indias
                                        lucharon por su independencia como el dirigido por Tupac Katari. En la guerra de
                                        la independencia al principio del siglo XIX Puno se convirtió en una ciudad
                                        importante de conexión entre el Perú y Rió de La Plata en Argentina.<br><br>
                                        Después de la independencia en 1821 Puno fue la escena de la batalla entre Perú
                                        y Bolivia, ocupando estos últimos los territorios peruanos hasta Tacna y
                                        Moquegua, hasta la firma de la convención de 1847.<br><br>
                                        El puerto de Puno cuenta con vapores que datan de inicios de la república, los
                                        que fueron transportados desde Arica (Chile) hasta el Lago Titikaka para el
                                        transporte del minerales y pasajeros desde Bolivia, los mismos que se conservan
                                        el día de hoy, así mismo se construyó un ferrocarril que interconecta los
                                        departamentos de Cuzco y Arequipa que igualmente siguen en servicio.
                                        A segunda mitad del siglo XVII (1657) el Virrey Conde de Lemos (Pedro Fernández
                                        de Castro) traslada el puerto de San Luís de Alba, hacia lo que hoy es Puno y
                                        funda la villa de las Inmaculada Concepción y San Carlos de Puno el 9 de
                                        noviembre de 1663 y el 4 de noviembre de ese año, lo declara capital de la
                                        provincia de Paucarcolla (fecha que se celebra cada año). Luego de haber
                                        sofocado un enfrentamiento entre españoles por las famosas minas de Laykacota,
                                        las mismas que fueron enterradas y ejecutados los hermanos José y Gaspar
                                        Salcedo.<br><br>
                                        La provincia de Puno fue creada por un decreto del 2 de mayo de 1854 y es
                                        capital del departamento hoy Región Puno.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Danzas de Puno
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>La diablada</h3>
                                    <p>
                                        Entre las danzas mas emblemáticas se encuentra <strong>la Diablada,</strong>
                                        expresión del sincretismo religioso andino-cristiano que representa la lucha
                                        entre el bien y el mal. Su origen se remonta a 1577, cuando los jesuitas se
                                        establecieron en Juli, actual capital de la provincia de Chucuito, donde en los
                                        días festivos cristianos se presentaban comedias y autos sacramentales. A través
                                        de estas manifestaciones teatrales los misioneros jesuitas enseñaron al pueblo
                                        aimara los siete pecados capitales a modo de danza, y cómo los ángeles vencen a
                                        los demonios.
                                    </p>
                                    <img src="{{ asset('img/galeria/danzantes-de-Diablada-Puno.webp') }}" width="100%"
                                        alt="Danza Diablada Puno" loading="lazy">
                                    <i>Foto: Danzantes de 'Diablada'</i><br><br>

                                    <h3>La Pandilla</h3>
                                    <p>
                                        Otra de las expresiones dancísticas de gran raigambre popular en Puno es la
                                        Pandilla, que a diferencia de otros bailes que llevan el mismo nombre en otras
                                        regiones del Perú, se ejecuta de forma pausada y expresa la caballerosidad del
                                        varón y la elegancia de la dama puneña.
                                    </p>
                                    <h3>Sikuris</h3>
                                    <p>
                                        El sikuri es la expresión auténtica del poblador puneño. El siku o zampoña, es
                                        un instrumento andino pentafónico está compuesto por diversos tubos sonoros de
                                        distintos calibres de longitud y diámetro. A este instrumento se suma el bombo,
                                        con el cual se genera una simbiosis musical que acompaña a los
                                        intérpretes-danzantes que avanzan dando pasos hacia adelante y hacia atrás,
                                        complementados con movimientos circulares.<br><br>
                                        Este baile derivado de la Tuntuna se interpreta con trajes mucho más adornados y
                                        vistosos y con movimientos aún más acrobáticos. La música de cada danza difiere
                                        una de otra, conservando la misma línea melódica de inspiración afroperuana.
                                    </p>
                                    <h3>Wifala</h3>
                                    <p>
                                        Palabra que proviene del quechua, cuyo significado es “enseña” o “bandera”,
                                        aunque también puede significar alegría. Tiene su origen en el distrito de
                                        Ayaviri, provincia de Melgar, así como en los distritos de Asillo y Muñani, en
                                        la provincia de Azángaro. Esta danza puneña fue declarada Patrimonio Cultural de
                                        la Nación el 2 de octubre de 2014.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principales lugares turísticos en Puno
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Islas flotantes de los Uros</h3>
                                    <i>Vivir en un mundo hecho de totora, rodeado del hermoso Lago Titicaca.</i>
                                    <p>
                                        A 3,812 m.s.n.m, en el altiplano peruano se encuentra el lago navegable más alto
                                        del mundo, el Lago Titicaca, en Puno. En él se pueden encontrar las Islas
                                        Flotantes de los Uros, construidas de totora, una planta acuática que crece en
                                        la superficie del Lago Titicaca. La totora es tejida y tendida sobre otra capa
                                        de la misma para construir la superficie de cada isla.<br><br>
                                        En el lago hay aproximadamente 100 islas flotantes, y la movilización se realiza
                                        en balsas también a base de totora. Sus habitantes son hospitalarios y se
                                        dedican al turismo, y puedes obtener una estampa en tu pasaporte en una de las
                                        islas más grandes.<br><br>
                                        Estas islas son habitadas por los Uros, una de las culturas más antiguas del
                                        continente la cual se remonta a épocas anteriores a los Incas. Los habitantes de
                                        esta comunidad flotante afirman ser dueños de las aguas del Lago Titicaca.
                                        La subsistencia de la comunidad de los Uros se basa en la pesca y la caza;
                                        también se dedican a la elaboración de tejidos de tapices de lana y al disecado
                                        de animales. Por otro lado, participan de actividades turísticas: Existen tours
                                        a las Islas Flotantes de los Uros de pocas horas, pero también experiencias
                                        completas en las cuales te conviertes parte de la comunidad de los Uros.
                                    </p>
                                    <img src="{{ asset('img/galeria/Uros-island-Puno.webp') }}" width="100%"
                                        alt="Isla de Uros" loading="lazy">
                                    <i>Foto: Isla de Uros, Puno</i><br><br>

                                    <h3>2. Islas de Amantaní y Taquile</h3>
                                    <p>
                                        El encanto del Lago Titicaca se vive intensamente en islas como Taquile y
                                        Amantaní, donde la historia que se guarda en la memoria de su gente se expresa
                                        en maravillosos tejidos, verdaderas obras de arte reconocidas a nivel mundial.
                                        En Taquile puedes subir 560 peldaños para llegar al pueblo, donde obtendrás
                                        vistas únicas del lago.<br><br>
                                        Amantaní es una buena opción para almorzar durante tu día, pues toda la comida
                                        del lugar es cosechada en la misma isla, lo que le otorga un valor especial. De
                                        la misma forma, es lo ideal disfrutar de una trucha, pues es uno de los
                                        alimentos más importantes del Titicaca.
                                    </p>
                                    <img src="{{ asset('img/galeria/Isla-Amantani-Puno.webp') }}" width="100%"
                                        alt="Isla Amantani Puno" loading="lazy">
                                    <i>Foto: Isla Amantani - Puno</i><br><br>

                                    <h3>3. Feria artesanal del puerto de Puno</h3>
                                    <p>
                                        El mercado artesanal del Puerto de Puno, a orillas del lago Titicaca, es uno de
                                        los mejores lugares para hacer compras de todo Perú.
                                        Situado a orillas del lago Titicaca en su lado peruano, el Puerto de Puno es un
                                        buen lugar para comprar artesanías tradicionales de las gentes del Altiplano. Si
                                        visitas la ciudad, es casi obligado dar una vuelta por su feria artesanal y
                                        hacer algunas compras de objetos únicos. Podrás presumir de haber adquirido un
                                        recuerdo en uno de los puertos más altos del mundo, a más de 3800 metros de
                                        altitud.<br><br>
                                        Es bastante normal que, al existir tantos puestos, haya una competencia por los
                                        clientes, volviendo los precios más asequibles para los turistas que deseen
                                        algún recuerdo o regalo. Es un buen lugar para disfrutar de artesanías y
                                        pintura, aunque también tiene lugares para almorzar, por lo que puedes dedicarle
                                        un buen par de horas con toda calma.
                                        De hecho, las gentes de Puno, tradicionalmente, solo han tenido dos fuentes de
                                        riqueza; por un lado, la pesca y, por otro, la producción artesanal. Es decir,
                                        que lo que compremos aquí tiene garantía de autenticidad.
                                    </p><br><br>

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h3>4. Mirador de Kuntur Wasi y Puma Uta</h3>
                                            <p>
                                                ¿Quieres tener una idea de cómo se ve Puno desde las alturas? Entonces
                                                es un
                                                buen plan conocer los miradores de Kuntur Wasi y Puma Uta, ambos
                                                imperdibles
                                                lugares turísticos de Puno. Kuntur Wasi tiene en su cima un cóndor, el
                                                patrono
                                                vigilante de la ciudad. Desde aquí te puedes sentir como uno de ellos en
                                                vuelo,
                                                y obtener increíbles vistas de Puno y el Titicaca.<br><br>
                                                Puma Uta tiene una idea similar, pero esta vez con una escultura gigante
                                                de un
                                                puma (y otros animales) en un mirador ideal para divertirse y admirar la
                                                magia
                                                de estas tierras. Además, un poco de actividad física nunca viene mal.
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('img/galeria/Mirador-Puma-ata-Puno.webp') }}"
                                                alt="Mirador de Puma Ata, Puno" loading="lazy" width="100%">
                                            <i>Foto: Mirador de Puma Uta, Puno</i><br><br>
                                        </div>
                                    </div>


                                    <h3>5. Iglesia de San Juan Bautista</h3>
                                    <p>
                                        El hogar de la Virgen de la Candelaria no debiese quedar fuera de tu lista.
                                        Tanto la virgen como el templo existen desde el año 1580. Sin embargo, un
                                        incendio acabó con gran parte de la estructura, siendo reconstruido en 1887 en
                                        su forma actual.<br><br>
                                        Desde la construcción del Templo San Juan Bautista, siempre fue lugar de oración
                                        de personas sufrientes, ya sea de mineros explotados, indígenas abusados, pobres
                                        y marginados, siempre lugar de oración de gente pobre y humilde. La Imagen de la
                                        Virgen de la Candelaria es venerada a partir del año 1580 en el Templo. La
                                        construcción es de adobe y representa parte de la identidad de Puno, siendo la
                                        virgen la patrona de Puno y recibiendo visitas de miles de fieles cada febrero.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Fechas más importantes en Puno
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p><strong>1. Fiesta ritual del Pago a la Tierra (Pacha Mama).</strong> <i>Fecha: 18
                                            de enero</i></p>

                                    <p><strong>2. Virgen de la Candelaria</strong> <i>Fecha: del 2 al 18 de febrero</i>
                                    </p>

                                    <p><strong>3. Semana Santa en Puno</strong> <i>Fecha: del 24 al 3 de marzo</i></p>

                                    <p><strong>4. Fiesta de Santiago apóstol</strong> <i>Fecha: 24 y 26 de julio</i></p>

                                    <p><strong>5. Fiestas patrias</strong> <i>Fecha: 28 de julio</i></p>

                                    <p><strong>6. Escenificación de Capac Ccolla</strong> <i>Fecha: 7 de setiembre</i>
                                    </p>

                                    <p><strong>7. Aniversaio de fundación de Puno</strong> <i>Fecha: del 1 al 30 de
                                            noviembre</i></p>

                                    <img src="{{ asset('img/galeria/353-aniversario-de-Puno.webp') }}"
                                        alt="Pisco Sour, Peru" width="100%" loading="lazy">
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
