<?php $ruta = base_url(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>CLM Developers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="<?php echo $ruta;?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $ruta;?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $ruta;?>assets/css/jquery-gmaps-latlon-picker.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="#">BUSCADOR <span class="red">.</span></a></h1>
                    </div>
                    <div class="links span8">
                        <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
            	<div class="iphone span1">
                </div>
                <div class="register span10">
                    <form action="" method="post">
                    	<fieldset>
	                        <h2>&nbsp;REGISTRA TU <span class="red"><strong>IGLESIA</strong></span></h2>
	                        <label for="iglesia">Iglesia *</label>
	                        <input type="text" id="nom_iglesia" name="nom_iglesia" placeholder="Ingrese nombre de la iglesia...">
	                        <label for="encargado">Pastor Principal *</label>
	                        <input type="text" id="encargado" name="encargado" placeholder="Ingrese datos del pastor..">
	                        <label for="pais">País *</label>
	                        <!--<select id="pais" name="pais">
	                        	<option>Perú</option>
	                        </select>-->
	                        <input type="text" id="pais" name="pais" placeholder="Ingrese el pais..">
	                        <label for="ciudad">Ciudad *</label>
	                        <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese la ciudad..">
	                        <label for="direccion">Dirección *</label>
	                        <input type="text" id="direccion" name="direccion" placeholder="Ingrese la direccion..">
	                        <label for="telefono">Teléfono(s) *</label>
	                        <input type="text" id="telefono" name="telefono" placeholder="Ingrese el teléfono..">
	                        <label for="email">Email</label>
	                        <input type="text" id="email" name="email" placeholder="Ingrese email..">
                        </fieldset>
                        <fieldset class="gllpLatlonPicker">
							<div class="gllpMap">Google Maps</div>
							<input type="hidden" class="gllpLatitude" id="gllpLatitude" value="-11.350796722383672" />
							<input type="hidden" class="gllpLongitude" id="gllpLongitude" value="-75.41015625" />
							<input type="hidden" class="gllpZoom" value="6" />
						</fieldset>
                        <button type="submit">REGISTRAR</button>
                    </form>
                </div>
                <div class="iphone span1">
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                	<div class="span9">
                	</div>
                	<div class="span3">
                        <h4><a href="http://clmdevelopers.com/"> Copyright <span class="red">© CLM Developers.</span></a></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="<?php echo $ruta;?>assets/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo $ruta;?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $ruta;?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo $ruta;?>assets/js/scripts.js"></script>
        <!-- <script src="js/jquery-1.7.2.min.js"></script>-->
		<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo $ruta;?>assets/js/jquery-gmaps-latlon-picker.js"></script>

    </body>

</html>