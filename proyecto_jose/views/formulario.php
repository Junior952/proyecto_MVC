<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'layouts/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php require 'layouts/preloader.php'; ?>
    <?php require 'layouts/navbar.php'; ?>
    <?php require 'layouts/sidebar.php'; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>

                    <!-- /.info-box -->

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="../controlers/controller_user.php?action=crear " method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Ingrese nombre completo" required="required" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="Email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="Clave" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="Clave2" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
                  </div>
                  <div class="form-group">
                    <label>Pregunta Seguridad</label>
                    <select class="form-control" name="PreguntaS" id="preguntaSeguridad" required="required">
                      <option value="">Selecciona</option>
                      <option>Nombre de tu primera mascota</option>
                      <option>Fecha de nacimiento de alguno de tus padres</option>
                      <option>Comida favorita</option>
                      <option>Color favorito</option>
                    </select>
                    <br />
                    <label>Respuesta</label>
                    <input type="text" name="Respuesta" placeholder="Respuesta" class="form-control" required="required" />

                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">Terminos de servicio</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <?php require 'layouts/footer.php'; ?>
    <?php require 'layouts/sidebar-dark.php'; ?>
    <!-- Control sidebar content goes here -->
</div>
<!-- ./wrapper -->
<?php require 'layouts/script.php'; ?>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
</body>
</html>


