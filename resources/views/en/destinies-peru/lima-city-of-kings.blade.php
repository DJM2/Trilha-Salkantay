@extends('layouts.appen')

@section('content') 
    @include('layouts.menu')
    <div class="lima">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Lima, City of Kings</h1>
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
                                    href="{{ route('destinies-peru') }}">Destinies</a> / <a>Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Lima"</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why is it called the City of Kings?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    When the conqueror <strong>Francisco Pizarro</strong> was assigned the task of
                                    choosing the capital of the Spanish Viceroyalty, he took into account that this
                                    capital had to be close to the sea. And so he decided on a beautiful valley next to
                                    the Rímac River, where he finally founded the city of Lima, a fact that became
                                    official on January 18, 1535.

                                    According to historians, this date coincides with the month of the descent of the
                                    wise men, and for this reason Pizarro baptized it as the <strong>"City of
                                        Kings"</strong>. 486 years have passed and, since then, Lima has changed a lot
                                    from a territorial, demographic and cultural point of view.

                                    Despite these transformations, Lima still has natural spaces that deserve to be
                                    preserved, since they are the lungs of a city of a thousand faces that today houses
                                    more than 10 million people.<br><br>
                                    <img src="{{ asset('img/panoramico/ciudad-de-reyes-lima.webp') }}"
                                        alt="City of Lima, Miraflores" width="100%" loading="lazy">
                                    <i>City of Lima, Miraflores</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    The city of Metropolitan Lima
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Lima is the capital city of the Republic of Peru. It is located on the central coast
                                    of the country, on the shores of the Pacific Ocean, forming an extensive and
                                    populous urban area known as Metropolitan Lima, flanked by the coastal desert and
                                    extending over the valleys of the Chillón, Rímac and Lurín rivers. According to the
                                    2017 National Census, the department with the largest population in the country is
                                    Lima, with a total of 9,485,405 inhabitants.<br><br>

                                    Today it is considered the political, financial and commercial center of the
                                    country. Internationally, the city ranks fifth among the most populous cities in
                                    Latin America and is one of the thirty most populous urban agglomerations in the
                                    world. Due to its geostrategic importance, it has been defined as a “beta class”
                                    global city.<br><br>
                                    <h3>The largest community in Latin America</h3>
                                    Currently, more than a million people of Chinese descent live in Peru and about 200
                                    thousand in Lima. It is the largest colony that the Asian country has in the world.
                                    They came to work three generations ago when the abolition of slavery left a gap in
                                    the workforce. Lima's Chinatown, located in the center of the capital, is a busy
                                    commercial area with markets, shops and chifas - oriental fusion restaurants - of
                                    delicious food that Peruvians have come to love.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Lima: Historical Review
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Lima <strong>(which comes from Quechua Limaq)</strong> is the capital of Peru. It is
                                    located on the central coast of the country, on the shores of the <strong>Pacific
                                        Ocean</strong>, flanked by the coastal desert and extending over the valleys of
                                    the Chillón, Rímac and Lurín rivers. It was founded on January 18, 1535 with the
                                    name <strong>"The City of the Kings"</strong> in the agricultural region that until
                                    then was known by the indigenous people as Limaq.<br><br>

                                    Lima was the capital of the Viceroyalty of Peru and the largest and most important
                                    city in <strong>South America</strong> during the Spanish regime; after
                                    Independence, it became the capital of the Republic.<br><br>

                                    Due to its expansion and populous urban area, today it is called
                                    <strong>Metropolitan Lima</strong>, and has a population of more than 9 million 320
                                    thousand inhabitants, who represent 30% of the Peruvian population. This figure has
                                    made it the most populous city in the country, the fifth in Latin America and the
                                    Caribbean, and one of the thirty most populous urban agglomerations in the world.
                                    Likewise, Lima is considered the commercial, financial, cultural and political
                                    center of the country.<br><br>

                                    Jurisdictionally, the metropolis extends mainly within the province of Lima and in a
                                    smaller portion, to the west, within the Constitutional province of Callao, where
                                    the seaport and the Jorge Chávez International Airport are located. Both provinces
                                    have regional autonomy since 2002.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Tourist places in Lima
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Historical center of lima</h3>
                                    <i>The lineage of a capital with tradition</i><br>
                                    One of the main attractions of the oldest cities throughout the world is the visit
                                    to its Historic Center. And that of the majestic city of Lima could not be the
                                    exception: in the streets, churches and buildings, you can take a leap and visit the
                                    past in the first person. As if it were a time machine to which you go to see the
                                    old Lima, the one that keeps its colonial touch until today.<br><br>

                                    Being the only capital in South America with access to the Pacific Ocean has its
                                    appeal: on the cliffs of the Costa Verde you can see a modern Lima, which is at the
                                    forefront just like the most important cities on the globe. But if you want to
                                    connect with historic Lima, a visit to the city center is essential.<br><br>
                                    <img src="{{ asset('img/galeria/tour-caballos-en-centro-de-lima.webp') }}"
                                        alt="Tour with horses in the center of Lima" width="100%" loading="lazy">
                                    <i>Tour with horses in the center of Lima</i><br><br>

                                    <h3>Miraflores and Costa Verde</h3>
                                    <i>window to the pacific</i><br>
                                    Lima is the only South American capital facing the sea and the Miraflores
                                    neighborhood does know how to take advantage of it; especially when the Costa Verde
                                    crosses under its cliffs, bringing tourists closer to the waves and a gastronomic
                                    offer that includes à la carte sunsets.<br><br>

                                    Miraflores combines this magical proximity to the Pacific with its mansions of
                                    yesteryear, which survive interspersed with modern buildings and archaeological
                                    sites, and a privileged boardwalk: here you can find everything from an exclusive
                                    shopping center to beautiful parks and dozens of paragliders playing with the wind.
                                    Just beautiful.<br><br>

                                    <h3>Larco Museum</h3>
                                    <i>Appointment with 5000 years of history</i><br>
                                    Surrounded by beautiful gardens, an 18th-century viceregal mansion houses an
                                    impressive private collection of pieces from pre-Columbian Peru. Within the
                                    permanent exhibition of the museum, the Gold and Jewelry Room stands out with
                                    wonderful pieces made by virtuous goldsmiths of ancient Peru to honor their gods. No
                                    less attention is captured by the erotic huacos room, which shows us his interesting
                                    vision of sexuality.
                                    Definitely, visiting the Larco museum is connecting and reconnecting with the Andean
                                    worldview.<br><br>
                                    <strong>General information:</strong>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Price</th>
                                                <th scope="col">Weather</th>
                                                <th scope="col">Hours</th>
                                                <th scope="col">Altitude</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>- Adults: S/30 <br>- Over 65: S/25 <br>- Students: S/15
                                                </td>
                                                <td>mín. 17,3 ℃/ máx.: 21,5 ℃</td>
                                                <td>10:00 hrs a 19:00 hrs</td>
                                                <td>82 m s. n. m.</td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <img src="{{ asset('img/galeria/Museo-Larco-lima-Pacha-Mama-Spirit.webp') }}"
                                        alt="Larco Herrera Museum, Lima" width="100%" loading="lazy">
                                    <i>Larco Herrera Museum, Lima</i>
                                    <br><br>
                                    <h3>Museums in Lima</h3>
                                    <i>Meeting point for connoisseurs and cosmopolitans</i><br>
                                    The best way to understand the history of Peru is by visiting the Museums of Lima.
                                    In them the greatest cultural heritage of the country is preserved. Some of the best
                                    collections from the pre-Hispanic era are held by the National Museum of
                                    Anthropology and Archaeology, the Larco Museum and the Amano Museum; the Lima Art
                                    Museum (MALI) summarizes all the artistic manifestations in the country; and the MAC
                                    and the MATE (which exhibits the work of Peruvian photographer Mario Testino) are
                                    excellent options for modern art. Simply unmissable.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Most important dates in Lima
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Lima Anniversary</h3>
                                    <p><strong>Date: January 18</strong></p>
                                    <strong>Lima is Peru's capital</strong>. This date of foundation is January 18, when
                                    back in 1535 it was founded by the conqueror <strong>Francisco Pizarro</strong>.
                                    This is a very important event for the inhabitants of the region since there are
                                    many activities that are scheduled for that date in addition to the days that
                                    precede it. Program that changes according to the ruler in charge, but that
                                    essentially preserves the spirit of all Lima.<br><br>

                                    The celebrations for the anniversary of the Capital begin with different cultural
                                    activities, including conferences whose reason varies each year. In addition to
                                    this, the presence of an impressive Serenade through Lima has become a tradition,
                                    which takes place in the <strong>Plaza de Armas</strong> and in which the musical
                                    talents of people from our country are exhibited, who express their music of modern
                                    genres and traditional.<br><br>

                                    It is also common for these celebrations the organization of different parades, in
                                    these the color of the traditional dances of Lima is exposed, where the presence of
                                    the marinera is inevitable, tonderos, festivities and skirts are also seen.<br><br>

                                    In addition, there are the inevitable gastronomic fairs where the delicacies and
                                    wide variety of local cuisine are exhibited and made available to the consumer. Main
                                    dishes such as rice with chicken or duck, salted loin, stuffed cause, among many
                                    others, are accompanied by exquisite desserts such as <strong>purple
                                        mazamorra</strong>, sigh a la Lima and others to entertain the stomach of our
                                    visitors.<br><br>

                                    <h3>2. Santa Rosa de Lima</h3>
                                    <p><strong>Date: August 30</strong></p>
                                    <a href="{{ route('santa-rosa-de-lima-en') }}"
                                        title="Read complete info about Santa Rosa">Santa Rosa de Lima</a> is the
                                    patron saint of the Americas and the Philippines,
                                    protector in addition to the National Police of our country, whose date of
                                    celebrations is presented as the central day on August 30.<br><br>

                                    It tells the story of this Saint, whose real name was I<strong>sabel Flores de
                                        Oliva</strong>, who
                                    was born in 1586 and lived a life full of extraordinary events. Among them the
                                    miracle of the roses that she gave him her name since, it is said that at that time
                                    in Lima these types of plants were not cultivated and that she was miraculously in
                                    the garden of her house where these flowers spontaneously arose. Another reason
                                    that characterizes roses as a symbol of the Saint is the miracle by which
                                    <strong>Pope Clement IX</strong> canonized her since, it is said, at the moment in
                                    which he doubted the sanctity of Lima, it rained roses on his desk, which is why the
                                    Supreme Pontiff later made many provisions in her honor, even though it was his
                                    successor Clement X who finally managed to canonize her.<br><br>

                                    For the celebrations in commemoration of this Saint, pilgrimages are carried out to
                                    her temple. In this, the practice of a traditional act is carried out, which is to
                                    deposit a letter in the so-called "Wishing Well" since it is said that what one asks
                                    of the Saint will come true if it is requested with great fervor. .<br><br>

                                    <h3>3. National Peruvian Paso Horse Contest</h3>
                                    <p><strong>Date: April</strong></p>
                                    The <strong>National Peruvian Paso Horse Contest</strong> is an event that takes
                                    place in Mamacona, which is located in the district of Lurín within the province and
                                    region of Lima.<br><br>
                                    The contest has completed its XLVI presentation for 2011, which takes place between
                                    the months of March or April and lasts a week.<br><br>
                                    The Contest summons hundreds of lovers of these equines, such is the degree of
                                    reception that this contest presents that there are more than 700 animals that are
                                    presented in this National competition, and that they are the representation of the
                                    best horses of this breed that They are natives of the country, but they are raised
                                    both nationally and in neighboring countries of Bolivia, Ecuador and other Central
                                    American states.<br><br>
                                    At present, the importance of this contest is such that the <strong>Mamacona
                                        Exhibition Hall</strong> has been created within the Mamacona Estate, which is
                                    the first museum in honor of
                                    this aboriginal species and which has emerged thanks to the collaboration of those
                                    interested. On the last day of the celebrations, the winners of the different
                                    categories that exist are awarded within the establishment, among which the
                                    following can be recognized:<br>
                                    <ul>
                                        <li>“Master Bracer”</li>
                                        <li>Trial for Minors from 10 to 12 years old with the subdivision of boys and
                                            girls</li>
                                        <li>Award for Best Filly Presented to Halter</li>
                                        <li>Female Muzzle Champion</li>
                                        <li>Flats Award for Mares</li>
                                        <li>Mother's Progeny Award</li>
                                        <li>Mother and Daughter Award</li>
                                        <li>Mares Joint Award</li>
                                        <li>Female Zootechnical Merit Award</li>
                                        <li>Category of Halter Foals</li>
                                        <li>Category of Muzzle Foals</li>
                                        <li>Hobby Award, among others.</li>
                                    </ul>
                                    <h3>Day of the Creole song</h3>
                                    <i><strong>Date: October 31</strong></i><br>
                                    The day of the Creole song is celebrated every year on October 31, this date was
                                    established within the calendar of Peruvian festivities during the government of
                                    Manuel Prado y Ugarteche in the forties.<br><br>

                                    The Creole song and its interpreters, who are honored on this date, have an
                                    important history that presents its peak period in the twenties and whose members
                                    have been called <strong>"the old guard"</strong>.<br><br>

                                    The Old Guard includes the classics of criollismo, among which José Sabas
                                    Libornio-Ibarra, Juan Peña Lobatón, Julio Flores, Óscar Molina, among others, stand
                                    out. And who would be followed by important performers and composers from the
                                    thirties to forties with a great influence from Felipe Pinglo who left in the memory
                                    of Peruvian music beautiful compositions such as <strong>“El plebeyo”</strong>, “El
                                    Huerto de mi
                                    amada” , "The mirror of my life" and that would give rise to the expansion of the
                                    popularity of this type of music sung and created by voices such as those of Jesús
                                    Vásquez, Lucha Reyes, Oscar Avilés, Luis Abanto Morales or the remembered and great
                                    Chabuca Granda .<br><br>

                                    The Celebrations that take place in current times for the Day of the Creole Song are
                                    mainly concentrated in the different Creole clubs that are celebrated throughout the
                                    country and especially in the capital. Or also thanks to serenades and concerts
                                    organized either by the authorities of each of the districts, or by individuals who
                                    are followers of this important celebration.<br><br>

                                    <h3>National Pisco Sour Day</h3>
                                    <i><strong>Date: first Saturday of February</strong></i><br>
                                    The pisco sour has become in recent years the flagship drink of Peru, it is an
                                    exquisite drink based on pisco from the lands of Ica that is also gaining more
                                    strength and recognition abroad. Due to these attributes, the State has recognized a
                                    National Pisco Sour Day as a tribute to this exquisite drink and whose central date
                                    is the first Saturday of February and has been celebrated since 2004.<br><br>
                                    <img src="{{ asset('img/galeria/pisco-sour-peru.webp') }}" alt="Pisco Sour, Peru"
                                        width="100%" loading="lazy">
                                    <i>Pisco Sour</i><br><br>

                                    Salthough pisco is a traditional drink that originates in the Ica region, it is Lima
                                    and its different districts where this celebration gains more strength, being one of
                                    the districts selected as the official venue each year of celebration.<br><br>

                                    Each district presents a different way of celebrating this day, for example, in
                                    Barranco, the main activities take place in the Museum of Contemporary Art where the
                                    exhibition and sale of this Peruvian liquor takes place.<br><br>

                                    In other districts such as Pueblo Libre, different artistic shows are also held to
                                    liven up the day, including dance competitions, along with barman competitions, in
                                    addition to the obligatory sale of this liquor along with typical dishes of the
                                    area.
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
