<!DOCTYPE html>
<head>
  <?php require "layouts/head.php"; ?>
</head>
<html lang="en">
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require "layouts/preloader.php"; ?>
  <?php require "layouts/navbar.php"; ?>
  <?php require "layouts/sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Hogar</a></li>
              <li class="breadcrumb-item active">Validacion</li>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="../Controlers/user_controller.php?action=crear" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Ingrese nombre completo" required="required"/>
                    <!--<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="Email" class="form-control" placeholder="Ingrese su email" required="required"/>
                    <!--<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">contraseña</label>
                    <input type="text" name="Clave" class="form-control" placeholder="Ingrese su contraseña" required="required"/>
                    <!--<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña 2</label>
                    <input type="text" name="Clave2" class="form-control" placeholder="Ingrese su clave 2"required="required/>
                    <!--<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                  </div>
                  <div class="form-group">
                    <label>Pregunta Seguridad</label>
                    <select class="form-control" name="PreguntaS" id="preguntaSeguridad"  required="required">
                      <option value="">Selecciona</option>
                      <option>Nombre de tu primera mascota</option>
                      <option>Fecha de nacimiento de alguno de tus padres</option>
                      <option>Comida favorita</option>
                      <option>Color favorito</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Respuesta</label>
                    <input type="text" name="Respuesta" placeholder="Respuesta" class="form-control" required="required"/>
                  </div>

                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
  <!-- /.content-wrapper -->
  <?php require "layouts/footer.php"; ?>
  <?php require "layouts/sidebar-dark.php"; ?>
</div>
<!-- ./wrapper -->

<?php require "layouts/script.php"; ?>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
        submit();
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
