<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'layouts/head.php'; ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require 'layouts/preloader.php'; ?>
  <?php require 'layouts/navbar.php'; ?>
  <?php require 'layouts/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/josefigueredo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Jose Figueredo</h3>

                <p class="text-muted text-center">Desarrollador de software</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Seguidores</b> <a class="float-right">1M</a>
                  </li>
                  <li class="list-group-item">
                    <b>Seguidos</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Amigos</b> <a class="float-right">9</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Caja Acerca de mí -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Acerca de mí</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Educación</strong>

                <p class="text-muted">
                  Tecnólogo en Análisis y Desarrollo de Software.
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

                <p class="text-muted">Sogamoso - Boyacá</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">1. MySQL</span><br>
                  <span class="tag tag-success">2. CSS</span><br>
                  <span class="tag tag-info">3. Javascript</span><br>
                  <span class="tag tag-warning">4. PHP</span><br>
                  <span class="tag tag-primary">5. Python</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

                <p class="text-muted">Soy una persona ética, llena de virtudes y motivaciones, adaptada para desempeñarme efectivamente en cualquier área.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Línea de tiempo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ajustes</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Publicación -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="Imagen de usuario">
                        <span class="username">
                <a href="#">Jonathan Burke Jr.</a>
                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
              </span>
                        <span class="description">Compartido públicamente: hoy a las 7:30 p.m.</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum representa una larga tradición para diseñadores, tipógrafos
                        y similares. Algunas personas lo odian y abogan por su desaparición, pero
                        otras ignoran el odio mientras crean herramientas increíbles para ayudar
                        a crear texto de relleno para todos, desde los amantes del tocino hasta
                        los fanáticos de Charlie Sheen.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Me gusta</a>
                        <span class="float-right">
                <a href="#" class="link-black text-sm">
                  <i class="far fa-comments mr-1"></i> Comentarios (5)
                </a>
              </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Escribe un comentario">
                    </div>
                    <!-- /.post -->

                    <!-- Publicación -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user7-128x128.jpg" alt="Imagen de usuario">
                        <span class="username">
                <a href="#">Sarah Ross</a>
                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
              </span>
                        <span class="description">Te envió un mensaje - hace 3 días</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Solo quería recordarte lo mucho que te aprecio y
                        lo agradecida que estoy por nuestra amistad.
                        Siempre me haces sonreír y me alegra saber que
                        te tengo. ¡Te quiero un montón!
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Respuesta">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Enviar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Publicación -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user6-128x128.jpg" alt="Imagen de usuario">
                        <span class="username">
                <a href="#">Adam Jones</a>
                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
              </span>
                        <span class="description">Publicado 5 fotos - hace 5 días</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="../dist/img/photo1.png" alt="Foto">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../dist/img/photo2.png" alt="Foto">
                              <img class="img-fluid" src="../dist/img/photo3.jpg" alt="Foto">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../dist/img/photo4.jpg" alt="Foto">
                              <img class="img-fluid" src="../dist/img/photo1.png" alt="Foto">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Me gusta</a>
                        <span class="float-right">
                <a href="#" class="link-black text-sm">
                  <i class="far fa-comments mr-1"></i> Comentarios (5)
                </a>
              </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Escribe un comentario">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- La línea de tiempo -->
                    <div class="timeline timeline-inverse">
                      <!-- Etiqueta de tiempo de la línea de tiempo -->
                      <div class="time-label">
              <span class="bg-danger">
                10 Feb. 2014
              </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- ítem de la línea de tiempo -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Equipo de Soporte</a> te envió un correo</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                          </div>
                        </div>
                      </div>
                      <!-- FIN ítem de la línea de tiempo -->
                      <!-- ítem de la línea de tiempo -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> Hace 5 minutos</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> aceptó tu solicitud de amistad
                          </h3>
                        </div>
                      </div>
                      <!-- FIN ítem de la línea de tiempo -->
                      <!-- ítem de la línea de tiempo -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> Hace 27 minutos</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> comentó en tu publicación</h3>

                          <div class="timeline-body">
                            ¡Llévame a tu líder!
                            ¡Suiza es pequeña y neutral!
                            ¡Nosotros somos más como Alemania, ambiciosos y mal entendidos!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">Ver comentario</a>
                          </div>
                        </div>
                      </div>
                      <!-- FIN ítem de la línea de tiempo -->
                      <!-- Etiqueta de tiempo de la línea de tiempo -->
                      <div class="time-label">
              <span class="bg-success">
                3 Ene. 2014
              </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- ítem de la línea de tiempo -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> Hace 2 días</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> subió nuevas fotos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- FIN ítem de la línea de tiempo -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo electrónico</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Correo electrónico">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experiencia</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experiencia"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Habilidades">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Acepto los <a href="#">términos y condiciones</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
  <!-- Control sidebar content goes here -->
</div>
<!-- ./wrapper -->
<?php require 'layouts/script.php'; ?>
</body>
</html>


