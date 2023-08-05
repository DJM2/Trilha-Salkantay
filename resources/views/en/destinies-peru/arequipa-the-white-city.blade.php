@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="arequipa">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">The white city of Arequipa</h1>
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
                            <p><a href="{{ route('index') }}">Home</a> / <a
                                    href="{{ route('destinies-peru') }}">Destinies</a> / <a>Arequipa</a>
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
                                    Why is it called the white city?
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Arequipa is known as the White City due to its architecture built with white
                                    volcanic stone, called ashlar, which is weather resistant and anti-seismic. Its use
                                    begins at the end of the 16th century. This volcanic stone (caused by the settling
                                    of ash) is white or exceptionally pink. Its texture is soft, light and weather
                                    resistant, which is why it emerged as a privileged anti-seismic structural solution
                                    and a great alternative to adobe. It is extracted from quarries located in natural
                                    streams located in the province of Arequipa.<br><br>

                                    Thus, for this reason, we can see large ashlar constructions in the streets of
                                    Arequipa, such as arches, pools, temples, convents, museums, banks, institutional
                                    headquarters, as well as hotels and restaurants that give it a particular
                                    stamp.<br><br>
                                    <img src="{{ asset('img/panoramico/la-ciudad-blanca-de-arequipa.webp') }}"
                                        alt="Arequipa the white city" width="100%" loading="lazy">
                                    <i>Photo: Central Cathedral of Arequipa and Misti volcano</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Arequipa, world heritage
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The historic center of Arequipa is considered by UNESCO as part of the Cultural
                                        Heritage of Humanity, due to the mixture of two cultures and for being able to
                                        create structures that last over time. The Historic Center of Arequipa is also
                                        recognized for being framed by the countryside, its lung.<br><br>

                                        The Ministry of Culture also declared Cultural Heritage of the Nation The
                                        Knowledge and Techniques of Extraction and Carving of Sillar in the City of
                                        Arequipa.<br><br>

                                        Arequipa is a beautiful city located in the south of Peru, in the province and
                                        department of the same name. Known as the 'White City'. Arequipa is a jewel that
                                        will make you fall in love forever. It is the second most populous city in Peru,
                                        after the capital Lima, and has a population of 1,008,290 inhabitants according
                                        to data from the 2017 National Census.<br><br>

                                        Founded on August 15, 1540, it is a city with a great historical legacy, which
                                        captivates visitors thanks to its surprising architecture. Well, the historic
                                        buildings of the city are a great example of the fusion of European and Andean
                                        architecture.<br><br>

                                        Today, this metropolis, which functions as the capital of both the province and
                                        the department of the same name, is an interesting destination chosen by
                                        tourists from all over the world to closely appreciate the Peruvian past and
                                        culture. Travelers have the opportunity to visit an impressive historic center
                                        that has been recognized by UNESCO as a World Heritage Site and be surprised by
                                        the attractive spaces that are around it.<br><br>

                                        The Basilica Cathedral of Arequipa, the Municipal Historical Museum, the
                                        Goyeneche Palace, the Monastery of Santa Catalina de Siena and the House of
                                        Tristán del Pozo are just some of the sites that every visitor should visit to
                                        learn about the history, religious profile and the architectural riches that the
                                        city treasures.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Arequipa: Historical Review
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    The Arequipa region has been populated since before the Inca times. Nomadic groups
                                    and peoples such as the Collaguas, the Chimbas and the Yarabayas inhabited this
                                    area.<br><br>

                                    Starting in 1170, the Incas settled in these lands and exercised their dominion. In
                                    1540 the Spaniards managed to settle down to found the city, with Juan de la Torre
                                    and Díaz Chacón and Garcí Manuel de Carbajal as the main leaders and under the
                                    orders of Francisco Pizarro.<br><br>

                                    On August 15, 1540, Don Garcí Manuel de Carvajal, Lieutenant of Governors and
                                    Governor, by order of the Conqueror Don Francisco Pizarro, founded the Villa Hermosa
                                    de Nuestra Señora de la Asunción, Arequipa in the place called La Chimba (San
                                    Lázaro) at the left bank of the river. Being among the founders and neighbors, some
                                    Andalusian, Extremaduran and Castilian nobles and hidalgos, the town was immediately
                                    elevated to the category of city on September 22, 1541.<br><br>

                                    The activity that soon became predominant was agriculture; The vine and the olive
                                    tree had been acclimatized with great success, and soon a prosperous production of
                                    wines and grape spirits, as well as olive oil, began, especially in the Yauca
                                    area.<br><br>

                                    By using ashlar, a type of volcanic stone abundant in the region, in constructions,
                                    the viceregal city began to acquire its characteristic appearance, gradually filling
                                    itself with majestic landlord mansions, beautiful temples, and monumental convents,
                                    such as Santa Catalina.<br><br>

                                    When the first winds of independence began to blow, many Arequipeños from
                                    illustrious Creole families joined the cause, even in an inauspicious environment,
                                    linking up with patriotic societies in Argentina and other countries.
                                    <br><br>
                                    <img src="{{ asset('img/galeria/historia-sobre-arequipa-Perú.webp') }}"
                                        width="80%" alt="Historia de Arequipa" loading="lazy"><br><br>
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
                                    Main tourist places in Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Arequipa is the perfect destination to enjoy a vacation full of nature, adventure,
                                    history and delicious cuisine. Named Cultural Heritage of Humanity, this city is,
                                    without a doubt, one of those places that you have to visit at least once in your
                                    life. Here we leave you 10 tourist places in Arequipa that you should know.<br><br>
                                    <h3>1. Misti volcano</h3>
                                    Arequipa has one of the most impressive destinations for the most daring travelers:
                                    El Misti, a 5,822-meter volcano, over 800,000 years old and one of the 16 active and
                                    potentially active volcanoes in Peru. If you are looking for a maximum adventure
                                    plan, we recommend you make the ascent to the Misti Volcano, a two-day journey
                                    surrounded by incredible landscapes, camping at more than 4,000 meters above sea
                                    level and with a totally unique arrival at the finish line: the view from the Misti
                                    crater.<br><br>
                                    <img src="{{ asset('img/galeria/volcan--misti-Arequipa-Peru-Pacha-Mama.webp') }}"
                                        width="100%" alt="Misti Volcano Arequipa Peru" loading="lazy">
                                    <i>Picture: Misti Volcano Arequipa Peru</i><br><br>

                                    <h3>2. St. Catherine's Monastery</h3>
                                    In the heart of the city of Arequipa is one of the great architectural works of
                                    colonial Peru. It is the Santa Catalina Monastery, a cloistered convent built in the
                                    16th century and which has more than 20,000 square meters that you can explore from
                                    end to end. Its colorful streets, its interesting history and its amazing
                                    architecture have made the Santa Catalina Monastery one of the main tourist places
                                    in Arequipa.<br><br>
                                    <img src="{{ asset('img/galeria/Monasterio-de-Santa-Catalina-Arequipa.webp') }}"
                                        width="100%" alt="St. Catherine's Monastery" loading="lazy">
                                    <i>Picture: St. Catherine's Monastery</i><br><br>

                                    <h3>3. Yanahuara city sigth</h3>
                                    If you are one of those who like to have a 360 view of the city you visit, you have
                                    to visit the Yanahura Viewpoint. Located in the picturesque district of the same
                                    name, this viewpoint offers one of the most spectacular views of Arequipa, with the
                                    city at the foot of its three most representative volcanoes: Misti, Chachani and
                                    Pichu Pichu. In addition, another of the attractions of this place are its
                                    characteristic white ashlar arches, in which you can read phrases of famous people
                                    from Peru.<br><br>
                                    <img src="{{ asset('img/galeria/mirador-de-Yanahuara-Arequipa.webp') }}"
                                        width="100%" alt="Yanahuara city sigth" loading="lazy">
                                    <i>Picture: Yanahuara city sigth & Misti</i><br><br>

                                    <h3>4. Colca Canyon</h3>
                                    One of the main tourist destinations in Peru; also, considered one of the deepest
                                    canyons in the world; This tourist center offers spectacular landscapes,
                                    archaeological remains, small colonial towns and the most interesting and important
                                    thing is the flight of Andean condors at dawn with the reflection of the sun under
                                    the blue sky.<br><br>

                                    To appreciate everything that the Colca Canyon offers, you must travel to the Colca
                                    Valley located 151 kilometers from the White City of Arequipa and for a three-hour
                                    trip by bus, it is normally advisable to rest one night in the Colca Valley (Chivay
                                    ) to appreciate the fabulous flight of the condors.<br><br>
                                    <img src="{{ asset('img/galeria/COLCA-canyon-AREQUIPA--pacha-mama-Spirit.webp') }}"
                                        alt="Colca canyon Arequipa" loading="lazy" width="100%">
                                    <i>Photo: Condor Viewpoint, Colca Canyon</i><br><br>

                                    <h3>5. Choqolaqa Stone Forest</h3>
                                    The Choqolaqa Stone Forest looks like a landscape from another planet, the scene of
                                    a Hollywood Martian fiction or even a surreal painting by Dalí. It is also known as
                                    Nueva Arequipa, and the legend says that one day its inhabitants stopped respecting
                                    their Apus and as punishment everything turned to stone.<br><br>
                                    <h3>6. The quarries of Sillar</h3>
                                    The city of Arequipa is known for its ashlar-based constructions. This
                                    whitish-colored rock was used by the Incas for sacred buildings and, later, by the
                                    Spanish to build houses and churches. Thus, due to the use of ashlar, Arequipa is
                                    known as the White City. By visiting the Ruta del Sillar, you will be able to
                                    discover the way in which this material was worked, which, due to the beauty and
                                    particularity of the works, will leave you impressed.<br><br>
                                    <h3>7. Arequipa Main Square</h3>
                                    The main square of Arequipa, is located in the Historic Center, is one of the main
                                    public places of the White City, considered one of the most beautiful squares in
                                    Peru and all of Latin America, surrounded by the main cathedral of Arequipa to the
                                    north. , the three portals to the east, south and west; the church of the company to
                                    the south-east and in the center of the main square presents a beautiful bronze
                                    fountain with three plates crowned with the figure of a 16th century soldier.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Most important dates in Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Virgin of Chapi in Arequipa</h3>
                                    <i>Date: May 1</i><br>
                                    The festival of the Virgin of Chapi is a Christian celebration that is very well
                                    received in the town of Arequipa. Her cult in this area has its origin almost three
                                    centuries ago and her key and central festival is every year on May 1, although
                                    there are towns where the date is movable and shares the stage with other Marian
                                    representations.<br><br>

                                    <h3>2. Anniversary of the Spanish Foundation of the City of Arequipa in Arequipa
                                    </h3>
                                    <i>Date: August 15</i><br>
                                    The City of Arequipa was founded by the Spanish in the year 1540, on August 15. From
                                    then on, annually, on the eve of said date, Arequipa dresses up to celebrate its
                                    anniversary.<br><br>

                                    There is a program that varies each year, but within which, in general, the
                                    festivities begin a week in advance. Among the events that are for the opening day
                                    are: A parade, which runs through the main avenues of the city.<br><br>

                                    <h3>3. Anniversary of Cotahuasi in Arequipa</h3>
                                    <i>Date: May 4</i><br>
                                    El aniversario de Cotahuasi es una importante celebración que en la actualidad se
                                    encuentra comprendida dentro de la Semana Turística de Cotahuasi y que tiene como
                                    fecha clave el día 4 de Mayo, fecha en la que se conmemora y festeja la creación
                                    política de la provincia de La Unión, a la que pertenece el distrito de Cotahuasi,
                                    en Arequipa.<br><br>

                                    Es común en la celebración encontrar diferentes ferias, además de las gastronómicas.
                                    Sobre estas otras, estas pueden ser ferias artesanales, aunque también existen
                                    exhibiciones de las danzas típicas de la zona, estas se dan en los corsos o también
                                    en el llamado “Llacta Tupay de la Reserva Paisajística de Cotahuasi”.<br><br>

                                    <h3>4. Feast of the Immaculate Conception in Arequipa</h3>
                                    <i>Date: December 8</i><br>
                                    The feast of the Immaculate Conception is a world religious festival, but it
                                    presents an interesting way of celebrating within the department of Arequipa,
                                    specifically in the areas of Arequipa (city), Chuquibamba and Cayma where it is
                                    called "Mamita Conchita" since the apparition of the first statue back in the 18th
                                    century when it was brought by a group of Spanish soldiers and left in place at the
                                    request of the inhabitants of Chuquibamba. The festival is important for the number
                                    of parishioners it gathers, as well as for being able to appreciate in it the
                                    assimilation of a western tradition in a town with Andean influences.<br><br>

                                    <h3>5. Chuquibambino Carnival in Arequipa</h3>
                                    <i>Date: first Saturday of February</i><br>
                                    The Chuquibamba carnival is a colorful and fun celebration held in the district of
                                    the same name, within the province of Condesuyos, in the department of Arequipa.
                                    Like all carnivals, it has a movable date, but it can be followed according to the
                                    calendar, and the last time it took place during the period between February 27 and
                                    March 6, although the city has been in carnival since the first February with the
                                    traditional water games that are inevitable in the country.<br><br>
                                    <img src="{{ asset('img/galeria/pisco-sour-peru.webp') }}" alt="Pisco Sour, Peru"
                                        width="100%" loading="lazy">
                                    <i>Photo: Pisco Sour</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Popular Tours</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="camino-inca-cantera-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/caminata-a-choquequirao.webp') }}"
                                alt="camino inca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Choquequirao, caminata 4 días </h5>
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
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/tour-a-la-laguna-de-humantay.webp') }}" alt="Tour a Puno"
                                loading="lazy">
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
