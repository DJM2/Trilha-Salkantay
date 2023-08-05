@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="puno">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Puno, capital of folklore</h1>
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
                            <p><a href="/">Home</a> / <a href="{{ route('destinies-peru') }}">Destinies</a> /
                                <a>Puno</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Puno"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Capital of Peruvian folklore
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Indeed, it is necessary to specify that the <strong>identity of a country is
                                        complex</strong>, and manifests itself through various forms. The Puno region
                                    was officially recognized, on November 7, 1985, as the Capital of Peruvian Folklore,
                                    due to its more than 350 dances that combine ancestral traditions and miscegenation
                                    expressed in dance, music and art performed with joy and overwhelming feeling that
                                    have crossed borders inside and outside of Peru.<br><br>

                                    For 18 days the city of Puno, which is on the shores of <strong>Lake
                                        Titicaca</strong>, located at
                                    3,870 meters above sea level, becomes the folkloric capital not only of Peru, but
                                    also of America, thanks to the festival of the <strong>VIRGEN DE LA
                                        CANDELARIA</strong> that takes
                                    place celebrated every year, it gathers more than 200 bands of musicians and dancers
                                    to celebrate Mamacha Candelaria. During the first nine days the mayordomos
                                    (responsible for leading the festivities) fix the temple and celebrate masses,
                                    banquets and fireworks. On the central day, February 2, the Virgin is led through
                                    the city in a colorful procession; behind it, keeping careful hierarchy, parade
                                    priests, acolytes, faithful, Christians and pagans: it is the moment of the
                                    presentation of groups of musicians and dancers who dance throughout the
                                    city.<br><br>

                                    The festival is related to the pre-Hispanic agrarian cycles of planting and
                                    harvesting, as well as the mining activity of the region, and is the product of the
                                    mix between respectful Aymara joy and ancestral Quechua gravity. The dance of the
                                    devils or <strong>diablada</strong>, supposedly dreamed of by some miners trapped in
                                    a sinkhole who
                                    in their desperation entrusted themselves to the Virgen de la Candelaria, is the
                                    main folklore comparsa. The dancers make their offerings to the earth (Pachamama)
                                    playing panpipes, dressed in very colorful costumes and almost always masked. The
                                    most impressive masks, due to their terrifying effect, are those of deer with long
                                    twisted horns associated with the devil and, also, with the Jacancho or god of
                                    minerals. In the cacharpari or farewell, the troupes that fill the streets finally
                                    go to the cemetery to pay homage to the dead.<br><br>
                                    <img src="{{ asset('img/galeria/PUNO-PERU-CANDELARIA-VIRGIN.webp') }}"
                                        width="100%" alt="Devil Dance Puno" loading="lazy">
                                    <i>Virgin of Candelaria in procession</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Historical review of Puno
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Before the arrival of the Spaniards, the city of Puno, this was a village, had
                                        the Bay of <strong>Lake Titikaka</strong> as its setting, it formed a marginal
                                        population located
                                        between the boundaries of the territories of the Kollas (Quechuas) to the north
                                        and the Lupacas ( Aymara) to the south.<br><br>

                                        At the end of the 16th century, the south of Puno was under the government of
                                        the Lupacas whose development reached great advances in agriculture, livestock,
                                        social organization and culture. On the other hand, the northern part from what
                                        is now Juliaca, was in the hands of the <strong>Kollas</strong>, whose domain
                                        extended from the
                                        boundaries of present-day Puno, to the banks of the Ramis River on the
                                        south-eastern side of Lake Titicaca.<br><br>

                                        The city of Puno was a modest Indian town until the Viceroy Count of Lemos made
                                        it the capital of the province of Paucarcolla, on November 4, 1668. At the same
                                        time, it changed its old name from San Juan Bautista de Puno to San Carlos. from
                                        Puno.<br><br>

                                        The period of peace had ended in 1781 when the Indian revolutions fought for
                                        their independence like the one led by Tupac Katari. In the war of independence
                                        at the beginning of the 19th century, Puno became an important connecting city
                                        between Peru and the Río de la <strong>Plata in Argentina</strong>.<br><br>

                                        After independence in 1821 Puno was the scene of the battle between Peru and
                                        Bolivia, the latter occupying the Peruvian territories as far as Tacna and
                                        Moquegua, until the signing of the 1847 convention.<br><br>

                                        The port of Puno has steamships that date back to the beginning of the republic,
                                        which were transported from Arica (Chile) to Lake Titikaka for the transport of
                                        minerals and passengers from Bolivia, the same ones that are preserved today, as
                                        well A railway was built that interconnects the departments of Cuzco and
                                        Arequipa, which are also still in service. In the second half of the 17th
                                        century (1657) the Viceroy Count of Lemos (Pedro Fernández de Castro) moved the
                                        port of San Luís de Alba to what is now Puno and founded the town of the
                                        Immaculate Conception and San Carlos de Puno on 9 of November 1663 and on
                                        November 4 of that year, he declares it the capital of the province of
                                        Paucarcolla (date that is celebrated every year). After having suffocated a
                                        confrontation between Spaniards over the famous Laykacota mines, the same ones
                                        that the brothers José and Gaspar Salcedo were buried and executed.<br><br>

                                        The province of Puno was created by a decree of May 2, 1854 and is the capital
                                        of the department today Puno Region.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Dances of Puno
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>La diablada</h3>
                                    <p>
                                        Among the most emblematic dances is <strong>La Diablada</strong>, an expression
                                        of
                                        Andean-Christian religious syncretism that represents the fight between good and
                                        evil. Its origin dates back to 1577, when the Jesuits settled in Juli, current
                                        capital of the province of Chucuito, where comedies and sacramental plays were
                                        presented on Christian holidays. Through these theatrical manifestations, the
                                        Jesuit missionaries taught the Aymara people the seven deadly sins in the form
                                        of a dance, and how angels defeat demons.
                                    </p>
                                    <img src="{{ asset('img/galeria/danzantes-de-Diablada-Puno.webp') }}" width="100%"
                                        alt="Danza Diablada Puno" loading="lazy">
                                    <i>Dancers 'Diablada'</i><br><br>

                                    <h3>La Pandilla</h3>
                                    <p>
                                        Another of the dance expressions with great popular roots in Puno is the
                                        Pandilla, which, unlike other dances that bear the same name in other regions of
                                        Peru, is performed slowly and expresses the chivalry of the man and the elegance
                                        of the Puno lady. .
                                    </p>
                                    <h3>Sikuris</h3>
                                    <p>
                                        The sikuri is the authentic expression of the people of Puno. The siku or
                                        zampoña, is a pentaphonic Andean instrument is composed of various sound tubes
                                        of different calibers in length and diameter. Added to this instrument is the
                                        bass drum, with which a musical symbiosis is generated that accompanies the
                                        performers-dancers who advance by taking steps forwards and backwards,
                                        complemented with circular movements.<br><br>

                                        This dance derived from the Tuntuna is performed with much more ornate and
                                        colorful costumes and with even more acrobatic movements. The music of each
                                        dance differs from one another, keeping the same melodic line of Afro-Peruvian
                                        inspiration.
                                    </p>
                                    <h3>Wifala</h3>
                                    <p>
                                        Word that comes from Quechua, whose meaning is "teaches" or "flag", although it
                                        can also mean joy. It has its origin in the district of Ayaviri, province of
                                        Melgar, as well as in the districts of Asillo and Muñani, in the province of
                                        Azángaro. This Puno dance was declared Cultural Heritage of the Nation on
                                        October 2, 2014.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Main tourist places in Puno
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Uros floating islands</h3>
                                    <i>Live in a world made of reeds, surrounded by the beautiful Lake Titicaca.</i>
                                    <p>
                                        At 3,812 meters above sea level, the highest navigable lake in the world is
                                        located in the Peruvian highlands, Lake Titicaca, in Puno. In it you can find
                                        the Floating Islands of the Uros, built of reeds, an aquatic plant that grows on
                                        the surface of Lake Titicaca. The totora is woven and spread over another layer
                                        of it to build the surface of each island.<br><br>

                                        In the lake there are approximately 100 floating islands, and the mobilization
                                        is carried out in rafts also based on reeds. Its inhabitants are hospitable and
                                        dedicated to tourism, and you can get a stamp in your passport in one of the
                                        largest islands.<br><br>

                                        These islands are inhabited by the Uros, one of the oldest cultures on the
                                        continent which dates back to times before the Incas. The inhabitants of this
                                        floating community claim to own the waters of Lake Titicaca. The subsistence of
                                        the Uros community is based on fishing and hunting; They are also dedicated to
                                        the elaboration of wool tapestry fabrics and the stuffing of animals. On the
                                        other hand, they participate in tourist activities: There are tours to the
                                        Floating Islands of the Uros for a few hours, but also complete experiences in
                                        which you become part of the Uros community.
                                    </p>
                                    <img src="{{ asset('img/galeria/Uros-island-Puno.webp') }}" width="100%"
                                        alt="Uros Island, Puno" loading="lazy">
                                    <i>Uros Island, Puno</i><br><br>

                                    <h3>2. Amantani and Taquile Islands</h3>
                                    <p>
                                        The charm of Lake Titicaca is lived intensely in islands such as Taquile and
                                        Amantaní, where the history that is kept in the memory of its people is
                                        expressed in wonderful fabrics, true works of art recognized worldwide. In
                                        Taquile you can climb 560 steps to reach the town, where you will get unique
                                        views of the lake.<br><br>

                                        Amantaní is a good option for lunch during your day, since all the local food is
                                        harvested on the same island, which gives it a special value. In the same way,
                                        it is ideal to enjoy a trout, as it is one of the most important foods of
                                        Titicaca.
                                    </p>
                                    <img src="{{ asset('img/galeria/Isla-Amantani-Puno.webp') }}" width="100%"
                                        alt="Amantani Island - Puno" loading="lazy">
                                    <i>Amantani Island - Puno</i><br><br>

                                    <h3>3. Artisan fair of the port of Puno</h3>
                                    <p>
                                        The artisan market of the Port of Puno, on the shores of Lake Titicaca, is one
                                        of the best places to shop in all of Peru. Located on the shores of Lake
                                        Titicaca on its Peruvian side, the Port of Puno is a good place to buy
                                        traditional handicrafts from the people of the Altiplano. If you visit the city,
                                        it is almost obligatory to go around its craft fair and do some shopping for
                                        unique objects. You can boast of having acquired a souvenir in one of the
                                        highest ports in the world, at more than 3800 meters of altitude.<br><br>

                                        It is quite normal that, since there are so many stalls, there is competition
                                        for customers, making prices more affordable for tourists who want a souvenir or
                                        gift. It is a good place to enjoy crafts and painting, although it also has
                                        places to have lunch, so you can spend a good couple of hours calmly. In fact,
                                        the people of Puno have traditionally only had two sources of wealth; on the one
                                        hand, fishing and, on the other, artisanal production. In other words, what we
                                        buy here has a guarantee of authenticity.
                                    </p><br><br>

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h3>4. Kuntur Wasi and Puma Uta viewpoint</h3>
                                            <p>
                                                ¿Quieres tener una idea de cómo se ve Puno desde las alturas? Entonces
                                                es un buen plan conocer los miradores de Kuntur Wasi y Puma Uta, ambos
                                                imperdibles lugares turísticos de Puno. Kuntur Wasi tiene en su cima un
                                                cóndor, el patrono vigilante de la ciudad. Desde aquí te puedes sentir
                                                como uno de ellos en vuelo, y obtener increíbles vistas de Puno y el
                                                Titicaca.<br><br>

                                                Puma Uta tiene una idea similar, pero esta vez con una escultura gigante
                                                de un puma (y otros animales) en un mirador ideal para divertirse y
                                                admirar la magia de estas tierras. Además, un poco de actividad física
                                                nunca viene mal.
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{ asset('img/galeria/Mirador-Puma-ata-Puno.webp') }}"
                                                alt="Puma Ata viewpoint, Puno" loading="lazy" width="100%">
                                            <i>Puma Ata viewpoint, Puno</i><br><br>
                                        </div>
                                    </div>


                                    <h3>5. Church of San Juan Bautista</h3>
                                    <p>
                                        The home of the Virgen de la Candelaria should not be left out of your list.
                                        Both the virgin and the temple have existed since 1580. However, a fire
                                        destroyed much of the structure, and it was rebuilt in 1887 in its current form.
                                        <br><br>

                                        Since the construction of the San Juan Bautista Temple, it has always been a
                                        place of prayer for suffering people, whether it be exploited miners, abused
                                        indigenous people, the poor and marginalized, always a place of prayer for poor
                                        and humble people. The Image of the Virgin of Candelaria is venerated from the
                                        year 1580 in the Temple. The construction is made of adobe and represents part
                                        of the identity of Puno, the virgin being the patron saint of Puno and receiving
                                        visits from thousands of faithful every February.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Most important dates in Puno
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p><strong>1. Ritual festival of the Payment to the Earth (Pacha Mama).</strong> <i>Date: January 18</i></p>

                                    <p><strong>2. Virgen de la Candelaria</strong> <i>Date: from February 2 to 18</i>
                                    </p>

                                    <p><strong>3. Holy Week in Puno</strong> <i>Date: from March 24 to 3</i></p>

                                    <p><strong>4. Festival of Santiago apostle</strong> <i>Festival of Santiago apostle</i></p>

                                    <p><strong>5. National Holidays</strong> <i>Date: July 28</i></p>

                                    <p><strong>6. Capac Ccolla staging</strong> <i>Date: September 7</i>
                                    </p>

                                    <p><strong>7. Anniversary of the foundation of Puno</strong> <i>Date: from November 1 to 30</i></p>

                                    <img src="{{ asset('img/galeria/353-aniversario-de-Puno.webp') }}"
                                        alt="Puno aniversary" width="100%" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Best selling tours</h2>
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
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/tour-a-la-laguna-de-humantay.webp') }}" alt="Tour a Puno"
                                loading="lazy">
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
