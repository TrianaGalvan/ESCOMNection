<?php
    define("TITLE","Perfil");
    include($_SERVER["DOCUMENT_ROOT"]."/includes/basic_alumno.php");
?>
<link type="text/css" rel="stylesheet" href="../css/content/cv.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

    
    <div id="page-wrapper">
        <div class="container-fluid">


			<div class="page-header">
				<h1> </h1>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<a href="tabla-profesores.php"><button type="submit" class="btn btn-primary">Regresar</button></a>
				</div>	
			</div>			
            <div id="cv" class="instaFade">
                <div class="mainDetails">
                    <div id="headshot" class="quickFade">
                        <img src="../img/headshot.jpg" alt="Alan Smith" />
                    </div><!-- end headshot-->

                    <div id="name">
                        <h1 class="quickFade delayTwo">M. en C. Idalia Maldonado Castillo</h1>
                    </div><!-- end name--->

                    <div id="contactDetails" class="quickFade delayFour">
                        <ul>
                            <li>e: <a href="#" target="_blank">idaliamaldonado@gmail.com</a></li>
                            <li>m: 57296000 ext 52072</li>
                        </ul>
                    </div><!-- end contactDetails-->
                    <div class="clear"></div>
                </div><!-- end mainDetails-->

                <div id="mainArea" class="quickFade delayFive">

                    <section>
                        <article>
                            <div class="sectionTitle">
                                <h1>Información personal</h1>
                            </div><!-- end sectionTitle-->

                            <div class="sectionContent">
                            <article>
                                <h2>Datos personales</h2>
								<ul class="keySkills">

									<li>
										<p class="subDetails">Sexo:</p>
										<p>Femenino</p>								
									</li>


								
								</ul>
                            </article>					
						
                            </div><!-- end sectionContent-->
                        </article>
                        <div class="clear"></div>
                    </section><!-- end section-->
					
					
					<section>
                        <article>
                            <div class="sectionTitle">
                                <h1>Experiencia laboral</h1>
                            </div><!-- end sectionTitle-->

                            <div class="sectionContent">
                            <article>
                                <h2>Experiencia</h2>
								<ul class="keySkills">
									<li>
										<p class="subDetails">Empresa en la que laboró:</p>
										<p>Instituto Politécnico Nacional - ESCOM</p>									
									</li>
									<li>
										<p class="subDetails">Cargo:</p>
										<p>Profesor asociado C</p>								
									</li>
									<li>
										<p class="subDetails">Fecha de ingreso:</p>
										<p>2010</p>									
									</li>
									<li>
										<p class="subDetails">País:</p>
										<p>México</p>									
									</li>
								</ul>
                            </article>

                            </div><!-- end sectionContent-->
                        </article>
                        <div class="clear"></div>
                    </section><!-- end section-->

					<section>
                        <article>
                            <div class="sectionTitle">
                                <h1>Nivel o grado académico</h1>
                            </div><!-- end sectionTitle-->

                            <div class="sectionContent">
							
								<article>
									<h2>Nivel o grado</h2>
									<ul class="keySkills">
										<li>
											<p class="subDetails">Título o nivel académico:</p>
											<p>Ingeniería en Sistemas Computacionales </p>
											<p class="subDetails">Fecha de obtención:</p>
											<p>2001 </p>		
											<p class="subDetails">País:</p>
											<p>México </p>	
											<p class="subDetails">Estado:</p>
											<p>DF </p>	
											
										</li>

									</ul>
								</article>	
								<article>
									<h2>Nivel o grado</h2>
									<ul class="keySkills">
										<li>
											<p class="subDetails">Título o nivel académico:</p>
											<p>Maestra en Ciencias de la Computación </p>
											<p class="subDetails">Fecha de obtención:</p>
											<p>2007 </p>		
											<p class="subDetails">País:</p>
											<p>Canada </p>	
											<p class="subDetails">Estado:</p>
											<p>Saskatchewan </p>	
											
										</li>

									</ul>
								</article>									


                            </div><!-- end sectionContent-->
                        </article>
                        <div class="clear"></div>
                    </section><!-- end section-->

                </div>
            </div>
         
        </div><!-- end container fluid-->
    </div><!-- wrapper-->      
        
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        var pageTracker = _gat._getTracker("UA-3753241-1");
        pageTracker._initData();
        pageTracker._trackPageview();
    </script>
    <!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="../js/jquery/jquery-1.8.2.min.js"><\/script>')</script>
	
    </body>
</html>
