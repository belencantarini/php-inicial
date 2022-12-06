<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Dra Julieta</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php
    // Creo mis variables que contienen las caracteristicas de los tratamientos
    
    const TTO1 = "Acido hialuronico";
    const TTO2 = "Botox";
    const TTO3 = "Hilos tensores";

    $expl1="El tratamiento de relleno de labios con ácido hialurónico es la mejor opción para añadir volumen a tus labios. Pero no solo eso, puede ir mucho más allá del aumento de volumen. Gracias al ácido hialurónico se puede mejorar la estructura del labio";
    $expl2="El botox (o toxina botulínica de tipo A) es una neurotoxina que en la actualidad se suele utilizar en diferentes aplicaciones médicas. La más conocida es para la eliminación de arrugas faciales, ya que es el remedio que ofrece más ventajas: no requiere cirugía, se puede aplicar en cualquier momento, es indolora, sus efectos son inmediatos y muy rara vez produce efectos adversos.";
    $expl3="Los hilos tensores son unos hilos finos utilizados en Medicina Estética para rejuvenecer el rostro. Se pueden aplicar tanto para eliminar las arrugas y la flaccidez facial, como para levantar las cejas o, incluso, para redefinir el óvalo de la cara y el contorno de la mandíbula.";

    $arancel1=5000;
    $arancel2=25000;
    $arancel3=7500;

    $oferta= ($arancel1+$arancel2+$arancel3) * 0.85

    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn.pixabay.com/photo/2019/07/30/06/00/rose-4372048_960_720.png" alt="Logo" height="70" class="d-inline-block align-text-center">
                    <span class="h4 px-3">Dra Julieta BC - Medicina Estetica</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarBasic">
                    <ul class="navbar-nav ms-auto mb-2 mb-xl-0 gap-1">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tratamientos">Tratamientos esteticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#sobremi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link purple" aria-current="page" href="#contacto">Comenzá hoy tu tratamiento!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-grow-1">
        <section>
            <div class="banner">
                <h2>Medicina estetica</h2>
                <p>Esta es tu oportunidad de sentirte plena y hacer eso que siempre quisiste para estar mejor. Los tratamientos son minimamente invasivos y se adaptan a cada necesidad.<p>
                <button type="button" class="btn btn-outline-dark"><a href="#tratamientos" class="text-decoration-none text-white">Quiero saber más</a></button>
                <button type="button" class="btn-purple btn "><a href="#contacto" class="text-white text-decoration-none">Contacto</a></button>
            </div>
        </section>
        
        <section id="tratamientos" class="p-5">
            <div class="text-center text-uppercase">
                <h3>Tratamientos y tarifas</h3>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/manos-cosmetologos-hacen-inyecciones-medicas-botox-hermosa-rubia-lifting-piel-tratamiento-facial-belleza-spa_176420-9347.jpg?w=900&t=st=1668293866~exp=1668294466~hmac=2510e1d5d6ba4342e361a54fac9aee955d2184eb60782abea51984220741848e" class="card-img-top" alt="card-group-image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo TTO1 ?></h5>
                        <p class="card-text"><?php echo $expl1 ?></p>
                        <p class="small">Precio $<?php echo $arancel1 ?></p>
                    
                    </div>
                </div>
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/hermosa-joven-recibiendo-inyeccion-cosmetica-botox-su-rostro_1301-7787.jpg?w=900&t=st=1668293869~exp=1668294469~hmac=a58294f670bbfc30128d97c5fa3e1156d88eba22b3d79dddba6dcc07d21eaf0c" class="card-img-top" alt="card-group-image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo TTO2 ?></h5>
                        <p class="card-text"><?php echo $expl2 ?></p>
                        <p class="small">Precio $<?php echo $arancel2 ?></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://img.freepik.com/foto-gratis/cerrar-manos-dando-inyeccion-mujer-joven_23-2149350081.jpg?w=900&t=st=1668277988~exp=1668278588~hmac=f8c81f8d9f60c4628acc1c661768d9b2b1cfca6f56994eeab87683100683ce74" class="card-img-top" alt="card-group-image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo TTO3 ?></h5>
                        <p class="card-text"><?php echo $expl3 ?></p>
                        <p class="small">Precio $<?php echo $arancel3 ?></p>
                    </div>
                </div>
        </section>
        <section>
            <div id="sobremi" class="card">
                <div class="row g-0 row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <div class="card-body p-5">
                            <h3 class="card-title">Sobre mi</h3>
                            <p class="card-text">Medica cardiologa y especialista en medicina estetica. </p>
                            <button type="button" class="btn btn-outline-light">Quiero empezar mi tratamiento!</button>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <img class="rounded w-100" src="https://img.freepik.com/foto-gratis/doctor-tiro-medio-jeringa_23-2149313519.jpg?w=900&t=st=1668278014~exp=1668278614~hmac=1a84b9ec2560f76528f182e584e8a442084f7d81b7f81a74cb4efa33433f62e7" class="img-fluid w-100" alt="card-horizontal-image">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-75 m-auto py-5">
            <div>
                <div>
                    <div id="contacto" class="text-center">
                        <div class="text-uppercase">Contactame</div>
                        <div class="h2">Enviame tu consulta y empeza tu tratamiento!</div>
                        <p>Cuidá tu imagen, y sentite plena y natural: conocé los tratamientos. Tenemos tratamientos según tus necesidades.</p>
                        <small>Promocion 15% de descuento por los 3 tratamientos: $<?php echo $oferta ?></small>
                    </div>
                </div>
        </section>
    </main>
    <footer>
        <nav class="navbar navbar-expand-lg navfooter">
            <div class="container-fluid d-flex justify-content-center justify-content-md-between px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <p class="h4 px-3">Dra Julieta BC - Medicina Estetica</p>
                </a>
                <div class="d-flex">
                    <ul class="mediaicons d-flex nav">  
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i><p class="d-none">Facebook</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-1x" aria-hidden="true"></i><p class="d-none">Instagram</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-1x" aria-hidden="true"></i><p class="d-none">Twitter</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i><p class="d-none">LinkedIn</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="mailto:belencantarini@gmail.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><p class="d-none">Gmail</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://api.whatsapp.com/send?phone=5491155086946&text=Hola!%20Vi%20tu%20sitio%20web%20sobre%20métodos%20de%20estudio%20y%20quisiera%20saber%20más!" target="_blank"><i class="fab fa-whatsapp fa-1x" aria-hidden="true"></i><p class="d-none">WhatsApp</p></a></li>
                    </ul>          
                </div>
            </div>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>