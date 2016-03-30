@extends('layouts.base')

@section('home')
	<div class="header">
		<div class="logo">
			<img width="38%" src="{{ asset('assets/images/logotipo.png') }}">
		</div>
		<div class="boton_contacto">
			<a class="enlace_contacto" href="#">CONTACTO</a>
		</div>
	</div>
	<div class="content_home">
		<span class="titulo_content">LOREM IPSUM DOLOR SIT AMET</span>
		<p class="text_content">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consectka</p>
	</div>

	<div class="filter"></div>
@stop

@section('about_us')
<div class="us">
	<h1>NOSOTROS</h1>
	<div class="section_about">
		<div class="icon"><img width="110px" src="{{ asset('assets/images/about_us/icon1_pack5.jpg') }}"></div>
		<div class="titulo">Nuestra Empresa</div>
		<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem, sit amet tempus urna. Nulla at nulla felis. Aliquam eget iaculis neque. Donec laoreet elit nisl, sit amet lacinia diam accumsan id. Aenean tristique diam at dictum</div>
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
