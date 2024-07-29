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
            <body>
                <h1>Política de Privacidad</h1>
                <p><strong>Última actualización:</strong>  2024-04-20 </p>
            
                <h2>1. Introducción</h2>
                <p>En Chisilva Ventures, respetamos su privacidad y nos comprometemos a proteger la información personal que comparte con nosotros a través de nuestra aplicación móvil, LogisTrack. Esta Política de Privacidad describe cómo recopilamos, usamos, y protegemos su información personal.</p>
            
                <h2>2. Información que Recopilamos</h2>
                <p>Podemos recopilar y procesar la siguiente información personal sobre usted:</p>
                <ul>
                    <li><strong>Información de Identificación Personal:</strong> nombre, dirección de correo electrónico, número de teléfono, etc.</li>
                    <li><strong>Información de Pago:</strong> detalles de la tarjeta de crédito/débito y otra información de facturación.</li>
                    <li><strong>Información de Uso:</strong> detalles sobre su uso de la aplicación, incluidas las interacciones y transacciones realizadas.</li>
                    <li><strong>Información de Dispositivo:</strong> tipo de dispositivo, sistema operativo, identificadores únicos de dispositivo, dirección IP, etc.</li>
                    <li><strong>Acceso a Cámara y Galería de Fotos:</strong> imágenes y videos tomados o seleccionados por usted a través de la aplicación.</li>
                </ul>
            
                <h2>3. Cómo Utilizamos su Información</h2>
                <p>Utilizamos la información que recopilamos para los siguientes propósitos:</p>
                <ul>
                    <li>Proveer y mantener nuestra aplicación.</li>
                    <li>Procesar transacciones y enviar confirmaciones de pago.</li>
                    <li>Personalizar y mejorar su experiencia en la aplicación.</li>
                    <li>Comunicarle actualizaciones, ofertas especiales e información relevante sobre la aplicación.</li>
                    <li>Responder a sus comentarios, preguntas y brindar servicio al cliente.</li>
                    <li>Monitorear y analizar tendencias, uso y actividades en relación con nuestra aplicación.</li>
                    <li>Detectar, prevenir y abordar problemas técnicos, fraudes y otras actividades maliciosas.</li>
                </ul>
            
                <h2>4. Cómo Compartimos su Información</h2>
                <p>No vendemos, comerciamos ni transferimos su información personal a terceros sin su consentimiento, excepto en las siguientes circunstancias:</p>
                <ul>
                    <li>Con proveedores de servicios de terceros que nos ayudan a operar nuestra aplicación, realizar transacciones y proporcionar servicios a nuestros usuarios.</li>
                    <li>Para cumplir con leyes, regulaciones, procesos legales o solicitudes gubernamentales aplicables.</li>
                    <li>Para proteger los derechos, la propiedad o la seguridad de Chisilva Ventures, nuestros usuarios u otros.</li>
                    <li>En relación con una fusión, adquisición o venta de activos de la empresa, en cuyo caso se le notificará antes de que su información sea transferida y esté sujeta a una política de privacidad diferente.</li>
                </ul>
            
                <h2>5. Seguridad de su Información</h2>
                <p>Implementamos medidas de seguridad razonables para proteger su información personal de accesos no autorizados, pérdida, alteración o divulgación. Sin embargo, ninguna transmisión de datos a través de Internet o sistema de almacenamiento electrónico es completamente segura, por lo que no podemos garantizar la seguridad absoluta de su información.</p>
            
                <h2>6. Sus Derechos de Privacidad</h2>
                <p>Usted tiene ciertos derechos sobre su información personal, incluyendo el derecho a acceder, corregir, actualizar o solicitar la eliminación de su información personal. Para ejercer estos derechos, por favor contáctenos en andreschilva3@gmail.com.</p>
            
                <h2>7. Retención de Datos</h2>
                <p>Retendremos su información personal solo durante el tiempo que sea necesario para cumplir con los propósitos descritos en esta Política de Privacidad, a menos que se requiera o permita un período de retención más largo por ley.</p>
            
                <h2>8. Privacidad de los Menores</h2>
                <p>Nuestra aplicación no está dirigida a menores de 13 años. No recopilamos conscientemente información personal de menores de 13 años. Si descubrimos que un menor de 13 años nos ha proporcionado información personal, eliminaremos dicha información lo antes posible.</p>
            
                <h2>9. Cambios a esta Política de Privacidad</h2>
                <p>Podemos actualizar esta Política de Privacidad de vez en cuando. Le notificaremos sobre cualquier cambio publicando la nueva Política de Privacidad en esta página. Se recomienda revisar esta Política de Privacidad periódicamente para cualquier cambio. Los cambios a esta Política de Privacidad son efectivos cuando se publican en esta página.</p>
            
                <h2>10. Contacto</h2>
                <p>Si tiene alguna pregunta sobre estos Términos y Condiciones, por favor contáctenos:</p>
                <p>Chisilva Ventures: <a href="https://andreschilva3.wixsite.com/chisilva-ventures">https://andreschilva3.wixsite.com/chisilva-ventures</a> </p>
                <p>Dirección: Bolivia, Santa Cruz, Calle Florida # 853</p>
                
                <p>Email: andreschilva3@gmail.com</p>
            </body>
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

