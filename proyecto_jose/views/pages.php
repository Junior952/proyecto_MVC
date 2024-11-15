<!DOCTYPE html>
<html lang="es">
<head>
  <?php require 'layouts/head.php'; ?>
  <!-- Estilo del tema -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require 'layouts/preloader.php'; ?>
  <?php require 'layouts/navbar.php'; ?>
  <?php require 'layouts/sidebar.php'; ?>

  <!-- Contenedor de contenido. Contiene el contenido de la página -->
  <div class="content-wrapper">
    <!-- Encabezado de contenido (encabezado de la página) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Factura</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Factura</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Nota:</h5>
              Esta página ha sido optimizada para imprimir. Haz clic en el botón de imprimir al final de la factura para probarlo.
            </div>

            <!-- Contenido principal -->
            <div class="invoice p-3 mb-3">
              <!-- Fila del título -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                    <small class="float-right">Fecha: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- Fila de información -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  De
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Teléfono: (804) 123-5432<br>
                    Correo: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Para
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Teléfono: (555) 539-1037<br>
                    Correo: john.doe@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Factura #007612</b><br>
                  <br>
                  <b>ID de Pedido:</b> 4F3S8J<br>
                  <b>Pago Vencido:</b> 2/22/2014<br>
                  <b>Cuenta:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Fila de la tabla -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Cant.</th>
                      <th>Producto</th>
                      <th># de Serie</th>
                      <th>Descripción</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>Guantes de manejo atractivos de trofeo de testosterona</td>
                      <td>$64.50</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Need for Speed IV</td>
                      <td>247-925-726</td>
                      <td>Umami biodiésel de Wes Anderson</td>
                      <td>$50.00</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Monsters DVD</td>
                      <td>735-845-642</td>
                      <td>Arte callejero de Terry Richardson Helvetica</td>
                      <td>$10.70</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Grown Ups Blue Ray</td>
                      <td>422-568-642</td>
                      <td>Letterpress lomo despeinado</td>
                      <td>$25.99</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- Columna de métodos de pago -->
                <div class="col-6">
                  <p class="lead">Métodos de Pago:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy, disqus, groupon y otras plataformas.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Total a Pagar 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Impuesto (9.3%):</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Envío:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Esta fila no aparecerá al imprimir -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Imprimir</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Enviar Pago</button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generar PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.contenido -->
  </div>
  <!-- /.contenedor de contenido -->
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
  <!-- Aquí va el contenido de la barra lateral de control -->
</div>
<!-- ./envoltorio -->
<?php require 'layouts/script.php'; ?>
</body>
</html>
