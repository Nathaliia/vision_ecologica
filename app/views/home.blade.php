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
		<span class="titulo_content">LOREM IPSUM DOLOR SIT AMET</span>
		<p class="text_content">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consectka</p>
	</div>

	<div class="filter"></div>
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
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum
		</div>
	</div>
	<div class="section_about">
		<div class="icon">
			<img width="90px" src="{{ asset('assets/images/about_us/icon2_pack5.jpg') }}">
		</div>
		<div class="titulo">Mision</div>

		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum
		</div>
	</div>
	<div class="section_about">
		<div class="icon">
			<img width="90px" src="{{ asset('assets/images/about_us/icon3_pack5.jpg') }}">
		</div>
		<div class="titulo">Vision</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum
		</div>
	</div>
</div>
@stop


@section('services')
<div class="our_services service1">
	<div class="content_services">
		<div class="title_services">SERVICIOS</div>

		<div class="text_services">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque.
		</div>
		<div class="filter_services"></div>
	</div>
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camion.png') }}">
			<span class="title">LOREM IPSUM DOLOR</span>
		</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum lobortis. Vestibulum nibh neque, commodo non consequat vitae, aliquet
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service2">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camara.png') }}">
			<span class="title">LOREM IPSUM DOLOR</span>
		</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum lobortis. Vestibulum nibh neque, commodo non consequat vitae, aliquet sit amet urna. Cras massa tortor, gravida vitae sapien et, dignissim finibus erat. In in efficitur lectus, quis luctus felis. Sed ac posuere libero, eget fringilla turpis.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service3">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/camion_agua.png') }}">
			<span class="title">LOREM IPSUM DOLOR</span>
		</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum lobortis. Vestibulum nibh neque, commodo non consequat vitae, aliquet sit amet urna. Cras massa tortor, gravida vitae sapien et, dignissim finibus erat. In in efficitur lectus, quis luctus felis. Sed ac posuere libero, eget fringilla turpis.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service4">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/manguera.png') }}">
			<span class="title">LOREM IPSUM DOLOR</span>
		</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum lobortis. Vestibulum nibh neque, commodo non consequat vitae, aliquet sit amet urna. Cras massa tortor, gravida vitae sapien et, dignissim finibus erat. In in efficitur lectus, quis luctus felis. Sed ac posuere libero, eget fringilla turpis.
		</div>
	</div>
	<div class="filter_services"></div>
</div>	
<div class="our_services service5">
	<div class="service">
		<div class="header">
			<img class="icon" width="30px" src="{{ asset('assets/images/services/icons/rejilla.png') }}">
			<span class="title">LOREM IPSUM DOLOR</span>
		</div>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum lobortis. Vestibulum nibh neque, commodo non consequat vitae, aliquet sit amet urna. Cras massa tortor, gravida vitae sapien et, dignissim finibus erat. In in efficitur lectus, quis luctus felis. Sed ac posuere libero, eget fringilla turpis.
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
		<img width="90px" src="{{ asset('assets/images/clients/sura.png') }}">
	</div>
@stop

@section('contact')
	<div class="titulo_contact">CONTACTO</div>
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/location.png') }}">
		</div>
		<div class="text_contact">
			<span><b>Calle 110 #45-60</b></span><br>
			<span>Bogota, Colombia.</span>
		</div>
	</div>	
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/phone.png') }}">
		</div>
		<div class="text_contact">
			<span><b>313-900-9097</b></span><br>
			<span>¡Llamanos!</span>
		</div>
	</div>
	<div class="section_contact">
		<div class="icon_contact">
			<img width="45px" src="{{ asset('assets/images/contact/mail.png') }}">
		</div>
		<div class="text_contact">
			<span><b>visionecologica@gmail.com</b></span><br>
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
