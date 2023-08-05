@extends('layouts.appen')

@section('content')
    @include('layouts.menu')
    <div class="pisco">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">The city of Pisco</h1>
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
                                <a>Pisco</a>
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
                                    Pisco, cradle of the flag and door of freedom
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-center">
                                        <i>Pisco cradle of the flag and door of freedom!
                                            Every year the landing of the liberating expedition under the command of
                                            General Don José de San Martín in the Bay of Paracas is celebrated with
                                            patriotic fervor. Because in Pisco the freedom of Peru was born...
                                        </i><br><br>
                                        <p>
                                            The landing of General José de San Martín in Paracas, near the port of
                                            Pisco, on September 8, 1820, is one of the most important milestones in the
                                            history of Peru. It represented, for the Peruvian people, the connection
                                            point and the common desire to feel part of the liberating army and thus
                                            join the independence cause. A day earlier, on September 7, 200 years ago,
                                            General José de San Martín (1778-1850), in command of the Liberating
                                            Expedition, reached the shores of Paracas Bay. <br><br>
                                            The liberating army was made
                                            up of more than 4,000 men, including patriotic Argentines, Chileans and
                                            Peruvians. The objective was to support the Peruvian patriots in their
                                            struggle to free themselves from Spanish rule and seal the independence of
                                            the Spanish colonies in South America. The first flag of Peru was born in
                                            Pisco, thanks to a provision of the Argentine liberator general, José de San
                                            Martín, who thus gave a description of how the first national symbol of
                                            Peruvians should be made:
                                        </p>
                                        <div class="text-center">
                                            <i>"The national flag of the country shall be adopted as one of silk or
                                                canvas, eight feet long and six wide, divided by diagonal lines into
                                                four fields, white both at the upper and lower ends, and red on the
                                                sides; with an oval laurel wreath, and within it a Sun, rising from
                                                behind steep ridges rising above a calm sea.The escutcheon may be
                                                painted, or embroidered, but each object retaining its colour: namely,
                                                the laurel wreath It must be green, and tied at the bottom with a
                                                gold-colored ribbon; the upper part, which represents the firmament, is
                                                blue; the Sun with its rays is yellow; the mountains are dark brown, and
                                                the sea is between blue and green. ”.</i>
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
                                    History of the province of Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>What does the word pisco mean?</h3>
                                    <p>
                                        Pisco, a Quechua name that means “bird”, is a place that was within the
                                        territory of the pre-Hispanic Paracas and Nazca cultures, even around 1000 BC.
                                        c. the first sedentary settlement was produced due to the enormous marine riches
                                        that the ancient inhabitants collected. In that sense, its cultural and
                                        historical vestiges are extensive.
                                    </p>
                                    <h3>How was the city of Pisco born?</h3>
                                    <p>
                                        With the establishment of the viceroyalty of Peru, the port of Pisco served as a
                                        point of departure for the quicksilver of Huancavelica and the pisco that was
                                        produced in the nearby valleys. During the government of the viceroy of Peru
                                        Pedro Álvarez de Toledo y Leiva, Marquis of Mancera, Pisco was founded as a
                                        "villa", under the name of <strong>"Villa de San Clemente de Mancera"</strong>,
                                        although
                                        popularly it was always known as "Villa de Pisco". . It was an ancient
                                        indigenous seat related to the extraction of guano from the islands, highly
                                        valued as a fertilizer in pre-Hispanic Peru.<br><br>

                                        In 1820, the Liberating Expedition led by <strong>José de San Martín</strong>
                                        and Bernardo
                                        O'Higgins Riquelme arrived in Pisco, landing in the Bay of Paracas, where the
                                        first flag and the first national coat of arms of Peru were created. In
                                        consideration of the above, in 1832, after an agreement of the Departmental
                                        Board of Lima in order for the Villa de Pisco to receive the title of "Villa y
                                        Puerto de la Independencia", the Congress of Peru established by law that it
                                        would be called with that name, extending such qualification both to the town
                                        and to the riverside population.<br><br>

                                        In 1868 the Villa de Pisco was designated capital of the new province of Chincha
                                        and in 1898 it was elevated to the rank of "city". In this regard, in 1947, the
                                        historian from Pisque Mamerto Castillo Negrón stated that Pisco had received in
                                        its history two additions that did fair honors to its merit: first, that it was
                                        "Villa y Puerto de la Independencia" and, second, the recognition as capital of
                                        Province.<br><br>

                                        On August 15, 2007, the city was shaken at 6:40 p.m. by a strong earthquake of
                                        8.0 degrees on the Richter scale that left it in ruins, in said tragedy 519
                                        people died and 16,000 houses were destroyed according to figures from INDECI
                                        (Instituto National Civil Defense). Currently, the construction of different
                                        buildings in the city is planned, which includes the renovation of the airport
                                        as well as the port of Pisco.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Pisco, as a tourist destination
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Do you want to know a little more about the city of Pisco? Are you organizing a
                                        trip to Paracas and Ballestas Islands and need more information about these
                                        wonderful places on the southern coast of Peru? Suffice it to say that Pisco is
                                        one of the most important cities in Peru, since it not only saw the birth of the
                                        emblematic Peruvian national drink, pisco, but it was also the cradle of the
                                        first flag of Peru, created on the shores of Paracas. <br><br>
                                        By the liberator José de
                                        San Martín. Pisco city comprises two zones: “Pisco Pueblo”, which includes the
                                        historic downtown area and the districts bordering the South Pan-American
                                        highway; “Pisco Playa”, which covers the districts and the areas surrounding the
                                        seashore. Discover more about Pisco in the following lines!<br><br>
                                        <img src="{{ asset('img/galeria/turists-places-in-Pisco.webp') }}"
                                            alt="Ballestas Islands" width="100%" loading="lazy">
                                        <i>Ballestas Islands</i><br><br>

                                        Located 231 kilometers south of the city of Lima, the province of Pisco is one
                                        of the favorites for tourists who visit the Ica region. It houses the
                                        <strong>Paracas
                                            National Reserve</strong>, as well as other attractions of captivating
                                        landscape and
                                        natural beauty that have the<strong>Safe Travels</strong> seal as biosafe
                                        destinations. And it
                                        also has a unique historical heritage as it was the scene of the landing of the
                                        liberating expedition in 1820, led by General José de San Martín.<br><br>

                                        Although this year the traditional Tourist Week will not be held due to
                                        prevention of the possibility of a third wave of covid-19, it is possible to
                                        visit the province of Pisco thanks to its proximity to Lima and enjoy a few days
                                        of its magnificent natural settings, headed through the Paracas National
                                        Reserve, the chandelier, the Ballestas Islands, the Julio C. Tello museum, the
                                        Morón oasis, tour its historic Plaza de Armas, and savor the delights of its
                                        gastronomy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Main places and tourist activities in Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Ballestas Islands</h3>
                                    <p>
                                        The Ballestas Islands are part of one of the ideal protected natural areas to
                                        visit and learn about, because they offer a special connection due to their
                                        natural beauty and landscape, in addition to having a biodiverse coastal marine
                                        fauna and historical value in the development of the country's economy. There
                                        you can see sea lions, penguins, guano birds and other resident species and
                                        visitors to this set of islands that are part of the Paracas National Reserve.
                                        <br><br>

                                        The tourist tour inside the Ballestas Islands protected natural area will be
                                        carried out maintaining a distance of no less than 50 meters between boats. For
                                        biosafety purposes and compliance with the established parameters, the cargo
                                        capacity within the Ballestas Islands tourist route will be 45 boats per day.
                                    </p>
                                    <h3>El Candelabro</h3>
                                    <p>
                                        Famous geoglyph also called <strong>"Three Crosses" or "Trident"</strong>, is
                                        located on a sand
                                        hill in the northern sector of the Paracas peninsula. The figure measures 177
                                        meters long and 54 meters wide. It is estimated that it is about 2,500 years
                                        old. Its meaning remains a mystery, although there are theories that link it to
                                        the Nasca and Pampas de Jumaná geoglyphs.<br><br>

                                        The work of making this <strong>geoglyph</strong> in the sand was very precise
                                        considering that
                                        the area is very windy. The direction of <strong>El candelabro</strong>,
                                        together with the wind
                                        and sea water, have formed a thick crystalline layer that has kept it intact
                                        since its creation. To appreciate the Chandelier you have to navigate a certain
                                        distance from the coast, which is why it is part of the circuits to visit the
                                        Ballestas Islands.
                                    </p>
                                    <img src="{{ asset('img/galeria/Paracas-Candelabra.webp') }}" width="100%"
                                        alt="Candelabro Pisco" loading="lazy">
                                    <i>The chandelier: measures 177 meters long and 54 wide</i><br><br>

                                    <h3>La Catedral</h3>
                                    <p>
                                        It is an important rock formation that is 28 to 40 million years old and
                                        resembled, as its name indicates, a gigantic cathedral. The partial collapse
                                        that it suffered in the earthquake that devastated Pisco in 2007 has not limited
                                        the majesty of the landscape, limited the majesty of the landscape that can be
                                        seen from there. From this natural viewpoint you can see the characteristic
                                        fauna of the cliffs such as boobies, tendrils, chuitas, black oystercatchers,
                                        sea otters and dolphins.
                                    </p>
                                    <h3>Raspon and La Mina Beaches</h3>
                                    <p>
                                        on the most visited beaches of the Paracas National Reserve due to its great
                                        scenic beauty, where somewhat elevated rocky cliffs, calm and crystalline waters
                                        and fine white sand stand out.<br><br>

                                        The name La Mina comes from an old coal mine that existed at the southern end of
                                        the beach. Getting to Raspón was, until a while ago, a somewhat risky adventure,
                                        since visitors had to descend a steep rocky slope, hence its name, since those
                                        who fell in the attempt ended up with some scrapes. Today access is simple and
                                        does not imply any problem.
                                    </p>
                                    <h3>Lagunillas Beach</h3>
                                    <p>
                                        Playa Lagunillas Sandy beach with small rock formations. Visitors can visit the
                                        nearby fishermen's cove, where they land fish such as cabrilla, cabinza, bonito,
                                        mackerel and mackerel, among others, as well as mussels, limpets, chanque,
                                        octopus, crab, etc. Before reaching Lagunillas, you will cross a Sernanp control
                                        and surveillance post with park rangers from the Paracas National Reserve.
                                    </p>
                                    <h3>Yumaque Beach</h3>
                                    <p>
                                        It is a small crescent-shaped cove that is approximately 2 kilometers long. Its
                                        name comes from Quechua and means "place where it is removed by hand", since it
                                        is possible to extract small molluscs known as "palabritas".
                                        <br><br>
                                        The giant penguin, called Inkayacu paracasensis, in honor of the Paracas
                                        National Reserve, was discovered in this area. There is a replica of this
                                        species in the Interpretation Center.
                                    </p>
                                    <h3>Playa Roja</h3>
                                    <p>
                                        The reddish color of the shore gives the place a unique beauty. This color is
                                        due to its proximity to the Punta Santa María massif, formed by rocks that
                                        contain solidified magma inside. The action of the waves on the massif drags the
                                        reddish fragments of the rocks, which accumulate on the shore, thus giving rise
                                        to the name of the beach.
                                    </p>
                                    <img src="{{ asset('img/galeria/playa-roja-pisco.webp') }}" alt="Playa roja"
                                        width="100%" loading="lazy">
                                    <i>Playa roja</i><br><br>
                                    <h3>Julio C. Tello Museum</h3>
                                    <p>
                                        The Julio C. Tello Site Museum is located in the Paracas National Reserve, at
                                        kilometer 27 of the Pisco-Puerto San Martín highway, 22 kilometers south of the
                                        city of Pisco.<br><br>

                                        It houses 120 pieces, including ceramics, fabrics and utensils from the Paracas
                                        civilization, which ranges from the initial periods, around 700 years BC, to 200
                                        AD. about.<br><br>

                                        Likewise, the funerary bundles that contain bone remains in a good state of
                                        conservation stand out. There are also deformed skulls that show the surgical
                                        operations known as "trepanations" and demonstrate the great knowledge of this
                                        ancient culture in the field of medicine.<br><br>

                                        The cultural venue also has a projection room for audiovisual material and a
                                        Temporary Exhibition Room. The first environment that provides an introduction
                                        to the Paracas civilization, the arid environment they inhabited (the Paracas
                                        peninsula), as well as their worldview and utilitarian material objects, such as
                                        their famous textiles of extraordinary technique and color, ceramics and various
                                        instruments.<br><br>

                                        The Julio C. Tello Site Museum was awarded, in October 2018, as the "Best museum
                                        in Latin America", in the fifth edition of the Leading Culture Destinations
                                        Awards, held at the South Kensington Club, in the city of London.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    10 curious facts that you did not know about Peruvian pisco
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Peruvian pisco production broke a record in 2016</h3>
                                    <p>
                                        Historical. This is how the Ministry of Production called the amount of pisco
                                        that was manufactured in Peru during 2016. The portfolio reported that the more
                                        than 10 million liters produced last year broke the production record in
                                        previous periods. In addition, exports increased by 12.6% in volume, especially
                                        those that reach new destinations such as India, Israel, Belgium, Norway and the
                                        Dominican Republic.
                                    </p>
                                    <h3>2. Chile is the main export country for Peruvian pisco</h3>
                                    <p>
                                        Despite the quarrel between Chile and Peru over the name of pisco –and which
                                        reissued its last battle at the end of May for participation in an international
                                        contest–, the southern country is the main export destination for the drink
                                        produced in Peruvian territory. In fact, last year sales to that country grew by
                                        13.5%.
                                    </p>
                                    <h3>3. Curiously, pisco is not the alcoholic drink that Peruvians consume the most.
                                    </h3>
                                    <p>
                                        Last February, it was revealed that pisco in its different presentations, such
                                        as pisco sour or chilcano, managed to position itself as the third most consumed
                                        beverage by Peruvians, after beer and wine.
                                    </p>
                                    <h3>4. Pisco is Cultural Heritage of Peru</h3>
                                    <p>
                                        Since April 7, 1988, the country declared the word pisco cultural heritage.
                                        However, the regulation of this drink had begun in 1932 when a supreme
                                        resolution was issued limiting the use of the name grape brandy and requiring
                                        labels.<br><br>
                                        In 1940, "the importation of cane alcohol" into the "wine-growing" area of Pisco
                                        was prohibited. By 1946, the denominations of pisco, grape brandy and cognac
                                        began to be differentiated. In 1990, it was finally declared that pisco "is a
                                        Peruvian denomination of origin for the products obtained by the distillation of
                                        wines derived from the fermentation of fresh grapes, on the coast of the
                                        departments of Lima, Ica, Arequipa, Moquegua and the valleys. of Locumba, Sama
                                        and Caplina, in the department of Tacna
                                    </p>
                                    <img src="{{ asset('img/galeria/la-comercializacion-del-pisco.webp') }}" width="100%"
                                        alt="Marketing of Pisco" loading="lazy">
                                    <i>Marketing of Pisco</i><br><br>
                                    <h3>5. Pisco sour is so popular that it also has its own national day</h3>
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
                                    <h3>6. The first pisco museum in Peru opened its doors only four years ago
                                    </h3>
                                    <p>
                                        Paracas, in the south of Peru, opened the doors of the first Pisco Museum in the
                                        country in February 2013. The place has 10 exhibition halls, one of which
                                        recognizes all those who contributed to the dissemination of pisco and its
                                        culture, as well as another dedicated to the winners of national and
                                        international competitions. There is also a historical tour of the process that
                                        the drink has had and visitors can taste and buy it.
                                    </p>
                                    <h3>7. Lima is the region with the most pisco producing companies</h3>
                                    <p>
                                        It was reported that until 2016 there were a total of approximately 523
                                        pisco-producing companies, of which 48.8% are in Lima. It is followed by the Ica
                                        region with 34.6%. As well as exports and production, the manufacturers of this
                                        drink also increased compared to 2015: 15%.
                                    </p>
                                    <h3>8. The band Café Tacuba had its own bottle of pisco, courtesy of the fans
                                    </h3>
                                    <p>
                                        The Peruvian fans of Café Tacuba wanted to give the band a very special gift,
                                        when it celebrated its first 20 years of life. In July 2009, the group was on a
                                        musical tour for the anniversary and in Peru they prepared a bottle of pisco
                                        with a label inspired by the members.<br><br>

                                        As reported by Andina at the time, the chosen brand was<strong> "Old
                                            Tonel"</strong> and the
                                        presentation included "a luxurious label with the faces of all the members of
                                        the band on a white background and the official logo of the anniversary." On the
                                        back was the history of Peruvian pisco and its origin. “This is our show of
                                        affection so that the boys can celebrate these 20 years as it should be. It is a
                                        Peruvian gift and we decided on this because we know that the band is a fan of
                                        this liquor,” Roberto Orellana, president of the Café Tacuba fan club in Peru,
                                        explained to Andina at the time.
                                    </p>
                                    <h3>9. The first vineyards for pisco came from the Canary Islands</h3>
                                    <p>
                                        The story of the arrival of pisco and vineyards in Peru is attributed to the
                                        <strong>Spanish conquerors</strong> who reached the lands inhabited by the Incas
                                        in the mid-16th
                                        century. According to the story collected by a law of the Arequipa region,
                                        historians agree that "the first grapes and the first vineyard crops were
                                        brought by the Marquis Francisco de Caravantes, most likely from the Canary
                                        Islands."<br><br>

                                        The regulations add that in a few decades this liquor became the favorite of the
                                        crowds and an element of socialization. So much so that for the following
                                        century the production of wine and pisco "reached large-scale levels in the
                                        regions of Ica, Lima, Moquegua, Tacna" and Arequipa, "developing an intense
                                        viticultural activity during the 17th and 18th centuries."
                                    </p>
                                    <h3>10. There is not just one type of pisco:</h3>
                                    <p>The National Pisco Commission explained that there are four types of pisco:</p>
                                    <ul>
                                        <li><strong>Pure Pisco:</strong> obtained exclusively from a single pisco grape
                                            variety.</li>
                                        <li><strong>Mosto verde Pisco:</strong> obtained from the distillation of fresh
                                            musts from Pisco grapes with interrupted fermentation.</li>
                                        <li><strong>Pisco acholado:</strong> ppisco obtained from three kinds of
                                            mixtures.
                                            <ul>
                                                <li>Pisco grapes, aromatic and/or non-aromatic.</li>
                                                <li>Aromatic and/or non-aromatic pisco grape musts..</li>
                                                <li>Fully fermented fresh musts (fresh wines) from aromatic and/or
                                                    non-aromatic Pisco grapes.</li>
                                            </ul>
                                        </li>
                                        <li>Piscos from aromatic and/or non-aromatic pisco grapes.</li>
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
