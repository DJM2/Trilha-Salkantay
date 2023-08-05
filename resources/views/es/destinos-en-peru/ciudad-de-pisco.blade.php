@extends('layouts.app')

@section('content')
    @include('layouts.menu-castellano')
    <div class="pisco">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">La ciudad de Pisco</h1>
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
                                    href="{{ route('destinos-peru') }}">Destinos</a> / <a>Pisco</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Pisco"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Pisco, cuna de la bandera y puerta de la libertad
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-center">
                                        <i>¡Pisco cuna de la bandera y puerta d ela libertad!<br>
                                            Cada año se celebra con fervor patriótico el desembarco de la expedición
                                            libertadora al mando del general Don José de San Martín en la bahía de
                                            Paracas. Porque en Pisco nació la libertad del Perú...
                                        </i><br><br>
                                        <p>
                                            El desembarco del general don José de San Martín en Paracas, cerca al puerto
                                            de Pisco, el 8 de setiembre de 1820, es uno de los hitos más importantes de
                                            la historia del Perú. Representó, para el pueblo peruano, el punto de
                                            conexión y el deseo común por sentirse parte del ejército libertador y
                                            sumarse así a la causa independista.

                                            Un día antes, el 7 de setiembre de hace 200 años, el general José de San
                                            Martín (1778-1850), al mando de la Expedición Libertadora, llega a las
                                            costas de la bahía de Paracas. El ejército libertador estaba compuesto por
                                            más de 4,000 hombres, entreargentinos, chilenos y peruanos patriotas.

                                            El objetivo era apoyar a los patriotas peruanos en su lucha por liberarse
                                            del dominio español y sellar la independencia de las colonias españolas en
                                            Sudamérica.

                                            La primera bandera del Perú nació en Pisco, gracias a una disposición del
                                            general libertador argentino, José de San Martín, quien daba así una
                                            descripción de cómo debería ser confeccionado el primer símbolo patrio de
                                            los peruanos:
                                        </p>
                                        <div class="text-center">
                                            <i>"Se adoptará por bandera nacional del país una de seda, o lienzo, de ocho
                                                pies de largo, y seis de ancho, dividida por líneas diagonales en cuatro
                                                campos, blancos los dos de los extremos superior e inferior, y
                                                encarnados los Laterales; con una corona de laurel ovalada, y dentro de
                                                ella un Sol, saliendo por detrás de sierras escarpadas que se elevan
                                                sobre un mar tranquilo. El escudo puede ser pintado, o bordado, pero
                                                conservando cada objeto su color: a saber, la corona de laurel ha de ser
                                                verde, y atada en la parte inferior con una cinta de color de oro; azul
                                                la parte superior que representa el firmamento; amarillo el Sol con sus
                                                rayos; las montañas de un color pardo oscuro, y el mar entre azul y
                                                verde”.</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Historia de la provincia de Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>¿Qué significa la palabra Pisco?</h3>
                                    <p>
                                        Pisco, nombre quechua que significa “pájaro”, es un lugar que se encontraba
                                        dentro del territorio de las culturas prehispánicas Paracas y Nazca, incluso
                                        hacia el 1000 a. c. se produjo el primer asentamiento sedentario debido a las
                                        ingentes riquezas marinas que los antiguos habitantes recogían. En ese sentido,
                                        sus vestigios culturales e históricos son amplios.
                                    </p>
                                    <h3>¿Cómo nace la ciudad de Pisco?</h3>
                                    <p>
                                        Con el establecimiento del virreinato del Perú, el puerto de Pisco sirvió como
                                        punto de salida del azogue de Huancavelica y del pisco que se producía en los
                                        valles cercanos. Durante el gobierno del virrey del Perú Pedro Álvarez de Toledo
                                        y Leiva, marqués de Mancera, Pisco fue fundada como “villa”, bajo el nombre de
                                        “Villa de San Clemente de Mancera”, aunque popularmente fue siempre conocida
                                        como “Villa de Pisco”. Era un antiguo asiento indígena relacionado con la
                                        extracción de guano de las islas, muy apreciado como fertilizante en el Perú
                                        prehispánico.<br><br>
                                        En 1820, arribó a Pisco la Expedición Libertadora al mando de José de San Martín
                                        y Bernardo O’Higgins Riquelme, desembarcando en la bahía de Paracas, lugar donde
                                        se creó la primera bandera y el primer escudo nacional del Perú. En
                                        consideración a lo anterior, en 1832, tras un acuerdo de la Junta Departamental
                                        de Lima en orden a que la Villa de Pisco recibiera el título de “Villa y Puerto
                                        de la Independencia”, el Congreso del Perú dispuso por ley que ésta se
                                        denominaría con dicho nombre, haciendo extensivo tal calificativo tanto al
                                        pueblo, como a la población ribereña.<br><br>
                                        En 1868 la Villa de Pisco fue designada capital de la nueva provincia de Chincha
                                        y en 1898 fue elevada al rango de “ciudad”. Al respecto, en 1947, el historiador
                                        pisqueño Mamerto Castillo Negrón expresó que Pisco había recibido en su historia
                                        dos agregados que hacían honores justos a su merecimiento: primero que era
                                        “Villa y Puerto de la Independencia” y, segundo, el reconocimiento como capital
                                        de provincia.<br><br>
                                        El 15 de agosto de 2007 la ciudad fue sacudida a las 18:40 por un fuerte
                                        terremoto de 8.0 grados en la escala de Richter que la dejó en ruinas, en dicha
                                        tragedia murieron 519 personas y 16.000 casas fueron destruidas según cifras del
                                        INDECI (Instituto Nacional de Defensa Civil). Actualmente se prevé la
                                        construcción de diferentes edificaciones en la ciudad, que incluye la renovación
                                        del aeropuerto así como del puerto de Pisco.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Pisco, como destino turístico
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        ¿Quieres saber un poco más sobre la ciudad de Pisco? ¿Estás organizando un viaje
                                        a Paracas e Islas Ballestas y necesitas más información sobre estos maravillosos
                                        lugares de la costa sur del Perú? Basta solo decir que Pisco es una de las
                                        ciudades más importantes del Perú, ya que no sólo vio nacer a la emblemática
                                        bebida nacional peruana, el pisco, sino que también fue la cuna de la primera
                                        bandera del Perú, creada en las costas de Paracas por el libertador José de San
                                        Martín. Pisco ciudad comprende dos zonas: “Pisco Pueblo”, que incluye la zona
                                        del centro histórico y los distritos aledaños a la autopista Panamericana Sur;
                                        “Pisco Playa”, que abarca a los distritos y las zonas aledañas a la orilla del
                                        mar. ¡Descubre más de Pisco en las siguientes líneas!.<br><br>
                                        <img src="{{ asset('img/galeria/turists-places-in-Pisco.webp') }}"
                                            alt="Pisco como destino turístico" width="100%" loading="lazy">
                                        <i>Islas Balestas</i><br><br>

                                        Ubicada a 231 kilómetros al sur de la ciudad de Lima, la provincia de Pisco es
                                        una de las preferidas por los turistas que visitan la región Ica. Alberga a la
                                        Reserva Nacional de Paracas, así como otros atractivos de cautivante belleza
                                        paisajística y natural que cuentan con el sello Safe Travels como destinos
                                        bioseguros. Y tiene también una singular herencia histórica al ser el escenario
                                        del desembarco de la expedición libertadora en 1820, liderada por el general
                                        José de San Martín.<br><br>

                                        Aunque este año no se realizará la tradicional Semana Turística por prevención
                                        ante la posibilidad de una tercera ola de covid-19, sí es posible visitar la
                                        provincia de Pisco gracias a su cercanía a Lima y disfrutar de unos días de sus
                                        magníficos escenarios naturales, encabezados por la Reserva Nacional de Paracas,
                                        el candelabro, las islas Ballestas, el museo Julio C. Tello, el oasis de Morón,
                                        recorrer su histórica Plaza de Armas, y saborear las delicias de su gastronomía.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Principales Lugares y actividades turísticas en Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Islas Ballestas</h3>
                                    <p>
                                        Las islas Ballestas forman parte de una de las áreas naturales protegidas
                                        ideales para visitar y conocer, porque ofrecen una conexión especial por su
                                        belleza natural y paisaje, además de tener una fauna marino costera biodiversa y
                                        un valor histórico en el desarrollo de la economía del país.
                                        Allí se pueden observar lobos marinos, pingüinos, aves guaneras y otras especies
                                        residentes y visitantes a este conjunto de islas que forman parte de la Reserva
                                        Nacional de Paracas.<br><br>
                                        El recorrido turístico al interior del área natural protegida islas Ballestas se
                                        realizará manteniendo una distancia no menor a 50 metros entre embarcaciones.
                                        Para fines de bioseguridad y cumplimiento de los parámetros establecidos, la
                                        capacidad de carga dentro de la ruta turística de las islas Ballestas será de 45
                                        embarcaciones por día.
                                    </p>
                                    <h3>El Candelabro</h3>
                                    <p>
                                        Famoso geoglifo llamado también “Tres Cruces” o “Tridente”, está ubicado sobre
                                        una colina de arena en el sector norte de la península de Paracas. La figura
                                        mide 177 metros de largo y 54 metros de ancho. Se calcula que tiene unos 2,500
                                        años. Su significado sigue siendo un misterio, aunque existen teorías que lo
                                        vinculan a los geoglifos de Nasca y las Pampas de Jumaná.<br><br>
                                        El trabajo de hacer este geoglifo en la arena fue muy preciso considerando que
                                        la zona es de mucho viento. La dirección del Candelabro, junto con el viento y
                                        el agua marina han conformado una gruesa capa cristalina que lo ha mantenido
                                        intacto desde su creación. Para apreciar el Candelabro se tiene que navegar a
                                        cierta distancia de la costa, por lo que forma parte de los circuitos de visita
                                        a las islas Ballestas.
                                    </p>
                                    <img src="{{ asset('img/galeria/Paracas-Candelabra.webp') }}" width="100%"
                                        alt="Candelabro Pisco" loading="lazy">
                                    <i>El candelabro: mide 177 metros de largo y 54 de ancho</i><br><br>

                                    <h3>La Catedral</h3>
                                    <p>
                                        Es una importante formación rocosa tiene una antigüedad de 28 a 40 millones de
                                        años y se asemejaba, como su nombre lo indica, a una gigantesca catedral. El
                                        derrumbe parcial que sufrió en el terremoto que asoló Pisco en el año 2007 no ha
                                        limitado la majestuosidad del paisaje limitado la majestuosidad del paisaje que
                                        se observa desde ahí.
                                        Desde este mirador natural se observa fauna característica de acantilados como
                                        piqueros, zarcillos, chuitas, ostreros negros, nutrias marinas y delfines.
                                    </p>
                                    <h3>Playas Raspón y La Mina</h3>
                                    <p>
                                        Son las playas más visitadas de la Reserva Nacional de Paracas debido a su gran
                                        belleza paisajística, donde destacan acantilados rocosos algo elevados, aguas
                                        mansas y cristalinas y arena blanca y fina.<br><br>
                                        El nombre La Mina proviene de una antigua mina de carbón que existía al extremo
                                        sur de la playa. Llegar a Raspón era, hasta hace un tiempo, una aventura algo
                                        riesgosa, pues los visitantes debían descender por una cuesta rocosa empinada,
                                        de ahí su nombre, ya que quienes caían en el intento terminaban con algunos
                                        raspones. Hoy en día el acceso es sencillo y no implica problema alguno.
                                    </p>
                                    <h3>Playa Lagunillas</h3>
                                    <p>
                                        Playa de arena con pequeñas formaciones rocosas. Los visitantes pueden acercarse
                                        a la caleta de pescadores que se encuentra próxima, donde desembarcan peces como
                                        cabrilla, cabinza, bonito, pejerrey y jurel, entre otros, así como choros,
                                        lapas, chanque, pulpo, cangrejo, etc. Antes de llegar a Lagunillas se cruza un
                                        puesto de control y vigilancia del Sernanp con guardaparques de la Reserva
                                        Nacional de Paracas.
                                    </p>
                                    <h3>Playa Yumaque</h3>
                                    <p>
                                        Es una pequeña ensenada en forma de media luna tiene aproximadamente 2
                                        kilómetros de largo. Su nombre proviene del quechua y significa “lugar donde se
                                        saca con la mano”, pues es posible extraer pequeños moluscos conocidos como
                                        “palabritas”.<br><br>
                                        En esta zona se descubrió al pingüino gigante, denominado Inkayacu paracasensis,
                                        en honor a la Reserva Nacional de Paracas. Existe una réplica de esta especie en
                                        el Centro de Interpretación.
                                    </p>
                                    <h3>Playa Roja</h3>
                                    <p>
                                        El color rojizo de la orilla imprime al lugar de una singular belleza. Este
                                        color se debe a su cercanía al macizo de Punta Santa María, formado por rocas
                                        que contienen en su interior magma solidificado. La acción de las olas sobre el
                                        macizo arrastra los fragmentos rojizos de las rocas, que se van acumulando en la
                                        orilla, dando así origen al nombre de la playa.
                                    </p>
                                    <img src="{{ asset('img/galeria/playa-roja-pisco.webp') }}" alt="Playa roja"
                                        width="100%" loading="lazy">
                                    <i>Playa roja</i><br><br>
                                    <h3>Museo Julio C. Tello</h3>
                                    <p>
                                        El Museo de Sitio Julio C. Tello está situado en la Reserva Nacional de Paracas,
                                        a la altura del kilómetro 27 de la carretera Pisco-Puerto San Martín, a 22
                                        kilómetros al sur de la ciudad de Pisco.<br><br>
                                        Alberga 120 piezas, entre cerámica, tejidos y utensilios de la civilización
                                        Paracas, que abarca desde los períodos iniciales, alrededor de 700 años a.C.,
                                        hasta el año 200 d.C. aproximadamente.<br><br>
                                        Asimismo, destacan los fardos funerarios que contienen restos óseos en buen
                                        estado de conservación. También hay cráneos deformados que evidencian las
                                        operaciones quirúrgicas conocidas como "trepanaciones" y demuestran el gran
                                        conocimiento de esta cultura ancestral en el campo de la medicina.<br><br>
                                        El recinto cultural cuenta también con una sala de proyección de material
                                        audiovisual y una Sala de Exposición Temporal. El primer ambiente que
                                        proporciona una introducción sobre la civilización Paracas, el medio ambiente
                                        árido que habitaron (la península de Paracas), así como su cosmovisión del mundo
                                        y objetos materiales utilitarios, como sus célebres tejidos de extraordinaria
                                        técnica y colorido, cerámicos e instrumentos diversos.<br><br>
                                        El Museo de Sitio Julio C. Tello fue galardonado, en octubre de 2018, como el
                                        “Mejor museo de Latinoamérica”, en la quinta edición de los Leading Culture
                                        Destinations Awards, realizada en South Kensington Club, en la ciudad de
                                        Londres.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    10 datos curiosos que no sabías del pisco peruano
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. La producción de pisco peruano rompió un récord en 2016</h3>
                                    <p>
                                        Histórica. Así fue denominó el Ministerio de la Producción la cantidad de pisco
                                        que se fabricó en Perú durante 2016. La cartera reportó que los más de 10
                                        millones de litros elaborados el año pasado rompieron el récord de las
                                        producciones en periodos anteriores. Además, las exportaciones aumentaron un
                                        12,6% en volumen, en especial las que llegan a nuevos destinos como India,
                                        Israel, Bélgica, Noruega y República Dominicana.
                                    </p>
                                    <h3>2. Chile es el principal país de exportación del pisco peruano</h3>
                                    <p>
                                        Pese a la rencilla que mantienen Chile y Perú por el nombre del pisco –y que
                                        reeditó su última batalla a finales de mayo por la participación en un concurso
                                        internacional–, el país austral es el principal destino de exportación de la
                                        bebida que se produce en territorio peruano. De hecho, el año pasado las ventas
                                        hacia ese país crecieron un 13,5%.
                                    </p>
                                    <h3>3. Curiosamente, el pisco no es la bebida alcohólica que más consumen los
                                        peruanos</h3>
                                    <p>
                                        En febrero pasado, se reveló que el pisco en sus diferentes presentaciones, como
                                        el pisco sour o el chilcano, logró posicionarse como la tercera bebida que más
                                        consumen los peruanos, después de la cerveza y el vino.
                                    </p>
                                    <h3>4. El pisco es Patrimonio Cultural de Perú</h3>
                                    <p>
                                        Desde el 7 de abril de 1988, el país declaró patrimonio cultural a la palabra
                                        pisco. Sin embargo, la reglamentación de esta bebida había empezado desde 1932
                                        cuando se emitió una resolución suprema en la que se limitaba el uso de la
                                        denominación aguardiente de uva y exigía etiquetas. En 1940 se prohibió “la
                                        internación de alcoholes de caña” a la zona “vitivinícola” de Pisco. Para 1946
                                        ya se empezaron a diferenciar las denominaciones de pisco, aguardiente de uva y
                                        coñac. En 1990, se declaró finalmente que el pisco “es una denominación de
                                        origen peruana para los productos obtenidos por la destilación de vinos
                                        derivados de la fermentación de uvas frescas, en la costa de los departamentos
                                        de Lima, Ica, Arequipa, Moquegua y los valles de Locumba, Sama y Caplina, en el
                                        departamento de Tacna.
                                    </p>
                                    <img src="{{ asset('img/galeria/la-comercializacion-del-pisco.webp') }}"
                                            width="100%" alt="Comercializacion del Pisco" loading="lazy">
                                        <i>Foto: Comercialización del Pisco</i><br><br>
                                    <h3>5. El pisco sour es tan popular que también tiene su propio día nacional</h3>
                                    <p>
                                        Este popular coctel también fue declarado Patrimonio Cultural de Perú en 2007 y
                                        su día nacional se celebra el primer sábado de cada febrero. Lo curioso es que
                                        la denominada bebida bandera no fue creada por un peruano sino por un inmigrante
                                        anglosajón. A principios del siglo XX, reportó el Ministerio de Cultura, Víctor
                                        V. Morris, dueño del Bar Morris en el Jirón de la Unión del centro histórico de
                                        Lima, empezó a servir la preparación bajo el nombre con el que se le conoce
                                        actualmente. Citando un anuncio, que data de 1927, sobre el establecimiento, el
                                        Ministerio de Cultura afirma que el lugar se había hecho famoso porque importaba
                                        “toda clase de vinos, licores y cervezas” y además ofrecía “la exquisita
                                        preparación de sus 'pisco-sour' y 'whisky-sour', etc., en los que emplea licores
                                        genuinos”. Durante la celebración del Día del Pisco Sour, el consumo del coctel
                                        en algunos de los bares más tradicionales alcanza los 500 vasos en un promedio
                                        de 750 por día.
                                    </p>
                                    <h3>6. El primer museo del pisco en Perú abrió sus puertas hace sólo cuatro años
                                    </h3>
                                    <p>
                                        Paracas, al sur del Perú, abrió las puertas del primer Museo del Pisco del país
                                        en febrero de 2013. El lugar cuenta con 10 salas de exhibición, en una de las
                                        cuales se reconoce a todos aquellos que aportaron a la difusión del pisco y su
                                        cultura, así como otra dedicada a los ganadores de los concursos nacionales e
                                        internacionales. También hay un recorrido histórico por el proceso que ha tenido
                                        la bebida y los visitantes pueden degustar y comprarla.
                                    </p>
                                    <h3>7. Lima es la región con más empresas productoras de pisco</h3>
                                    <p>
                                        Se reportó que hasta 2016 había un total aproximado de 523 empresas productoras
                                        de pisco, de las cuales el 48,8% están en Lima. Le sigue la región de Ica con un
                                        34,6%. Así como las exportaciones y la producción, las empresas fabricantes de
                                        esta bebida también aumentaron con respecto a 2015: un 15%.
                                    </p>
                                    <h3>8. La banda Café Tacuba tuvo su propia botella de pisco, cortesía de los fans
                                    </h3>
                                    <p>
                                        Los fanáticos peruanos de Café Tacuba le quisieron dar un regalo muy especial a
                                        la banda, cuando cumplió sus primeros 20 años de vida. En julio 2009, el grupo
                                        hacía una gira musical por el aniversario y en Perú prepararon una botella de
                                        pisco con una etiqueta inspirada en los integrantes. Según reportó Andina en su
                                        momento, la marca elegida fue “Viejo Tonel” y la presentación incluía “una
                                        lujosa etiqueta con la cara de todos los integrantes de la banda en fondo blanco
                                        y el logo oficial del aniversario”. En la parte posterior estaba la historia del
                                        pisco peruano y su origen. “Esta es nuestra muestra de cariño para que los
                                        chicos puedan celebrar estos 20 años como debe ser. Es un regalo peruano y nos
                                        decidimos por esto porque sabemos que la banda es fanática de este licor”,
                                        explicó a Andina en ese entonces Roberto Orellana, presidente del club de fans
                                        de Café Tacuba en Perú.
                                    </p>
                                    <h3>9. Los primeros viñedos para el pisco llegaron desde las Islas Canarias</h3>
                                    <p>
                                        La historia sobre la llegada del pisco y de los viñedos a Perú se le atribuye a
                                        los conquistadores españoles que alcanzaron a mediados del siglo XVI las tierras
                                        que habitaban los Incas. Según el relato recogido por una ley de la región de
                                        Arequipa, los historiadores coinciden en que “las primeras uvas y los primeros
                                        cultivos de viñedos las trajo el Marqués Francisco de Caravantes, muy
                                        probablemente de las islas Canarias”. La normativa añade que en pocas décadas
                                        ese licor se convirtió en el preferido por las multitudes y en un elemento de
                                        socialización. Tanto que para el siglo siguiente la producción del vino y del
                                        pisco “llegó a niveles de gran escala en las regiones de Ica, Lima, Moquegua,
                                        Tacna” y Arequipa, “desarrollándose una intensa actividad vitivinícola durante
                                        los siglos XVII y XVIII”.
                                    </p>
                                    <h3>10. No hay un solo tipo de pisco:</h3>
                                    <p>La Comisión Nacional del Pisco explicó que existen cuatro tipos de pisco:</p>
                                    <ul>
                                        <li><strong>Pisco puro:</strong> obtenido exclusivamente de una sola variedad de
                                            uva pisquera.</li>
                                        <li><strong>Pisco mosto verde:</strong> obtenido de la destilación de mostos
                                            frescos de uvas
                                            pisqueras con fermentación interrumpida.</li>
                                        <li><strong>Pisco acholado:</strong> pisco obtenido de tres clases de mezclas.
                                            <ul>
                                                <li>Uvas pisqueras, aromáticas y/o no aromáticas.</li>
                                                <li>Mostos de uvas pisqueras aromáticas y/o no aromáticas.</li>
                                                <li>Mostos frescos completamente fermentados (vinos frescos) de uvas
                                                    pisqueras aromáticas y/o no aromáticas.</li>
                                            </ul>
                                        </li>
                                        <li>Piscos provenientes de uvas pisqueras aromáticas y/o no aromáticas.</li>
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
