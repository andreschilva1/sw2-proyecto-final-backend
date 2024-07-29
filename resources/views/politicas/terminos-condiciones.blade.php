<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Términos y Condiciones - LogisTrack</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing/css/styles.css') }}" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        p {
            margin-bottom: 15px;
        }
        ul {
            margin-left: 20px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <img src="{{ asset('landing/assets/img/logistrack.png') }}" alt="..."
                style="height: 4rem; margin-right: 10px" />
            <a class="navbar-brand fw-bold"  href="{{url('/')}}">Logistrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                </ul>

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">Log in</a>

                            {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif

             

            </div>
        </div>
    </nav>
 
    <!-- Quote/testimonial aside-->
    <header class="masthead">
        <div class="container px-5">
            <h1>Términos y Condiciones</h1>
            <p><strong>Última actualización:</strong> 2024-04-20 </p>
        
            <h2>1. Introducción</h2>
            <p>Bienvenido a LogisTrack, una aplicación móvil desarrollada por Chisilva Ventures. Estos Términos y Condiciones rigen el uso de nuestra aplicación. Al utilizar LogisTrack, usted acepta cumplir con estos términos. Si no está de acuerdo con alguna parte de estos términos, no debe utilizar nuestra aplicación.</p>
        
            <h2>2. Información de la Empresa</h2>
            <p>Chisilva Ventures</p>
            <p>Dirección: Bolivia, Santa Cruz, Calle Florida # 853</p>
            <p>Email: andreschilva3@gmail.com</p>
        
            <h2>3. Uso de la Aplicación</h2>
            <p>LogisTrack permite a los usuarios realizar pagos unitarios y acceder a la cámara y galería de fotos de sus dispositivos. Al usar estas funciones, usted acepta permitir a LogisTrack acceder a estas partes de su dispositivo.</p>
        
            <h2>4. Registro de Usuario</h2>
            <p>Para utilizar ciertos servicios de LogisTrack, es posible que deba registrarse y crear una cuenta. Usted es responsable de mantener la confidencialidad de su información de cuenta y contraseña, y de todas las actividades que ocurran bajo su cuenta.</p>
        
            <h2>5. Pagos</h2>
            <p>LogisTrack permite realizar pagos unitarios. Usted es responsable de todas las transacciones realizadas a través de la aplicación. Chisilva Ventures no se hace responsable de ningún error o problema relacionado con los pagos realizados mediante LogisTrack.</p>
            <p>Todos los pagos se procesan a través de proveedores de servicios de pago de terceros. Al realizar un pago, usted acepta los términos y condiciones de dichos proveedores de servicios de pago.</p>
        
            <h2>6. Privacidad y Acceso a Datos</h2>
            <p>LogisTrack puede solicitar acceso a su cámara y galería de fotos para brindar ciertos servicios. Al permitir este acceso, usted consiente que LogisTrack pueda utilizar estas funciones de su dispositivo.</p>
            <p>La información recopilada por LogisTrack se utilizará de acuerdo con nuestra Política de Privacidad, que puede encontrarse en <a href="{{route('politicas')}}">Politicas Privacidad.</a> Esta política describe cómo recopilamos, utilizamos y protegemos su información personal.</p>
        
            <h2>7. Uso Aceptable</h2>
            <p>Usted acepta usar LogisTrack solo para fines lícitos y de acuerdo con estos Términos y Condiciones. Usted se compromete a no utilizar la aplicación:</p>
            <ul>
                <li>De cualquier manera que viole cualquier ley o regulación local, nacional o internacional aplicable.</li>
                <li>Para transmitir, o procurar el envío de cualquier material publicitario o promocional no solicitado o no autorizado o cualquier otra forma de solicitud similar (spam).</li>
                <li>Para hacerse pasar por o intentar hacerse pasar por Chisilva Ventures, un empleado de Chisilva Ventures, otro usuario o cualquier otra persona o entidad.</li>
                <li>Para participar en cualquier otra conducta que restrinja o inhiba el uso o disfrute de la aplicación por parte de cualquier persona, o que, según determinemos, pueda dañar a Chisilva Ventures o a los usuarios de la aplicación o exponerlos a responsabilidad.</li>
            </ul>
        
            <h2>8. Propiedad Intelectual</h2>
            <p>La aplicación y su contenido original (excluyendo el contenido proporcionado por los usuarios), características y funcionalidad son y seguirán siendo propiedad exclusiva de Chisilva Ventures y sus licenciantes. La aplicación está protegida por derechos de autor, marcas registradas y otras leyes de Bolivia y otros países.</p>
        
            <h2>9. Enlaces a Sitios Web de Terceros</h2>
            <p>Nuestra aplicación puede contener enlaces a sitios web o servicios de terceros que no son propiedad ni están controlados por Chisilva Ventures. Chisilva Ventures no tiene control sobre, y no asume ninguna responsabilidad por, el contenido, las políticas de privacidad o las prácticas de los sitios web o servicios de terceros. Usted reconoce y acepta que Chisilva Ventures no será responsable, directa o indirectamente, de ningún daño o pérdida causado o presuntamente causado por o en conexión con el uso de o la confianza en cualquier contenido, bienes o servicios disponibles en o a través de dichos sitios web o servicios.</p>
        
            <h2>10. Terminación</h2>
            <p>Podemos suspender o terminar su acceso a LogisTrack de inmediato, sin previo aviso o responsabilidad, por cualquier motivo, incluyendo sin limitación si usted incumple estos Términos y Condiciones.</p>
            <p>Tras la terminación, su derecho a usar la aplicación cesará inmediatamente. Si desea terminar su cuenta, puede simplemente discontinuar el uso de la aplicación.</p>
        
            <h2>11. Limitación de Responsabilidad</h2>
            <p>En ningún caso Chisilva Ventures, ni sus directores, empleados, socios, agentes, proveedores o afiliados, serán responsables por daños indirectos, incidentales, especiales, consecuentes o punitivos, incluyendo sin limitación, pérdida de beneficios, datos, uso, fondo de comercio u otras pérdidas intangibles, resultantes de (i) su acceso o uso o incapacidad de acceder o usar la aplicación; (ii) cualquier conducta o contenido de terceros en la aplicación; (iii) cualquier contenido obtenido de la aplicación; y (iv) el acceso, uso o alteración no autorizados de sus transmisiones o contenido, ya sea basado en garantía, contrato, agravio (incluyendo negligencia) o cualquier otra teoría legal, ya sea que hayamos sido informados o no de la posibilidad de tales daños, e incluso si se encuentra que un remedio establecido en este documento ha fallado en su propósito esencial.</p>
        
            <h2>12. Descargo de Responsabilidad</h2>
            <p>Su uso de la aplicación es bajo su propio riesgo. La aplicación se proporciona "TAL CUAL" y "SEGÚN DISPONIBILIDAD". La aplicación se proporciona sin garantías de ningún tipo, ya sean expresas o implícitas, incluyendo, pero no limitándose a, garantías implícitas de comerciabilidad, idoneidad para un propósito particular, no infracción o curso de desempeño.</p>
            <p>Chisilva Ventures, sus subsidiarias, afiliados y sus licenciantes no garantizan que a) la aplicación funcionará de manera ininterrumpida, segura o disponible en cualquier momento o ubicación en particular; b) se corregirán los errores o defectos; c) la aplicación está libre de virus u otros componentes dañinos; o d) los resultados del uso de la aplicación cumplirán con sus requisitos.</p>
        
            <h2>13. Indemnización</h2>
            <p>Usted acepta defender, indemnizar y exonerar de toda responsabilidad a Chisilva Ventures y a sus licenciatarios y licenciantes, y a sus empleados, contratistas, agentes, oficiales y directores, de y contra cualquier reclamación, daño, obligación, pérdida, responsabilidad, costo o deuda, y gasto (incluyendo, pero no limitándose a, honorarios de abogados) que surja de o en relación con (a) su uso y acceso a la aplicación, por usted o cualquier persona que use su cuenta y contraseña; (b) un incumplimiento de estos Términos y Condiciones, o (c) contenido publicado en la aplicación.</p>
        
            <h2>14. Ley Aplicable</h2>
            <p>Estos Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes de Bolivia, sin tener en cuenta sus disposiciones sobre conflicto de leyes.</p>
            <p>Nuestra falta de hacer cumplir cualquier derecho o disposición de estos Términos no se considerará una renuncia a esos derechos. Si alguna disposición de estos Términos es considerada inválida o inaplicable por un tribunal, las disposiciones restantes de estos Términos permanecerán en vigor. Estos Términos constituyen el acuerdo completo entre nosotros respecto a nuestra aplicación, y reemplazan cualquier acuerdo anterior que pudiéramos tener entre nosotros respecto a la aplicación.</p>
        
            <h2>15. Cambios</h2>
            <p>Nos reservamos el derecho, a nuestra sola discreción, de modificar o reemplazar estos Términos en cualquier momento. Si una revisión es material intentaremos proporcionar un aviso con al menos 30 días de antelación antes de que los nuevos términos entren en vigor. Lo que constituye un cambio material se determinará a nuestra sola discreción.</p>
            <p>Al continuar accediendo o utilizando nuestra aplicación después de que esas revisiones entren en vigor, usted acepta estar sujeto a los términos revisados. Si no acepta los nuevos términos, por favor deje de usar la aplicación.</p>
        
            <h2>16. Contacto</h2>
            <p>Si tiene alguna pregunta sobre estos Términos y Condiciones, por favor contáctenos:</p>
            <p>Chisilva Ventures: <a href="https://andreschilva3.wixsite.com/chisilva-ventures">https://andreschilva3.wixsite.com/chisilva-ventures</a> </p>
            <p>Dirección: Bolivia, Santa Cruz, Calle Florida # 853</p>
            <p>Email: andreschilva3@gmail.com</p>
        
            <p>Gracias por usar LogisTrack.</p>
        </div>
    </header>
  
 
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Logistrack 2024. All Rights Reserved.</div>
                <a href="{{route('politicas')}}">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="{{ url('/terminos') }}">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text"
                                placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled"
                                id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

    <script src="{{ asset('landing/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

