@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="ica">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Ica, city of the eternal sun</h1>
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
                                    href="{{ route('destinies-peru') }}">Destinies</a> /
                                <a>Ica</a>
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
                                    Ica, the city of the eternal sun
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <i>Ica, also known as the city of the eternal sun, cradle of pisco or city of the
                                        sun</i>
                                    <p>
                                        Ica is considered the land of the eternal sun, the one where it will be
                                        difficult for you to wake up to see gray days since the king star never tires of
                                        illuminating its lands. For this and many other reasons, this region of the
                                        country, a few hours from Lima, is the favorite to take a vacation alone, as a
                                        couple, with friends, or with family.<br><br>
                                        Due to its proximity to <strong>Lima</strong>, the capital of Peru, Ica is one
                                        of the ideal
                                        destinations to get away: this southern region is located (approximately) 4
                                        hours from the city of Lima and has countless activities, as different as they
                                        are fun, for travelers who venture to explore its territory.<br><br>

                                        Because in Ica, the dunes of its enormous deserts protect the cultural and
                                        historical legacy of ancient civilizations, as well as the location of an oasis
                                        that seems to be taken from a movie or a fairy tale. In Ica, beautiful beaches
                                        with refreshing waters abound. That same sea that is used to practice your dips
                                        with your family and friends, is also the habitat of beautiful species of
                                        wildlife, which are eager for you to visit them.<br><br>

                                        It is not an exaggeration: in Ica there is a different activity for each type of
                                        tourist. It is a place where time flies, because there is always something to
                                        do.<br><br>

                                        Ica is famous for its countryside, wine centers; for the quality of its wines,
                                        being in this area the most important wine producers. It is worth highlighting
                                        the harvest festival of Ica, carried out with great consumption of wine and
                                        cachina. In its fertile valleys, cotton, vines, tobacco and linen are grown.
                                    </p>
                                    <img src="{{ asset('img/panoramico/huacachina-ica-peru-tour.webp') }}"
                                        width="100%" alt="Huacachina oasis" loading="lazy">
                                    <i>Photo: Huacachina Oasis</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    History and origin of the city of Ica
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The first inhabitants settled in the Ica region about 9,000 years ago. The
                                        <strong>“man
                                            from Paracas”</strong>, discovered in the Pampas of Santo Domingo, dates
                                        back to the year 6,870 BC. constituting the second oldest horticulturist in
                                        Peru. Two important pre-Inca cultures settled in the region, the <strong>Paracas
                                            culture</strong> (600 BC to 100 AD) and the Nazca culture (100-800 AD). From
                                        the former remain the beautiful cloaks of cotton and wool fibers, preserved in
                                        their colors and texture by the climatic conditions and the soil of the area, as
                                        well as the funerary bundles with squatting mummies that show the advance in the
                                        technique not only of mummification but also advanced knowledge of medicine and
                                        surgery through the so-called trepanation. These mummies were found mainly in
                                        Cerro Colorado, where they carved the rock in the shape of an inverted cup to
                                        store each bundle underground.<br><br>

                                        The city of Ica is the capital of the Region (or department) of Ica, which is
                                        located in southern Peru, located on the river of the same name about 300 km
                                        south of Lima. This city founded in 1563 by the Spanish conqueror Gerónimo Luis
                                        de Cabrera (of Andalusian origin), under the name of Villa de Valverde. It is an
                                        area with an extensive and important historical past, since the first settlers
                                        date back more than 10,000 years.<br><br>

                                        The city was home to many cultures such as the Paracas, Wari, Ica or Nasca.
                                        After its foundation, a good number of religious buildings of great importance
                                        began to be built, and already in the 20th century the majestic Sanctuary of
                                        Luren, one of the best known, was built.<br><br>

                                        Already approaching more current data, until the year 2005, in Ica there was an
                                        estimated population of more than 219,856 inhabitants; however, the city
                                        suffered extensive damage and the loss of a large number of lives during the
                                        earthquake in Peru in 2007. This area is a major agricultural region, where
                                        grapes, cotton, asparagus, olives and other products for consumption are grown.
                                        local and for export. It is known by Peruvians as the land of the sun, and
                                        although the 4 seasons of the year are present, the hot dry climate makes it
                                        feel like summer throughout the year, something that tourists will surely
                                        appreciate (and above all, take advantage of). . Throughout the Ica region and
                                        its surroundings, visitors can visit the Pisco production factories, since this
                                        region would become the traditional source of Peru.<br><br>

                                        The city is also very well connected since it has several access channels, the
                                        best known being the Pan-American Highway. For example, if you want to make the
                                        trip from the city of Lima to Ica (as we have said, there will be an approximate
                                        distance of about 300 km), in just about 4 hours of travel by car you will
                                        already be arriving at your destination.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Ica, cradle of Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Pisco was born in the Ica region at the end of the 16th century, when the locals
                                        of the area began to produce a transparent drink obtained from the distillation
                                        of grapes, the same that they shipped in the port of Pisco to distribute it to
                                        all the riverside areas of the Viceroyalty. From Peru. Researcher Emilio Romero
                                        points out that in 1580 the English pirate Francis Drake raided the port of
                                        Pisco and asked for a ransom for the prisoners he took; the villagers to
                                        complete the rescue paid him with 300 Pisco jars. The first identification of
                                        the drink as Pisco would have been made in 1630 by the Spaniard Francisco López
                                        de Caravantes, when he stated in a manuscript dated 1630 that “the valley of
                                        Pisco continues to be the most abundant of excellent wines in all of Peru. From
                                        there, one that competes with our Sherry, the so-called "Pisco brandy", because
                                        it is extracted from the small grape, it is one of the most exquisite drinks
                                        drunk in the world."<br>
                                    </p>
                                    <h3>Pisco and its commercialization</h3>
                                    <p>
                                        On this point, an important contribution is made by Enrique Witt, a German
                                        merchant who arrived in Peru in 1824. In the diary he left about his travels
                                        through our country, he noted that, when he was in the Quilca Valley (Arequipa),
                                        Together with his companions they drank "wine, pisco and chicha, a fermented
                                        drink made from corn."<br><br>

                                        To further corroborate this information, Witt, upon arriving in Chincha Baja,
                                        notes that “Pisco is the port of Ica, and from here all the country's brandy or
                                        liquor that is produced and distilled in that place is exported. That's where
                                        the name pisco comes from, a word by which brandy is known throughout Peru." In
                                        addition, he described the prices of pisco, as well as its preparation and
                                        transportation. “The commercialization that the people of Ica carry out of the
                                        brandy called pisco, is quite considerable; supply this distillate to all the
                                        departments of northern Peru, while the brandy or liquor produced in the valleys
                                        of Majes, Vitor, Moquegua and others, is consumed in the south and exported to
                                        Bolivia”.<br><br>
                                        <img src="{{ asset('img/galeria/la-comercializacion-del-pisco.webp') }}"
                                            width="100%" alt="Pisco and its commercialization" loading="lazy">
                                        <i>Photo: Pisco and its commercialization</i><br><br>

                                        For his part, the Swedish sailor Carl Johan Skogman, who visited Peru aboard the
                                        “Eugenie” frigate, sent by his government to go around the world between 1851
                                        and 1853, commented on his visit to the port of Pisco: “ There, a brandy is
                                        manufactured on a large scale that is widely accepted throughout the western
                                        coast and is simply called pisco.” The Swiss scientist, Jacob Von Tshudi, who
                                        toured our country between 1838 and 1842, narrated in his book, product of his
                                        research, his impressions of Pisco, indicating that this port "is just a kind of
                                        key to the great city of Ica". and explains that what has given him importance
                                        is the export of spirits that he carries out.
                                    </p>
                                    <h3>El pisco en la actualidad</h3>
                                    <p>
                                        Peru has several companies dedicated to the production of pisco; some of them
                                        with the latest technology, have modern equipment and have hired high-level
                                        specialists in the different fields of production and marketing. This has
                                        allowed not only to recover the level that was had but to overcome it. At an
                                        educational level, it also highlights the creation of institutions such as the
                                        first School of Oenological Engineering, and the Institute of Wine and Pisco,
                                        which has the most modern tasting room in the country; as well as other
                                        specialized schools.<br><br>

                                        Currently, our flagship drink reaches 33 markets in America, Asia and Europe.
                                        The United States is the main one with 46.2% participation, followed by Spain
                                        with 15%.
                                    </p>
                                    <h3>Did you know?</h3>
                                    <ul>
                                        <li>The Pisco Designation of Origin is recognized in 70 countries and has been
                                            awarded countless prizes in the most important liquor and spirits
                                            competitions in the world.
                                        </li>
                                        <li>At the beginning of 2019, the Ministry of Foreign Trade and Tourism
                                            (Mincetur) launched the sector brand "Pisco, Spirit of Peru", a slogan that
                                            will accompany our flag drink in the conquest of world markets.
                                        </li>
                                        <li>In recent years, Pisco exports have shown sustained growth. In 2009
                                            shipments abroad totaled US$1.3 million and in 2018 they accumulated US$5.7
                                            million, growing by 320% in this period.
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
                                    Main Tourist Places of Ica
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Nazca Lines</h3>
                                    <p>
                                        They are geoglyphs that are located in the Nazca desert. To date, the method
                                        used by the ancient populations to create these large-scale pictographs is not
                                        known. The Nazca lines can be viewed from viewpoints or by hiring the overflight
                                        service in the area. They draw attention among the geoglyphs of the hummingbird,
                                        the monkey with nine fingers, and a strange figure known as the owl man that
                                        some people usually identify with the silhouette of an astronaut.
                                    </p>
                                    <img src="{{ asset('img/galeria/Overflight-of-the-Nazca-lines.webp') }}"
                                        loading="lazy" width="100%" alt="Flight over the Nazca lines">
                                    <i>Flight over the Nazca lines</i><br><br>
                                    <h3>Paracas National Reserve</h3>
                                    <p>
                                        It is a natural area of more than three thousand hectares. It is the only
                                        protected area in Peru that has a marine ecosystem. You can access the reserve
                                        and navigate its sea to learn about the diversity of species that inhabit it. By
                                        boat you can visit the Ballestas and San Gallán Islands that are part of this
                                        attraction.
                                    </p>
                                    <h3>The Huacachina</h3>
                                    <p>
                                        It is an oasis in the middle of the desert. You can practice different
                                        activities in it, such as boating on the lagoon. You can also take tube rides
                                        and dare to slide on sandboards through the desert.
                                    </p>
                                    <h3>Tambo Colorado</h3>
                                    <p>
                                        They are Inca archaeological remains. It receives the name "colorado" due to the
                                        predominance of red in its structures. Its degree of conservation is impressive
                                        and allows us to understand how the Incas of the Peruvian coasts lived. Tambo
                                        Colorado is located in Pisco.
                                    </p>
                                    <h3>Cañón de los perdidos</h3>
                                    <p>
                                        The tourist attraction of Ica that was discovered in 2011. The canyon is 600
                                        meters deep and has small lagoons in its deepest part. It is reached after 2
                                        hours of travel from the capital of Ocucaje. It has been compared to the
                                        Colorado Canyon in the US In Ica there are many more places to visit. In the
                                        same city you can visit architectural and historical attractions such as the
                                        Plaza de Armas. It is also possible to plan a tour of the main vineyards in the
                                        region and taste its flagship liquor: pisco. If you want to know the mysteries
                                        of Ica, a visit to Cachiche is also a good option, the "witches" of Cachiche
                                        will tell you the legend of their town and will be encouraged to read your luck.
                                    </p>
                                    <img src="{{ asset('img/galeria/canon-de-los-pasos-perdidos.webp') }}"
                                        width="100%" loading="lazy" alt="Cañon de los perdidos, Ica">
                                    <i>Photo: Cañon de los perdidos</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Activities to do in Ica
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The first thing is to visit the city center, here you can walk the rustic
                                        streets and appreciate a bit of its history embodied in colonial architecture.
                                        Upon reaching the <strong>Plaza de Armas</strong> you can visit the Municipal
                                        Palace with its
                                        beautiful portals, on the second floor you can see the Town Hall where you can
                                        see ornamental figures made of wood that represent the seasons of the year.

                                        The Cathedral is also in the Plaza de Armas, right at the intersection of
                                        Bolívar and Libertad streets. It was built in the 18th century and has undergone
                                        several repairs, for which its façade has been changing. You can also visit the
                                        Regional Museum where you can see archaeological remains of the different
                                        cultures that inhabited the area, as well as canvases and furniture from the
                                        viceroyalty and republican times.<br><br>

                                        On the other hand, the <strong>Museum of Stones</strong> is also an interesting
                                        place where
                                        engraved stones are exhibited in which you can appreciate the life that the
                                        ancient inhabitants of the region led. After taking a walk through the center of
                                        the city of Ica, it is recommended to visit the Laguna de la Huacachina, a
                                        beautiful oasis that is located 5 km south west of the city of Ica, which can be
                                        reached by car in just 10 minutes. . In <strong>Huacachina</strong> if you like
                                        adventure and
                                        sports, sandboarding is recommended, you will enjoy a pleasant moment sliding
                                        through the sand, you can also access the tubular cars that will take you for a
                                        ride in the dunes at high speed.<br><br>

                                        Another majestic place to visit is the <strong>Paracas National Reserve</strong>
                                        where sea lions,
                                        Humboldt penguins, dolphins, flamingos and a large number of birds live. During
                                        the walk through the reserve you can see the impressive Chandelier which will
                                        leave you amazed above all by the enigma it contains, other works of nature such
                                        as the Cathedral and the beautiful beaches will also be in sight.
                                    </p>
                                    <h3>The Pisco Route</h3>
                                    <p>
                                        Ica has more than 85 artisanal wine and pisco wineries where these high-quality
                                        drinks are made. If you like to live a different experience, this route is
                                        undoubtedly for you. You will be able to be in the same place where the drinks
                                        are made, from touring the grape plantations to doing a small tasting of the
                                        different drinks that are made on the spot.<br><br>

                                        Here is a list of some of the main wineries:
                                    </p>
                                    <ul>
                                        <li>The Caravedo of Ica</li>
                                         <li>Lazo Artisanal Winery</li>
                                         <li>The Taster</li>
                                         <li>Lovera Artisanal Winery</li>
                                         <li>Happy View</li>
                                         <li>Ocucaje Winery</li>
                                         <li>Tacama Winery</li>
                                         <li>Santiago Queirolo</li>
                                    </ul>
                                    <h3>Important festivities of Ica</h3>
                                    <ul>
                                        <li><strong>February:</strong> Festival of the carnivals of Candelaria. From February 13 to 15 Feast of the Mermaid.</li>
                                        <li><strong>March:</strong> From March 8 to 18 International Harvest Festival. Easter movable date.</li>
                                        <li><strong>April:</strong> Easter movable date.</li>
                                        <li><strong>May:</strong> FFiesta de las Cruces Various dates. Second week of May National Pisco Week.</li>
                                        <li><strong>September:</strong> ÚLast week of September City tourist week.</li>
                                        <li><strong>October:</strong>First Thursday and third Monday of October Feast of the Lord of Luren.</li>
                                        <li><strong>November:</strong> November 1 Feast of All Saints.</li>
                                        <li><strong>December:</strong> December 25 Paseo de los Negritos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Popular tours</h2>
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
                            <a href="camino-inca-cantera-peru" class="boton-card">More details</a>
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
                            <a href="#" class="boton-card">More details</a>
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
                            <a href="viajar-a-puno" class="boton-card">More details</a>
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
                            <a href="vilcabamba" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
