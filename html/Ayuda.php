<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <title>SMART TRAVEL - Admin</title>
    <link rel="icon" type="image/png" href="../media/logo.png">
  </head>
  <body style="background-image: url('../media/back.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

    <?php require ('../html/Header.php'); ?>

    <div class="body">

        <div class="row w-100 m-0 mt-2 p-2">

          <div class="row w-100 m-0 mt-2 mb-2 p-2 text-center">

            <div class="col-9">
                <h2><strong>Centro de Ayuda</strong></h2>
            </div>
            <div class="col-3">
              <button type="button" class="btn btn-outline-success" name="button">
                <a href="../controllers/principal.php" style="color: black; text-decoration: none; font-size: 16px;">Volver al Principal
                  <img src="../media/volver.png" alt="" width="30px" height="30px">
                </a>
              </button>
            </div>

          </div>

          <div class="col-6">

              <div class="p-3 border bg-dark text-center"><h3 style="color:white;">Preguntas Frecuentes</h3></div>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ??Qu?? es mis viajes?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Mis Viajes es tu secci??n de cliente donde podr??s ver tus viajes actuales / pasados, administrar tus reservas y mantener tus datos actualizados <br>
                        Adem??s, tambi??n podr??s:</p>
                      <li>Consultar el estado de tus reservas</li>
                      <li>Solicitar cambios de datos, fechas, destinos, etc</li>
                      <li>Solicitar una cancelaci??n</li>
                      <li>Realizar pedidos especiales a la aerol??nea, hotel, empresa de alquiler y otros proveedores</li>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ??Cu??l es el estado de mi reserva?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <p>Chequear el estado de tu reserva es muy f??cil. Para hacerlo, sigue estos pasos:</p>
                        <li>1. Ingresa a Mis Viajes</li>
                        <li>2. Selecciona tu viaje</li>
                        <li>3. Encuentra tu reserva y ??listo!</li>
                        <li>4. Recuerda iniciar sesi??n con el email que usaste para hacer tu compra. Si ingresaste el email correcto y no encuentras tu reserva, espera unos minutos hasta que se actualice la informaci??n.</li>

                        <br> <p>???? Tip para tu viaje :<br>

                        ??Mantente atento a nuestras comunicaciones! Siempre te avisamos cuando hay un cambio en el estado de tu reserva.</p>      </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ??C??mo puedo gestionar mi reserva?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                          <p>En Mis Viajes puedes gestionar tus reservas las 24h y desde cualquier dispositivo. ???? <br>

                          Estas son algunas de las cosas que puedes hacer:</p>

                          <li>Consultar el estado de tus reservas</li>
                          <li>Solicitar cambios de datos, fechas, destinos, etc</li>
                          <li>Solicitar una cancelaci??n</li>
                          <li>Seleccionar nuevas fechas para tu ticket abierto</li>
                          <li>Realizar pedidos especiales a la aerol??nea, hotel, empresa de alquiler y otros proveedores</li> <br>
                          <p>Para ver todas las acciones disponibles para administrar tu reserva, sigue estos pasos:</p> <br>
                          <li>Ingresa a Mis Viajes</li>
                          <li>Selecciona tu viaje</li>
                          <li>Elige una opci??n de acuerdo a tus preferencias</li>

                          <p>????Ten en cuenta: <br><br>

                          Las reservas se asocian al email que ingresaste al momento de hacer la compra.<br>
                          Si no encuentras tus reservas, es posible que hayas realizado la compra con un email diferente o que tengas que esperar unos minutos para que se actualice tu informaci??n.</p>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ??C??mo accedo a Mi Cuenta?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Accede a tu cuenta Smart Travel oprimiendo el ??cono Mi perfil en el margen superior izquierdo de la pantalla. ???? <br>

                        Con tu cuenta puedes personalizar tu perfil, gestionar tu viaje, cargar tus viajes en favoritos y ??mucho m??s!</p>

                      <p>??Todav??a no tienes tu cuenta?</p>
                      <li>Luego de crear tu cuenta, te enviaremos un email con un enlace para activarla.</li>
                      <li>El acceso directo tiene una validez de 24h. En caso de que expire, podr??s volver a solicitarlo.</li>
                      <li>Para ingresar con Facebook, es necesario que tengas un email asociado en esa red social</li>
                      <li>Si ya tienes una cuenta y no recuerdas tu contrase??a, ??descuida! te ayudaremos.</li>
                    </div>
                  </div>
                </div>

              </div>

          </div>

          <div class="col-6">

            <div class="p-3 border bg-dark text-center">
              <h3 style="color:white;">??Donde estamos ubicados?</h3>
            </div>

            <div class="p-3 border bg-light">
              <p>Nos encontramos en el centro porte??o, en una ubicaci??n de f??cil acceso desde cualquier punto de la Ciudad Aut??noma de Buenos Aires</p>
              <iframe style="border:solid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.29794094478!2d-58.38419418509252!3d-34.60376138081139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aa9f0a6da5edb%3A0x11bead4e234e558b!2sObelisco!5e0!3m2!1ses-419!2sar!4v1636419140860!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

        </div>

        <div class="row w-100 m-0 mt-2 p-2">

          <div class="col-6">

            <div class="p-3 border bg-dark text-center">
              <h3 style="color:white;">Acerca de Nosotros</h3>
            </div>

            <div class="p-3 border bg-light">
                <p>Smart Travel naci?? en 1998 con el fin de administrar y operar 35 terminales a??reas dentro del territorio nacional argentino, constituy??ndose en el mayor operador privado del mundo. </p>
                <p>Hoy cuenta con m??s de 2.100 empleados que trabajan con el objetivo de asegurar la mayor calidad de servicios y cumplir con los m??s altos est??ndares internacionales de calidad, seguridad y confort los 365 d??as del a??o.</p>
                <p>A trav??s del compromiso y valores de su capital humano, la compa????a conecta al pa??s con el mundo, operando el 90% del tr??fico aerocomercial argentino. Asimismo, contribuye con el desarrollo social, econ??mico y cultural del pa??s, convirti??ndose en un referente regional e internacional de la industria aeroportuaria.</p>
                <p>Smart Travel, el mayor operador aeroportuario del pa??s, est?? enfocado en la experiencia del cliente y en modernizar, transformar y expandir la infraestructura y los servicios de las terminales a??reas para conectar comunidades a trav??s de una red eficiente y sustentable, preservando el cuidado del medio ambiente y desarrollando la industria aeron??utica argentina.</p> <p> Smart Travel Inc. </p>
            </div>

          </div>

          <div class="col-6">

            <div class="p-3 border bg-dark text-center">
              <h3 style="color:white;">Centro de Ayuda Aerol??neas</h3>
            </div>

            <div class="p-3 border bg-light" style="overflow:auto; height:400px;">
              <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Raz??n Social</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Ubicaci??n</th>
                  </tr>
                </thead>

                <?php foreach ($this->empresas as $empresa) { ?>
                  <tbody>
                    <tr class="table-primary">
                      <td><?= htmlentities($empresa['nombre']) ?></td>
                      <td>
                        <button type="button" class="btn btn-outline-primary" name="button">
                          <a href="mailto:<?= htmlentities($empresa['contacto']) ?>">
                            <img src="../media/mail.png" alt="" width="30px" height="30px">
                          </a>
                        </button>
                      </td>
                      <td>
                        <a target="_blank" href="https://maps.google.com/?q=<?= htmlentities($empresa['direccion']) ?>">
                          <?= htmlentities($empresa['direccion']) ?>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
              </table>
            </div>

          </div>

        </div>

    </div>

    <?php require ('../html/Footer.php'); ?>

  </body>
</html>
