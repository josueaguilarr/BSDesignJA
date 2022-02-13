<?php
    $bk_nombre= "/^[a-zA-ZÀ-ÿ\s]{4,16}$/"; //Letras y espacios, pueden llevar acentos.
    $bk_apellidop= "/^[a-zA-ZÀ-ÿ\s]{5,16}$/";  //Letras y espacios, pueden llevar acentos.
    $bk_apellidom= "/^[a-zA-ZÀ-ÿ\s]{5,16}$/"; // Letras y espacios, pueden llevar acentos.
	$bk_correo= "/^[a-zA-Z0-9_.+-]+@[a-zA-Z]+\.[a-zA-Z]+$/";
	$bk_telefono= "/^\d{10,15}$/"; // 10 a 15 numeros.
    $bk_edad= "/^\d{2}$/"; // 2 numeros.
    $bk_cp= "/^\d{5}$/"; // 5 numeros.
    $bk_rfc= "/^[A-Z]{1,1}[AEIOU]{1,1}[A-Z]{2,2}[0-9]{6,6}[0-9A-Z]{3,3}$/"; // 13 numeros
    $bk_curp= "/^[A-Z]{1,1}[AEIOU]{1,1}[A-Z]{2,2}[0-9]{6,6}[HM]{1,1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3,3}[0-9A-Z]{1,1}[0-9]{1,1}$/"; // 18 numeros

    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $cp = $_POST['cp'];
    $rfc = $_POST['rfc'];
    $curp = $_POST['curp'];
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
                Registro de estudiantes UT
                <br><small class="text-muted">¡Validado!</small>
            </h2>
            <form action="" class="formulario" id="formulario">
                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_nombre, $nombre)); ?>" value="<?php echo $nombre ?>" name="nombre" id="nombre" disabled>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                </div>
    
                <!-- Grupo: Ap. Paterno -->
                <div class="formulario__grupo" id="grupo__apellidop">
                    <label for="apellidop" class="formulario__label">Apellido Paterno</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_apellidop, $apellidop)); ?>" value="<?php echo $apellidop ?>" name="apellidop" id="apellidop" disabled>
                    </div>
                </div>
    
                <!-- Grupo: Ap. Materno -->
                <div class="formulario__grupo" id="grupo__apellidom">
                    <label for="apellidom" class="formulario__label">Apellido Materno</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_apellidom, $apellidom)); ?>" value="<?php echo $apellidom ?>" name="apellidom" id="apellidom" disabled>
                    </div>
                </div>
    
                <!-- Grupo: Correo Electronico -->
                <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo Electrónico</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input <?php  if(preg_match($bk_correo, $correo)); ?>" value="<?php echo $correo ?>" name="correo" id="correo" disabled>
                    </div>
                </div>
    
                <!-- Grupo: Teléfono -->
                <div class="formulario__grupo" id="grupo__telefono">
                    <label for="telefono" class="formulario__label">Teléfono</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_telefono, $telefono)); ?>" value="<?php echo $telefono ?>" name="telefono" id="telefono" disabled>
                    </div>
                </div>
    
                <!-- Grupo: Edad -->
                <div class="formulario__grupo" id="grupo__edad">
                    <label for="edad" class="formulario__label">Edad</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_edad, $edad)); ?>" value="<?php echo $edad ?>" name="edad" id="edad" disabled>
                    </div>
                </div>
    
                <!-- Grupo: CP -->
                <div class="formulario__grupo" id="grupo__cp">
                    <label for="cp" class="formulario__label">Código Postal</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_cp, $cp)); ?>" value="<?php echo $cp ?>" name="cp" id="cp" disabled>
                    </div>
                </div>
    
                <!-- Grupo: RFC -->
                <div class="formulario__grupo" id="grupo__rfc">
                    <label for="rfc" class="formulario__label">RFC</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?php  if(preg_match($bk_rfc, $rfc)); ?>" value="<?php echo $rfc ?>" name="rfc" id="rfc" disabled>
                    </div>
                </div>
    
                <!-- Grupo: CURP -->
                <div class="formulario__grupo" id="grupo__curp">
                    <label for="curp" class="formulario__label">CURP</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input <?  if(preg_match($bk_curp, $curp)); ?>" value="<?php echo $curp; ?>" name="curp" id="curp" disabled>
                    </div>
                </div>
    
                <!-- Grupo: Terminos y Condiciones -->
                <!-- <div class="formulario__grupo" id="grupo__terminos">
                    <label class="formulario__label">
                        <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                        Acepto los Terminos y Condiciones
                    </label>
                </div> -->
    
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <a href="form.html"><button type="button" class="formulario__btn">Volver</button></a>
                </div>
    
                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                </div> -->
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