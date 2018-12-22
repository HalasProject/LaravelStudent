<?php

namespace App\Http\Controllers;

use app\Policies\MessagePolicy;
use Illuminate\Http\Request;
use Auth;
use App\Message;
class MessageController extends Controller
{

	public function index(){

		$ListMessage = Message::all();


		return view('contact/listMessage',['AllMessage' => $ListMessage]);

	}


	public function delete($id){

		$DeleteMe = Message::find($id);

		$DeleteMe->delete();

		session()->flash('Deleted','Message suprimé avec succes ! ');

		return redirect('contact');
	}

	public function show($id){

		$DetailleMessage = Message::find($id);

		return view('contact/MessageDetaille', ['info' => $DetailleMessage]);
	}

	public function store(Request $request){

		$add = new Message();

		$add->gender = $request->input('gender');
		$add->nom =    $request->input('nom');
		$add->prenom = $request->input('prenom');
		$add->email = $request->input('email');
		$add->objet = $request->input('objet');
		$add->text = $request->input('text');

		$add->save();

		return redirect('/');   
	}

}
