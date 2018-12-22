{{
/*
|--------------------------------------------------------------------------
| StudNote v1
|--------------------------------------------------------------------------
| Contact me for anything that concerns the project ! :)
| Creator : Salah Eddine Bentayeb
| GitHub  : https://github.com/HalasProject/
| Facebook: https://www.facebook.com/BentayebSalah
| Twitter : https://twitter.com/halasdior
| LinkedIn: https://www.linkedin.com/in/salahbentayeb/
| 
*/
}}
@extends('layouts.app')

@section('content')

<div class="container">
		<style>
		.slide-right {
			animation: slide-right 2s cubic-bezier(0.900, 0.500, 0.450, 0.940)  both;
		}
		@keyframes slide-right {
			0% {

				transform: translateX(700px);
				opacity:0;
			}
			100% {

				transform: translateX(-0px);
				opacity: 100;
			}
		}
	</style>
	
	<div class="jumbotron">
			<img src="{{asset('images/1.png')}}" class="slide-right mx-auto d-block align-center"  height="230px" alt="">
		<div class="text-center">
				<h1 class="display-3">Bienvenue</h1>
				<p>&nbsp;&nbsp;StudNote est un petit projet, afin de pouvoir télécharger et imprimer les affichages de notes assurés par nos professeurs à la faculté , et ceci dans le but de vous faciliter la tâche.</p>
		</div>
	</div>
</div>

@endsection