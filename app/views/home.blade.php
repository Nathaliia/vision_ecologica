@extends('layouts.base')

@section('home')
	<div class="header">
		<div class="logo">
			<img width="38%" src="{{ asset('assets/images/logotipo.png') }}">
		</div>
		<div class="boton_contacto">
			<a class="enlace_contacto" href="#contact">CONTACTO</a>
		</div>
	</div>
	<div class="content_home">
		<span class="titulo_content">SOLUCIONES AMBIENTALES A MEDIDA</span>
		<p class="text_content">En vision ecologica y ambiental queremos que nuestros clientes reciban los mejores servicios de recoleccion, tratamiento y dispocision final de residuos de una manera eficiente y eficaz, respetando siempre y poniendo como factor principal, EL AMBIENTE.</p>
	</div>

	<div class="filter"></div>
	<div class="loader">
	  <img src="{{ asset('assets/images/squares.gif') }}">
	</div>
@stop

@section('menu')
	<div class="nav"> 
		<div class="logo_menu">
			<a href="#home"><img width="100px" src="{{ asset('assets/images/logotipo.png') }}"></a>
		</div>
		<div class="botones">
			<ul>
				<li><a href="#about_us">Nosotros</a></li>
				<li><a href="#services">Servicios</a></li>
				<li><a href="#clients">Clientes</a></li>
				<li><a href="#contact">Contacto</a></li>
			</ul>
		</div>
	</div>
@stop

@section('about_us')
<div class="us">
	<h1>NOSOTROS</h1>
	<div class="section_about">
		<div class="icon">
			<img width="110px" src="{{ asset('assets/images/about_us/icon1_pack5.jpg') }}">
		</div>
		<div class="titulo">Nuestra Empresa</div>
		<div class="content">
			Vision ecologica y ambiental es una empresa dedicada al sector sanitario, que tiene como principal labor realizar el mantenimiento de redes hidrosanitarias,el  manejo integral de residuos industriales y domesticos, asegurando siempre la perfeccion en el servicio y una gestion responsable con el medio ambiente.
		</div>
	</div>
	<div class="section_about">
		<div class="icon">
			<img width="90px" src="{{ asset('assets/images/about_us/icon2_pack5.jpg') }}">
		</div>
		<div class="titulo">Mision</div>

		<div class="content">
			Cumplir, anticipar y exceder las espectativas de nuestros clientes, siempre brindando la mejor calidad en el servicio, desde el punto de vista, tecnico, humano, tecnologico y ecologico a traves del desarrollo constante de nuestra experiencia y la calidad humana de nuestro equipo de trabajo.<br><br>
		</div>
	</div>
	<div class="section_about">
		<div class="icon">
			<img width="90px" src="{{ asset('assets/images/about_us/icon3_pack5.jpg') }}">
		</div>
		<div class="titulo">Vision</div>
		<div class="content">
			Convertirnos en la primera compañia prestadora de servicios de acueducto y alcantarillados, a nivel nacional e internacional, ofreciendo a nuestros clientes las soluciones ambientales de acuerdo a la normatividad vigente.<br><br><br>
		</div>
	</div>
</div>
@stop


@section('services')
<div class="our_services service1">
	<div class="content_services">
		<div class="title_services">SERVICIOS</div>

		<div class="text_services">
			Nuestros servicios se basan en la calidad, la eficiencia y la eficacia durante todo el proceso, contamos con el mejor recurso humano, capacitado y especializado en cada una de sus areas para prestar el mejor servicio a nuestros clientes.
		</div>
		<div class="filter_services"></div>
	</div>
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camion.png') }}">
			<span class="title">SERVICIO DE VACTOR</span>
		</div>
		<div class="content">
			Mantenimiento y destaponamiento de redes de alcantarillado (pluvial, sanitario o industrial) para tuberias de 2° de diametro en adelante.
			Limpieza de pozos de inspeccion y sumideros.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service2">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camara.png') }}">
			<span class="title">VIDEO INSPECCION CON SISTEMA CCTV</span>
		</div>
		<div class="content">
			Diagnostico e inspeccion de redes con equipo de TV con informe en video, que le permite determinar los problemas internos de la red de alcantarillado. Se entrega el correspondiente informe escrito y visual de la tiberia inspeccionada y las respectivas recomendaciones.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service3">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/manguera.png') }}">
			<span class="title">HIDROJET</span>
		</div>
		<div class="content">
			Limpieza de evacuacion de residuos (lodos), provenientes de trampas de grasas, pozos septicos, tanques de plantas de tratamiento de aguas residuales y cualquier otro sistema utilizado en la depuracion de efluentes residuales.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service4">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camion_agua.png') }}">
			<span class="title">MINI VACTOR</span>
		</div>
		<div class="content">
			Recoleccion, transporte, tratamiento y dispocicion de residuos industriales liquidos no peligrosos (lodos), con certificacion final de dispocision en la planta de tratamiento.
		</div>
	</div>
	<div class="filter_services"></div>
</div>				 
@stop

@section('clients')
	<h1>CLIENTES</h1>
	
	<div class="logo_clients">
		<img width="130px" src="{{ asset('assets/images/clients/unicentro.png') }}">
	</div>

	<div class="logo_clients">
		<img width="90px" src="{{ asset('assets/images/clients/colombina.jpg') }}">
	</div>

	<div class="logo_clients">
		<img width="70px" src="{{ asset('assets/images/clients/argos.png') }}">
	</div>

	<div class="logo_clients">
		<img width="90px" src="{{ asset('assets/images/clients/jwmarriot.png') }}">
	</div>
@stop

@section('contact')
	<div class="titulo_contact">CONTACTO</div>
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/location.png') }}">
		</div>
		<div class="text_contact">
			<span><b>Diagonal 77B # 119a-73</b></span><br>
			<span>Bogota, Colombia.</span>
		</div>
	</div>	
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/phone.png') }}">
		</div>
		<div class="text_contact">
			<span><b>320-327-3784</b></span><br>
			<span>¡Llamanos!</span>
		</div>
	</div>
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/mail.png') }}">
		</div>
		<div class="text_contact">
			<span><b>visionecologicayambiental@gmail.com</b></span><br>
			<span>¡Escribenos!</span>
		</div>
	</div>
@stop

@section('form')
	<div class="form">
		<form method="post" action="contact/save">
			<input name="nombre" type="text" placeholder="Nombre" >
			<input name="email" type="text" placeholder="Correo" >
			<input name="telefono" type="text" placeholder="Telefono" >
			<input class="button" type="submit" value="ENVIAR">
		</form>
	</div>
@stop
