<!DOCTYPE html>
<html lang="es">
<head>	
	<a class="boton_login" href="../login/login.html">Entrar</a>
		<a class="boton_login" href="../registro/registro.php">Registrarse</a>
	<img class = "imagensecond" src="../Imagenes/logoo.png ">
	<h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Fuentes.css">
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
	<link rel="stylesheet" type="text/css" href="../CSS/PreciosHorarios.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Staff.css">
	<link rel="stylesheet" type="text/css" href="../CSS/normalize.css">
	<link rel="stylesheet" type="text/css" href="../CSS/contacto.css">
	
	<link rel="shortcut icon" href="../Imagenes/logoo.ico" />
	<title>SECOND HOME STUDIO</title>
</head>
<header>
	
	<nav>
		<ul class = "menu">
			<li><a href="../QueEsSecondHome.html">SECOND HOME</a></li>
			<li><a href="../staff.html">STAFF</a></li>
			<li><a>Grupos</a>
				<ul class = "submenu">   
					<li><a>Competicion</a>
						<ul class = "submenu2">   
							<li><a href="../Grupos/Competición/On4Beats.html">ON4BEATS</a></li>
							<li><a href="../Grupos/Competición/CandyBeats.html">CANDY BEATS</a></li>
							<li><a href="../Grupos/Competición/BeatMeUp.html">BEAT ME UP</a></li>
							<li><a href="../Grupos/Competición/LadiesFirst.html">LADIES FIRST</a></li>
						</li>
					</ul>
					<li><a>Formación</a>
						<ul class = "submenu2"> 
							<li><a href="../Grupos/Formación/UrbanAdvance.html">URBAN ADVANCE</a>
								<li><a href="../Grupos/Formación/ElevenBlue.html">ELEVEN BLUE</a>
									<li><a href="../Grupos/Formación/UrbanKids.html">URBAN KIDS</a>
									</li> 
								</ul>
							</ul>
							<li><a>Clases</a>  
								<ul class = "submenuclases">   
									<li><a href="../Clases/reggaeton.html">REGGAETON</a></li> 
									<li><a href="../Clases/sexystyle.html">SEXY STYLE</a></li> 
									<li><a href="../Clases/popping.html">POPPING</a></li> 
									<li><a href="../Clases/commercialdance.html">COMMERCIAL DANCE</a></li> 
									<li><a href="../Clases/dancehall.html">DANCEHALL</a></li> 
									<li><a href="../Clases/hiphop.html">HIP HOP</a></li> 
									<li><a href="../Clases/houseshuffle.html">HOUSE & SHUFFLE</a></li> 
									<li><a href="../Clases/waackingvogue.html">WAACKING & VOGUE</a></li> 
									<li><a href="../Clases/twerk.html">TWERK</a></li> 
									<li><a href="../Clases/contempo.html">URBAN CONTEMPO</a></li>
									<li><a href="../Clases/kpop.html">KPOP</a></li> 
								</li>
							</ul>
							<li><a href="../precioshorario.html">Horario/Precios</a></li>
							<li><a href="../nosotros.html">Nosotros</a>
								<ul class = "submenunosotros">   
									<li><a href="merchandising.html">Merchandising</a></li> 
									<li><a href="instalaciones.html">Instalaciones</a></li> 
									<li><a href="contacto.html">Contacto</a></li>
								</li>
						</ul>
					</nav>
				</header>
				<body>
                 <div class = "contenedor">
					<div id="titulo">
                        <h1 style="color: black"> CONTACTA CON NOSOTROS </h1>
                            
                            </div>
                            
                            <p style="color: black; font-size: medium; font-style: italic;">Si quieres información de cualquiera de nuestros productos o tienes alguna pregunta, ponte en contacto con nosotros o rellena el formulario. 
                            <br/> 
                            <br/>
                            <br/>
                            <strong>E-Mail: secondhome@gmail.com</strong><br/>
                            
                            <strong>Telefono: 969 14 10 27</strong></p>
                            
                            <br/>
                            <div class = "formulario">
                            <form action="pagina2.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend style="color: black">CONSULTAS</legend>
                            
                        <p> Nombre* </p><br/>
                        <input type="text" name="nombre" size="20" maxlength="30" required /><br/>
                         
                        <p> Apellidos* </p><br/>
                        <input type="text" name="apellidos" size="35" maxlength="80" required / ><br/>
                         
                        <p>Telefono* </p><br/>
                        <input type="tel" name="telefono" maxlength="9" required><br/>
                        
                        <p>Email* </p><br/>
                        <input type="email" name="email" required><br/>
                        <p>Asunto </p><br/>
                        <input type="asunto" name="asunto" required><br/>
                        
                        <p>Mensaje* </p><br/>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" required ></textarea>
                         <br/>
                        <br/>
                        
                        </fieldset>
                        <br/>
                        <input type="reset" name="borrar" value="Borrar datos" />
                        <input type="submit" name="enviar" value="Envia datos" />
                            
                        </div>
                        </form>
                        <br/>
</div>
				</body>
				</html>