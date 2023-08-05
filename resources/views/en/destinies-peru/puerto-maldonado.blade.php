@extends('layouts.appen')

@section('content')
    @include('layouts.menu')
    
    <div class="puerto">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">The heart of the Peruvian jungle</h1>
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
                                <a>Puerto Maldonado</a>
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
                                    Madre de Dios, land of biodiversity
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        This region, located in the southeast of Peru, keeps nature in its purest state.
                                        Trees that hug each other, while herds of monkeys run quickly through them. And
                                        while you appreciate this unique spectacle, you listen in the background to the
                                        melodious song of the macaws that nest in this area. Your first stop will most
                                        likely be in the city of Puerto Maldonado, the capital of Madre de Dios. Here,
                                        you will find an extensive hotel offer so that you can choose the ideal place
                                        according to your needs. although it is preferable to have a lodging already
                                        reserved before arriving at this destination. Once installed, Puerto Maldonado
                                        offers you the opportunity to get to know the most beautiful places in the
                                        Peruvian jungle.
                                    </p>
                                    <h3>Where biodiversity is felt</h3>
                                    <p>
                                        All of the above may have shocked you. But, honestly, you still haven't seen the
                                        best of Madre de Dios, three huge sanctuaries await you, full of magic and
                                        nature. The third largest region of Peru, keeps in its territory the
                                        <strong>Manu</strong>
                                        National Park, recognized as a core zone of the Biosphere Reserve by UNESCO
                                        (1977) and declared a Natural Heritage of Humanity (1987).<br><br>

                                        This natural space is not only a sight to behold. It is also considered a focus
                                        of concentration of flora and fauna species, many of them unique. For example,
                                        in its territory lives the national bird of Peru, the famous cock of the rocks.
                                        Even in its space there are still populations grouped into 30 different peasant
                                        communities, who still practice ancient techniques.<br><br>
                                        <img src="{{ asset('img/galeria/biodiversidad-de-la-selva-peruana-madre-de-dios.webp') }}"
                                            width="100%" alt="Biodiversity of the Peruvian jungle"
                                            loading="lazy"><br><br>

                                        Likewise, the Tambopata National Reserve and the Bahuaja Sonene National Park
                                        are at your disposal. The first of those mentioned is described as a
                                        paradisiacal place, where nature merges with you after each step you take. This
                                        protected nature reserve is considered globally as one of the most biologically
                                        diverse. At the same time, it is not only a necessary trip for biology lovers,
                                        it is also for adventurers: travel to the Sandoval and Sachavacayoc lakes, where
                                        you can take a boat ride and witness the macaw, chuncho and colorado clay licks,
                                        in their purest state.<br><br>

                                        The not so explored Bahuaja Sonene National Park is home to a great
                                        biodiversity: you will find hundreds of mammals, reptiles and fish, almost a
                                        thousand species of birds and more than 20 thousand species of plants. It is
                                        home to incredible species such as the marsh deer, maned wolf, black lizard and
                                        giant anteater.<br><br>

                                        If you want to connect with nature, Madre de Dios is the right place to become
                                        one with the environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Historical review of Puerto Maldonado
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The department of Madre de Dios was created on December 26, 1912 from the
                                        territories of Cusco and Puno. It receives its name from the Madre de Dios
                                        River, from whose basin most of the rivers in the region are tributaries. The
                                        petroglyphs on the Shinkebeni River (Pusharo Petroglyphs), indicate a very
                                        ancient presence of human beings. <br><br>
                                        It is believed that the Arawaks (or their predecessors) arrived in migrations,
                                        and from them many ethnic groups were derived. Some tribes, such as the
                                        Machiguenga, survive to this day. What is now known as Madre de Dios was part of
                                        the ancient Inca Empire, in the region known as Antisuyo. Historians agree that
                                        the conquest of this region was difficult for the Incas, as they had to face
                                        brave tribes that knew the area. In the area of ​​the Nistron river basin there
                                        are also the ruins of Mameria, an Inca settlement, which was discovered in
                                        1979.<br><br>

                                        During the colony, Spanish expeditions entered with tragic results for the
                                        Europeans. Finally, in 1861, Colonel Faustino Maldonado explored the entire
                                        territory and in 1890; Carlos Fermín Fitzcarrald discovered an isthmus that
                                        joined the basins of the Ucayali and Madre de Dios rivers.<br><br>
                                        During the following decades numerous adventurers and merchants exploited the
                                        forests, eager for rubber and gold. From 1915, due to the persistence of the
                                        Dominican missionaries, the local tribes began to accept civilization. This has
                                        not always been good for them, as tribes like the Harakmbet have abandoned many
                                        of their traditional instruments, relying heavily on the city dwellers. However,
                                        even today there are groups in total physical and cultural isolation.<br><br>

                                        During this century, there has been strong pressure on ecosystems due to the
                                        exploitation of natural resources. Especially by gold mining (mostly illegal).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Manu National Park
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        The Peruvian Amazon is never shown as openly as in the Manu National Park, which
                                        is considered a World Heritage Site.<br><br>

                                        In Manu it is common to find nature in its purest form, an average of 221
                                        species of mammals, thousands of birds and a great diversity regarding the
                                        climate from the low tropical jungle to the frigid punas of more than 4000
                                        meters above sea level. In the Manu live native populations that preserve their
                                        traditions, some are completely isolated from civilization on a voluntary basis.
                                        <br><br>

                                        The manu is located to the east of the eastern mountain range of the Andes and
                                        includes part of the departments of Cusco and Madre de Dios. It can be reached
                                        by air or by land. The most advisable thing is to take the organized and
                                        authorized services of an organized travel agency such as Pacha Mama Spirit.
                                    </p>
                                    <img src="{{ asset('img/galeria/Macaws-of-the-peruvian-jungle.webp') }}"
                                        width="100%" loading="lazy" alt="Manu Macaws">
                                    <i>Macaws of the Manu National Park</i><br><br>
                                    <h3>Description of the Manu National Park</h3>
                                    <p>
                                        Manu is the only place in the world where three different ecosystems are under
                                        protection, differentiated by:
                                    </p>
                                    <ul>
                                        <li>The puna, a high-altitude area with little vegetation, similar to the
                                            tundra, where a type of yellowish grass called ichu grows, dotted with deep
                                            blue lakes and populated by llamas with flat and hairy ears.</li>
                                        <li>The cloud forest, a world of mystery always bathed in intense fog and
                                            populated by wild roosters of an intense and striking purple, spectacled
                                            bears and abundant ferns that hang from the trees like endless and dense
                                            walls.</li>
                                        <li>Low-lying areas of tropical forest, inhabited by huge black alligators,
                                            river otters or giant otters, thirteen different species of monkey and more
                                            than a thousand varieties of birds (10% of those in the world).</li>
                                    </ul>
                                    <p>
                                        In the highest areas the temperature ranges between 3ºC and 6ºC, while in the
                                        lowest part the annual average reaches approximately 24ºC.
                                    </p>
                                    <h3>Tourist attractions of Manu</h3>
                                    <p>
                                        The Manú National Reserve has always enjoyed protection thanks to how difficult
                                        it is to reach it, in addition to the presence of different indigenous tribes.
                                        Currently four different ethnic groups live in the Manú, two of them still
                                        remain isolated from any contact with civilization. It has an area of
                                        1,716,295.22 hectares. With an extension equivalent to half of Switzerland, the
                                        Manú is probably the richest protected area in terms of species on the entire
                                        planet.
                                    </p>
                                    <h3>Flora of the Manu:</h3>
                                    <p>
                                        The great variation of altitudinal floors allows the existence of a great
                                        variety of species and forms of plants, with an estimated 2,000 to 5,000 species
                                        of flowering plants. As a reference, 179 species of orchids have been registered
                                        in the cloud forest.
                                    </p>
                                    <h3>Manu Wildlife:</h3>
                                    <p>
                                        The great diversity of ecosystems has allowed the development of one of the
                                        largest samples of fauna diversity in the world. The Manú National Park is home
                                        to a wide variety of birds, mammals, reptiles and amphibians, as well as
                                        invertebrates. In mammals, 200 species have been identified (around 40% of
                                        mammals in all of Peru). Birds constitute an extremely important population and
                                        of an admirable variety that exceeds 1000 species.<br><br>

                                        When visiting some areas suitable for tourists, you can discover a large number
                                        of reptiles, such as six-meter-long alligators, or land and marine mammals, even
                                        fish and amphibians.<br><br>

                                        Among the mammals that inhabit the Manu, the marmoset monkey stands out,
                                        considered the smallest in the world. These primates are usually very friendly
                                        with visitors and even get up to mischief. Another of the most loved and sought
                                        after species by tourists is the giant otter or river otter. This fun and
                                        playful mammal is unfortunately in danger of extinction. Previously, the wolf
                                        was found in practically all the rivers of the Amazon basin. Now, most of those
                                        who remain alive are inside the Manu.
                                    </p>
                                    <h3>Archaeological remains of Manu</h3>
                                    <p>
                                        The Manu not only stands out for its natural charm, but also for its valuable
                                        archaeological remains. Relics and vestiges have been found in it, some still
                                        under study, which demonstrate the human presence in this territory since
                                        ancient times. The best known are the petroglyphs of Patiacolla, considered the
                                        largest in Peru. Another important archaeological site in this area is the ruins
                                        of Mameria.
                                    </p>
                                    <h3>The greatest biodiversity in the world</h3>
                                    <p>
                                        Recognized as the protected area with the greatest biological diversity in the
                                        world by UNESCO, the Manu National Park is home to more than a thousand species
                                        of birds and nearly two hundred mammals. Much of this abundant fauna is due to
                                        its privileged location: it covers practically all altitude levels, from the
                                        Puna of Cusco to the Amazonian plain.
                                    </p>
                                    <h3>A bird paradise</h3>
                                    <p>
                                        The more than a thousand species of birds recorded in Manu represent 25% of the
                                        total that inhabit South America and about 10% of all species in the world,
                                        according to the United Nations Protected Areas Program. For this reason, the
                                        park is one of the most recommended places for bird watching fans.<br><br>

                                        Because of their showiness, parrots and macaws are the most precious species and
                                        also the most threatened. The large red macaw is one of the most beautiful birds
                                        that can be found in this place: it has a large head of orange feathers combined
                                        with the blue and green of its wings and tail. Among the parrots, the
                                        blue-headed one stands out, only thirty centimeters long.
                                    </p>
                                    <h3>Home of the natives</h3>
                                    <p>
                                        The basins of the Alto Madre de Dios and Manú rivers are traditional settlement
                                        areas for various indigenous groups, most of whom remain voluntarily isolated,
                                        and who belong to different linguistic families. The best known are the
                                        Machiguenga, Piro, Yora and Yaminahua. The relationship that these settlers
                                        maintain with modernity is very limited, some of them have even never had
                                        contact with the outside world. The vast majority of them are organized in
                                        native communities; others live in voluntary isolation, apparently rejecting all
                                        contact with modern society.<br><br>

                                        The economic activity of these communities is limited to hunting, fishing,
                                        gathering and an incipient agriculture. In this way, they maintain their
                                        ancestral traditions and wildlife style since they are the only people
                                        authorized to exploit the natural resources provided by the park. Currently,
                                        there are about 50 thousand inhabitants distributed in approximately thirty
                                        communities.
                                    </p>
                                    <img src="{{ asset('img/galeria/Centro-amaznico-de-antropologia.webp') }}"
                                        width="100%" loading="lazy" alt="Amazon Anthropology Center">
                                    <i>Amazonian Center for Anthropology and Practical Application</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Main tourist places of Madre de Dios
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Manu National Park</h3>
                                    <p>
                                        Located between the provinces of Paucartambo and La Convencion in the department
                                        of Cusco, this park contains a total of 1,884,200 hectares of pure nature and a
                                        pleasant environment, in the same place live an endless number of colorful birds
                                        of variable species, the site lends itself to to be able to take photos and
                                        record videos of all kinds because of the beauty it has.<br><br>

                                        It is the second national part of the country with the largest number of bird
                                        species, more than 860 in total which are protected and sheltered. Tourists can
                                        camp in the park, campfires and garbage remains are prohibited in the area. It
                                        is essential that people wear comfortable clothing, insect proof clothing and
                                        enough drinking water for the journey.<br><br>

                                        The entrance to the park is totally free, it is not necessary to cancel or pay
                                        to enjoy a pleasant and unique atmosphere in the province. There are excursions
                                        with trained guides who know the most beautiful places in the park itself and
                                        the surprises it has for its visitors.
                                    </p>
                                    <h3>2. Pampas del Heath National Sanctuary</h3>
                                    <p>
                                        It comprises a total of 102,109 hectares of pure beauty and large natural
                                        territories, where there are many species of fauna and flora, it is considered a
                                        sacred sanctuary for the animals that live there and its importance for the
                                        country. Among them the swamp deer, inhabited only in this unique sanctuary in
                                        all of Peru.<br><br>

                                        Apart from the deer, you can enjoy the large number of birds that live there,
                                        among them the famous colorful macaws, according to the story, when people are
                                        touched by the macaws, the blessed souls of the sanctuary offer them the
                                        blessing and protection through the bird, which for them is emblematic.<br><br>

                                        The national sanctuary of the Pampas del Hearth is available at all times of the
                                        year for those who wish to visit it. As advice for tourists, comfortable
                                        clothing, light footwear, enough drinking water, insect repellent and a good
                                        camera to capture the beauty are undesirable. unique to the place. Totally free,
                                        it does not require an entrance fee to enjoy said sanctuary.
                                    </p>
                                    <h3>3. Tambopata Candamo Reserved Zone</h3>
                                    <p>
                                        As its name indicates, it is a reserved area where its only arrival is through
                                        waterways, or through the Maldonado race. It has a total of 1,400,000 hectares
                                        of great impact and beauty, awaiting the arrival of tourists to leave them
                                        shocked with all the surprises that the reserved area has.<br><br>

                                        It is considered a paradise for butterflies, since it has a total of 1,300
                                        species of butterflies throughout its territory. It is the area in all of Peru
                                        with the most diversity of animals in their natural habitat, jaguars,
                                        alligators, river otters, capybara otters, among others, each and every one of
                                        these are protected by the nation. The reserved area of ​​Tambopata Candamo is
                                        available throughout the year, there are private organizations that allow, with
                                        the permission of the nation, private entrance to the area and tourism without
                                        any problem, it is essential to wear appropriate clothing and footwear, it is
                                        prohibited to make fires and dispose of rubbish on site.
                                    </p>
                                    <img src="{{ asset('img/galeria/Lugares-turísticos-de-Puerto-Maldonado-Reserva-Tambopata-Candamo.webp') }}"
                                        width="100%" loading="lazy" alt="Tambopata Candamo Reserved Zone">
                                    <i>Tambopata Candamo Reserved Zone</i><br><br>
                                    <h3>4. The Baltimore Waterfall</h3>
                                    <p>
                                        For water lovers, Madre de Dios has an impetuous and magical surprise such as
                                        the Baltimore waterfall, it is located about 85 kilometers from Puerto
                                        Maldonado, to access and see the waterfall it is necessary to travel by boat for
                                        an approximate time. 4 to 5 hours against the current of the Tambopata
                                        River.<br><br>

                                        But, the waiting time will be worth it, upon arrival you will enjoy an imposing
                                        waterfall contemplating the beauty of the waterfall, giving a view similar to
                                        the waterfall from the sky, you will feel the freshness of the water and the
                                        pleasant atmosphere that provides.<br><br>

                                        In times of rain, the flow increases, increasing the flow of water from the
                                        fall, making the landscape even more beautiful. Tourists are advised to carry
                                        waterproof cameras so that they can capture unique images and perpetuate the
                                        visit to the waterfall, as also to the landscape on the way through the same
                                        river.
                                    </p>
                                    <h3>5. The native community of Palma Real</h3>
                                    <p>
                                        The community of Palma Real is a unique and exemplary site in the area, located
                                        on the edge of the Madre de Dios River, approximately 45 kilometers from Puerto
                                        Maldonado, the site can be reached. What is exemplary in this area is the way in
                                        which the fully habitable houses are built. Elevated above the river with wooden
                                        uprights that provide unparalleled stability.<br><br>

                                        The community of Palma Real is a place that, despite its location, has a good
                                        economy thanks to the trade that is handled there, tourists have the possibility
                                        of buying handicrafts and enjoying typical local dishes. In turn, you can find
                                        clothing, items from the area and other products that can be purchased as a
                                        souvenir of the trip.<br><br>

                                        The handicrafts of the place lend the identity of the area as well as its value,
                                        you can see the elaboration of bows, arrows, seed necklaces and all kinds of
                                        fabric based on fibers of vegetable origin, without a doubt, the Community of
                                        Palma Real it is magical, autonomous, beautiful and worth visiting to learn
                                        about its customs, values, economy and lifestyle.
                                    </p>
                                    <h3>6. Miraflores Community</h3>
                                    <p>
                                        The community of Miraflores is located about 50 kilometers from Puerto
                                        Maldonado, the first 30 kilometers must be traveled by boat on the Hearth River,
                                        as the kilometers go by you can notice how the landscape changes in a unique
                                        way, the contrast of the nature with the river and the sky is very magical.
                                        <br><br>

                                        This community has one of the most important characteristics of all, being the
                                        only one that, despite time, preserves its culture so intact that it is
                                        surprising how they live in a calm way. The locals are always looking for people
                                        and tourists who do not belong to them to feel comfortable and get to enjoy an
                                        environment that is totally new to them.<br><br>

                                        To get to the community it is only necessary a total of or less than two hours,
                                        therefore it is essential and as I advise for travelers, that they wear a
                                        protector for insects, clothing and footwear suitable for the trip as well as
                                        drinking water, it is considered a lack of respect for the community and the
                                        place, throwing garbage in green areas, therefore it is a very important aspect
                                        to take care of.<br><br>

                                        Peru will always protect its communities and everything that preserves the
                                        identity and cultures of the ancestors. Knowing a little about this small but
                                        valuable population is to see the way in which the native Peruvians made life
                                        with total tranquility, providing themselves with nature and everything that
                                        surrounds them. This community is one of the most sacred to the nation.
                                    </p>
                                    <h3>7. Lake Sandoval</h3>
                                    <p>
                                        Sandoval Lake is a place that has been formed thanks to a strangulation of one
                                        of the drainages or meanders of the Madre de Dios River. To get to the final
                                        site you have to go by boat about 25 kilometers in the same direction as the
                                        river, after some time you have to walk along a trail through the woods. It is
                                        important that the tourist or visitor has protection against insects because it
                                        is a very leafy section.<br><br>

                                        What makes the journey to visit Lake Sandoval beautiful is the passage and its
                                        extensive number of orchids, each and every one of them untouchable, as they are
                                        considered sacred to the place. According to the story, the gods decided to
                                        bless the place by giving them something of great beauty and grandeur, so they
                                        thought of decorating the short trees with a precious and unique flower, giving
                                        birth to the orchid. It is totally forbidden to tear them from their
                                        seats.<br><br>

                                        Once in the lake, fishing is allowed as a sport in its waters, the fish found
                                        can be taken without any problem, and even be able to cook them with a simple
                                        fire on the shores of the lake itself, being important that at the end of
                                        everything, the fire is extinguished to avoid problems with the authorities.
                                        Tourists can also camp during the day and enjoy the majestic sunset that the
                                        lake will offer them during sunset.
                                    </p>
                                    <h3>8. Puerto Maldonado</h3>
                                    <p>
                                        This area is the capital of the Jurisdiction in Tambopata and the well-known
                                        region of Madre de Dios. It is an extremely attractive and highly regarded
                                        locality in the Peruvian forest. In the same way, it has its port as a fluvial
                                        axis for diverse boats in the tropical area.<br><br>

                                        The site is examined as a hub for biodiversity, where the high climate stands
                                        out. In addition, it has a large number of spaces of great interest to explore,
                                        from the Youth Park out of respect for César Vallejo, the Serpentarium,
                                        exhibitions in the Butterfly Park, and others.
                                    </p>
                                    <h3>9. Tambopata National Reserve</h3>
                                    <p>
                                        The National Reserve is located three hours from the beautiful Madre de Dios
                                        River, or forty-six kilometers from Puerto Maldonado. This was accredited as a
                                        favorite natural area thanks to its natural beauty, the exuberant flora and
                                        fauna, the great wildlife and the territorial area that it comprises.<br><br>

                                        In the Reserve there are about 530 diversities in birds, 205 prototypes of fish,
                                        1082 genera of butterflies, and many more species. The mammals that stand out
                                        here are the giant otter and the macaw. Apart from some native
                                        communities.<br><br>

                                        It is certain that you will not want to leave all these places in Madre de Dios
                                        for a moment while you explore them.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Festive Calendar in Madre de Dios
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>January 23:</strong> Crafts Day</li>
                                        <li><strong>February:</strong> Carnival of comparsas</li>
                                        <li><strong>March - April:</strong> Easter</li>
                                        <li><strong>May 1-6:</strong> Feast of the religious crosses</li>
                                        <li><strong>May 3:</strong> Feast of the Cross</li>
                                        <li><strong>May 24: </strong> The Virgin of Chapi</li>
                                        <li><strong>June 24:</strong> Feast of Saint Juan</li>
                                        <li><strong>June 25-29:</strong> Feast of Saint Peter and Saint Paul</li>
                                        <li><strong>June 28-29:</strong> Feast of the Cachuela farmhouse</li>
                                        <li><strong>July 20:</strong> Tourist week of Madre de Dios</li>
                                        <li><strong>July 26-30:</strong> Agricultural, industrial and craft fair </li>
                                        <li><strong>August 15:</strong> Chachapoyas</li>
                                        <li><strong>October 17:</strong> Native Food and Craft Fair</li>
                                        <li><strong>November 6:</strong> Festival of the native community of Palma Real
                                        </li>
                                        <li><strong>December 26:</strong> Anniversary of the political creation of Madre
                                            de Dios (1912)</li>
                                    </ul>
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
