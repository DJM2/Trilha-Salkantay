@extends('layouts.app')
@section('metas')
<meta name="title" content="Sobre la agencia de viajes Pacha Mama Spirit, viajes a Perú, reserva tu viaje a Perú"/>
<meta name="keywords" content="Pacha Mama Spirit, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas"/>
<meta rel="canonical" content="{{ request()->fullUrl() }}">

<meta name="og_image" content="{{ asset('img/pacha-mama-spirit-logo.png')  }}"/>
<meta name="og_secureImage" content="{{ asset('img/pacha-mama-spirit-logo.png')  }}"/>

<meta property="og:title" content="{Sobre la agencia de viajes Pacha Mama Spirit, viajes a Perú, reserva tu viaje a Perú"/>
<meta property="og:description" content="Pacha Mama Spirit, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas"/>
<meta property="og:locale" content="es" />
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />
@endsection
@section('content')
    @include('layouts.menu')
    <div class="terminos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff">Términos y Condiciones</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Términos y condiciones Pacha Mama Spirit</beige>
                    </h1>
                    <p>
                        Este sitio es administrado por Pacha Mama Spirit, Agencia de Viajes y Operador de Turismo,
                        autorizado por el Ministerio de Cultural de Cusco organismo regulador del Camino Inca.<br>
                    </p>
                    <h3>Generalidades:</h3>
                    <ul>
                        <li>Este documento tiene carácter de contrato.</li>
                        <li>AL comprar el servicio, el cliente acepta los términos y condiciones presentes.</li>
                        <li>Ningún agente ajeno a Pacha Mama Spirit tiene la capacidad de modificar, limitar o extender los
                            términos y condiciones de este contrato.</li>
                    </ul>
                    <h3>Liberación de responsabilidad:</h3>
                    <ul>
                        <li>Pacha Mama Spirit acepta responsabilidad solo por actos realizados por nuestro personal.</li>
                        <li>Pacha Mama Spirit no se hace responsable por cualquier acción o evento que es inevitable o
                            imprevisible. No somos responsables de actos indebidos causados por clientes o terceros.</li>
                        <li>Pacha Mama Spirit no se hace responsable del mal tiempo, accidentes inevitables, daños
                            materiales, pérdida de pertenencias personales, los desastres naturales, costos adicionales por
                            eventos de último momento, huelgas, etc. Es responsabilidad de cada cliente tener un seguro para
                            cubrir cualquiera de estos eventos.</li>
                    </ul>
                    <h3>Cancelaciones y Cambios de la Empresa:</h3>
                    <p>Pacha Mama Spirit, Agencia de Viajes y Operador de Turismo, se reserva el derecho de cancelar
                        cualquier viaje en los siguientes casos:</p>
                    <ul>
                        <li>Si el cliente no efectuó el pago del 100% del precio total del tour por lo menos 2 semanas (15
                            días) previa a la fecha de realización del tour, la agencia podrá realizar cualquier tipo de
                            cambio sobre el servicio contratado.</li>
                    </ul>
                    <h3>Modificaciones hechas por los Clientes:</h3>
                    <p>Primero se debe considerar que cualquier modificación está sujeta a disponibilidad. Las
                        modificaciones, seguirán el siguiente proceso de sanciones:</p>
                    <h5>CAMINO INCA</h5>
                    <ul>
                        <li>• Una vez realizada la reserva y efectuado el pago ya sea total o parcial; no existe la
                            posibilidad de realizar ninguna modificación sean estas en la información del pasajero o fecha
                            de viaje. Esto según disposición del Ministerio de Cultura.</li>
                    </ul>
                    <h5>SALKANTAY / LARES / HUCHUY QOSQO / AUSANGATE Y OTROS</h5>
                    <ul>
                        <li>Hasta 30 días naturales antes de la fecha del servicio, las modificaciones de fecha o ingreso
                            están sujetas a un cobro del 20% de penalidad.</li>
                        <li>Las modificaciones entre los 29 – 8 días naturales antes de la fecha de inicio del servicio
                            tienen una penalidad del 50% sobre el pago total del servicio.</li>
                        <li>No se realizan modificaciones faltando 7 o 1 día antes de la fecha de inicio. Perdiendo el
                            total pagado de la reserva.</li>
                    </ul>
                    <h3>Cancelaciones hechas por los Clientes:</h3>
                    <ul>
                        <li>Las cancelaciones o los cambios realizados por el cliente deben ser presentadas por escrito por
                            el cliente la brevedad posible.</li>
                        <li>El cliente es responsable por los costos o gastos incurridos por la cancelación.</li>
                        <li>Todas las devoluciones correspondientes se realizarán directamente a su tarjeta de crédito o
                            cuenta bancaria.</li>
                        <li>Las sanciones por cancelaciones:
                            <ul>
                                <li>Cancelación del tour una vez registrado y comprado el permiso, incurre una pérdida del
                                    total de su depósito. Depósito de reserva no reembolsable.</li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Cancelaciones de Vuelos Aéreos:</h3>
                    <ul>
                        <li>Todas las cancelaciones de vuelos están sujetas a condiciones de cancelación impuestas por las
                            aerolíneas.</li>
                        <li>Estamos actuando como su agente y no tenemos ninguna responsabilidad por la actuación de los
                            servicios de las líneas aéreas, incluyendo accidentes, muerte, daños personales, daños
                            materiales o retraso del vuelo.</li>
                    </ul>
                    <h3>Precios:</h3>
                    <ul>
                        <li>Todos los precios indicados son por persona y están expresados en dólares.</li>
                        <li>Una vez sea recibido el depósito del 60% del costo del tour, se confirma la reserva de su
                            paquete de
                            viaje.</li>
                        <li>Los precios mostrados en esta web no incluyen la comisión de envío adicional.</li>
                        <li>Preguntar antes de hacer un depósito o envío de dinero, la comisión que le cobran a fin de
                            evitar
                            inconvenientes en el último momento.</li>
                    </ul>
                    <h3>Reservas: </h3>
                    <p>Para realizar una reserva deberá de proporcionar cierta información, esta tendrá que ser real y
                        completa
                        TAL Y COMO SE MUESTRA EN SU DOCUMENTO DE IDENTIDAD O PASAPORTE, DOCUMENTO QUE DEBERÁ PORTAR DURANTE
                        SU
                        RECORRIDO O CAMINATA; tener en cuenta que está información será manejada de manera
                        confidencial.<br>Para
                        efectuar la reserva, por favor envíenos un correo electrónico con los siguientes datos:</p>
                    <ul>
                        <li>Tipo de servicio.</li>
                        <li>Fecha de inicio</li>
                        <li>El numero de pasajeros</li>
                        <li>Nombre completo (Como aparece en su pasaporte).</li>
                        <li>Número de pasaporte</li>
                        <li>Nacionalidad</li>
                        <li>Edad</li>
                        <li>Cualquier informacion importante que debemos saber.</li>
                    </ul>
                    <p>
                        Tomar en consideración portar los documentos originales cuando realice el viaje; caso contrario el
                        control de ingreso anulará su permiso.<br>
                        En caso de menores de edad es indispensable enviar una copia de su documento de identidad y/o
                        pasaportes válidos. Se recomienda realizar caminata a niños mayores de 7 años.<br>
                        Los documentos deben ser válidos como mínimo hasta los 5 días posteriores a la fecha del inicio del
                        tour. Los puestos de control están ubicados en el inicio de la Caminata y en el ingreso de la
                        Ciudadela de Machu Picchu.<br>
                        Para los residentes en Perú de cualquier nacionalidad enviar una copia de su tarjeta CE (Carnet de
                        Extranjería).<br>
                        Si por alguna razón, decide tramitar un nuevo pasaporte después de haber realizado la reserva (para
                        este momento los permisos ya habrán sido comprados); deberá portar el pasaporte antiguo y el
                        pasaporte vigente; caso contrario el control le negará el acceso.
                    </p>
                </div>

                <div class="space"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
