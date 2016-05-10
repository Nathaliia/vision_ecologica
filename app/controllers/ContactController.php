<?php

class ContactController extends BaseController {

	public function getIndex(){
		echo "Hola";
	}

	public function postSave()
	{
		$inputs = Input::all();
		$nombre = $inputs["nombre"];
		$telefono = $inputs["telefono"];
		$email = $inputs["email"];

		$contact = new Contact();
		$contact->nombre	= $nombre;
		$contact->telefono	= $telefono;
		$contact->email 	= $email;
		$contact->save();

		$this->sendEmail( $nombre,$telefono,$email );

		return Redirect::to('/');
	}

	public function sendEmail( $nombre,$telefono,$email ){

		Mail::send('emails.contact', array('nombre'=>$nombre,'telefono'=>$telefono,'email'=>$email), function($message){
				    $message->subject('Contacto desde pagina web');
					$message->to('visionecologicayambiental@gmail.com');  
				});

	}

}
