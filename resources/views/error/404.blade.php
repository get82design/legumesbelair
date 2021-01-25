@extends('layouts.myapp')

@section('dynamicPageTitle', 'Mon Compte')
@section('description', "")
@section('keywords', "")

@section('content')

    <!-- Error -->
	<div class="bg12 how-height1 pos-relative how4 flex-col-c-m p-rl-15 p-tb-50">
		<img class="ab-t-l" src="images/other-14.jpg" alt="IMG">
		<img class="ab-t-r" src="images/other-15.jpg" alt="IMG">
		<img class="ab-b-l" src="images/other-17.jpg" alt="IMG">
		<img class="ab-b-r" src="images/other-16.jpg" alt="IMG">

		<span class="txt-l-701 cl6 txt-center p-b-30 respon1">
			Oops!
		</span>

		<span class="txt-l-114 cl6 txt-center p-b-30 respon15">
			404-ERREUR
		</span>

		<span class="txt-s-122 cl9 txt-center p-b-50">
			La page que vous recherchez n'a pas été trouvée!
		</span>

		<a href="{{route('home')}}" class="flex-c-m txt-s-107 cl0 bg10 size-a-30 hov-btn2 trans-04">
			revenir à l'accueil
		</a>
	</div>

@endsection