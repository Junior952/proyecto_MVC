<!DOCTYPE html>
<html lang="es">
<head>
  <?php require 'layouts/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require 'layouts/preloader.php'; ?>
  <?php require 'layouts/navbar.php'; ?>
  <?php require 'layouts/sidebar.php'; ?>
  <div class="content-wrapper">
    <!-- Encabezado de contenido -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validación de Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Validación</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Contenido principal -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Formulario -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario de Ejemplo</h3>
              </div>
              <form id="quickForm" action="../controlers/controller_user.php?action=crear" method="POST">
                <div class="card-body">
                  <!-- Campo Nombre -->
                  <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Ingrese su nombre completo" required>
                  </div>
                  <!-- Campo Email -->
                  <div class="form-group">
                    <label for="Email">Correo Electrónico</label>
                    <input type="email" name="Email" class="form-control" placeholder="Ingrese su correo electrónico" required>
                  </div>
                  <!-- Campo Contraseña -->
                  <div class="form-group">
                    <label for="Clave">Contraseña</label>
                    <input type="password" name="Clave" class="form-control" placeholder="Ingrese su contraseña" required>
                  </div>
                  <div class="form-group">
                    <label for="Clave2">Repetir Contraseña</label>
                    <input type="password" name="Clave2" class="form-control" placeholder="Repita su contraseña" required>
                  </div>
                  <!-- Pregunta de Seguridad -->
                  <div class="form-group">
                    <label>Pregunta de Seguridad</label>
                    <select class="form-control" name="PreguntaS" required>
                      <option value="">Seleccione una pregunta</option>
                      <option>Nombre de tu primera mascota</option>
                      <option>Fecha de nacimiento de alguno de tus padres</option>
                      <option>Comida favorita</option>
                      <option>Color favorito</option>
                    </select>
                    <label>Respuesta</label>
                    <input type="text" name="Respuesta" class="form-control" placeholder="Ingrese su respuesta" required>
                  </div>
                  <!-- Términos -->
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">
                        Acepto los <a href="#">Términos de Servicio</a>.
                      </label>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
</div>

<?php require 'layouts/script.php'; ?>
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>

<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert("Formulario enviado correctamente");
      }
    });

    $('#quickForm').validate({
      rules: {
        Nombre: {
          required: true,
        },
        Email: {
          required: true,
          email: true,
        },
        Clave: {
          required: true,
          minlength: 6
        },
        Clave2: {
          required: true,
          equalTo: "[name='Clave']"
        },
        PreguntaS: {
          required: true,
        },
        Respuesta: {
          required: true,
        },
        terms: {
          required: true
        },
      },
      messages: {
        Nombre: {
          required: "Por favor, ingrese su nombre completo.",
        },
        Email: {
          required: "Por favor, ingrese un correo electrónico.",
          email: "Ingrese un correo válido."
        },
        Clave: {
          required: "Por favor, ingrese una contraseña.",
          minlength: "La contraseña debe tener al menos 6 caracteres."
        },
        Clave2: {
          required: "Por favor, confirme su contraseña.",
          equalTo: "Las contraseñas no coinciden."
        },
        PreguntaS: {
          required: "Seleccione una pregunta de seguridad."
        },
        Respuesta: {
          required: "Por favor, proporcione una respuesta a la pregunta de seguridad."
        },
        terms: "Debe aceptar los términos de servicio."
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
</body>
</html>
