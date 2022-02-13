<?php
    require_once "recaptchalib.php";

    if ( isset($_POST['nombre']) and isset($_POST['apellidop']) and isset($_POST['apellidom'])
    and isset($_POST['correo']) and isset($_POST['telefono']) and isset($_POST['edad'])
    and isset($_POST['cp']) and isset($_POST['rfc']) and isset($_POST['curp'])) {

        $secret = "6LfhB3YeAAAAAKDyG7PIeWvCJN6CwzsZmed0-NPv";

        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response']; 
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = array(
            'secret' => $secret,
            'response' => $captcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
            );}
        $curlConfig = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data
        );
        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $jsonResponse = json_decode($response);
        if ($jsonResponse->success === true) {
        // Si el código es correcto, seguimos procesando el formulario como siempre 
        } else { 
        // Si el código no es válido, lanzamos mensaje de error al usuario 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Inicio | JA-D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/headers.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">JA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#marketing" class="nav-link disabled">Notas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#video-bootstrap" class="nav-link disabled">Video</a>
                        </li>
                        <li class="nav-item">
                            <a href="#page-bootstrap" class="nav-link disabled">Página oficial</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link disabled">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="form.html" class="nav-link active">Registro</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Buscar
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main><br><br><br>
        <h2 style="text-align: center; padding: 10px;;">
            Registro de estudiantes
            <small class="text-muted">UT</small>
        </h2>
        <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
        <form action="validar-form.php" class="formulario" id="formulario" method="POST">
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Josue">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener
                    letras.</p>
            </div>

            <!-- Grupo: Ap. Paterno -->
            <div class="formulario__grupo" id="grupo__apellidop">
                <label for="apellidop" class="formulario__label">Apellido Paterno</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellidop" id="apellidop" placeholder="Aguilar">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido tiene que tener de 5 a 16 dígitos y solo puede contener
                    letras.</p>
            </div>

            <!-- Grupo: Ap. Materno -->
            <div class="formulario__grupo" id="grupo__apellidom">
                <label for="apellidom" class="formulario__label">Apellido Materno</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellidom" id="apellidom" placeholder="Guerrero">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido tiene que tener de 5 a 16 dígitos y solo puede contener
                    letras.</p>
            </div>

            <!-- Grupo: Correo Electronico -->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo Electrónico</label>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="correo" id="correo"
                        placeholder="correo@correo.com">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones, guion
                    bajo y algunos caracteres especiales.</p>
            </div>

            <!-- Grupo: Teléfono -->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Teléfono</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El telefono solo puede contener números y el maximo son 15 dígitos.
                </p>
            </div>

            <!-- Grupo: Edad -->
            <div class="formulario__grupo" id="grupo__edad">
                <label for="edad" class="formulario__label">Edad</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="edad" id="edad" placeholder="20">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La edad solo puede contener números y el maximo son 2 dígitos.</p>
            </div>

            <!-- Grupo: CP -->
            <div class="formulario__grupo" id="grupo__cp">
                <label for="cp" class="formulario__label">Código Postal</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="cp" id="cp" placeholder="77000">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El código postal solo puede contener números y el maximo son 5
                    dígitos.</p>
            </div>

            <!-- Grupo: RFC -->
            <div class="formulario__grupo" id="grupo__rfc">
                <label for="rfc" class="formulario__label">RFC</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="rfc" id="rfc" placeholder="XXXXXXXXXXXXX">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El RFC solo puede contener números y letra mayuscula, el maximo son
                    13 dígitos.</p>
            </div>

            <!-- Grupo: CURP -->
            <div class="formulario__grupo" id="grupo__curp">
                <label for="curp" class="formulario__label">CURP</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="curp" id="curp" placeholder="XXXXXXXXXXXXXXXX">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El CURP solo puede contener números y letra mayuscula, el maximo son
                    18 dígitos.</p>
            </div>

            <!-- Grupo: Terminos y Condiciones -->
            <div class="formulario__grupo" id="grupo__terminos">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                    Acepto los Terminos y Condiciones
                </label>
            </div>

            <div class="g-recaptcha" data-sitekey="6LfhB3YeAAAAAFqtwxkLg_8Ey1dGNB1JDnCvGFLT"></div>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="button" class="formulario__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Verificar</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Información del formulario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="formulario__mensaje" id="formulario__mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                                    correctamente. </p>
                            </div>
                            <div class="formulario__mensaje2" id="formulario__mensaje2">
                                <p><i class="fas fa-check-circle"></i> <b>Exito:</b> Formulario enviado exitosamente.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- FOOTER -->
        <footer class="container">
            <hr class="featurette-divider" />
            <p class="float-end"><a href="#">Volver al inicio</a></p>
            <p>
                &copy; 2021 Josue Aguilar &middot; Bootstrap-Design
            </p>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="js/form.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>