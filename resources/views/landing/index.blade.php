@extends('layouts/landing')

@push('meta')
<title>Maya Spring Bed | Good Sleep Good Day !</title>
<meta name="keywords" content="Maya Spring Bed, Kasur, Kasur Murah Surakarta, Kasur Premium Surakarta">
<meta name="description" content="Maya Spring Bed, Good Sleep Good Day">
<meta property="og:title" content="Maya Spring Bed" />
<meta property="og:url" content="https://https://mayaspringbed.id" />
<meta property="og:type" content="website" />
<meta property="og:description"
    content="Maya Springbed akan membuat tidur kamu berkualitas dan badan jadi sehat dan segar untuk menghadapi hari-hari beratmu!">
<meta property="og:image" content="https://mayaspringbed.id/img/logo.png">
<meta property="twitter:title" content="Maya Spring Bed" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:description"
    content="Maya Springbed akan membuat tidur kamu berkualitas dan badan jadi sehat dan segar untuk menghadapi hari-hari beratmu!">
<meta property="twitter:image" content="https://mayaspringbed.id/img/logo.png">
@endpush

@section('content')

<x-navbar />

<x-header />

<x-about />

<x-process />

<x-product :products="$products" />

<x-blog :blog="$blogs" :popular="$populars" />

<x-contact />

<form id="cart-form" class="display:none;" target="_blank" method="GET"></form>
@endsection


@push('styles')
<style>
    .title {
        height: 72px;
        overflow: hidden;
    }

    .title h4,
    .desc {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>
@endpush