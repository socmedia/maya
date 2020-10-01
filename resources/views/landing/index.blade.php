@extends('layouts/landing')

@section('content')
<x-navbar />

<x-intro />

<x-about />

<x-product />

<x-contact />

<form id="cart-form" class="display:none;" target="_blank" method="GET"></form>
@endsection