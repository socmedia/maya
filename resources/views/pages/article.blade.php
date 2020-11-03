@extends('layouts/landing')

@push('meta')
<title>Maya Spring Bed | Good Sleep Good Day !</title>
<meta name="keywords" content="Maya Spring Bed, Kasur, Kasur Murah Surakarta, Kasur Premium Surakarta">
<meta name="description"
    content="Dapatkan info berupa artikel seputar kasur di website resmi Maya Spring Bed. Tambah pengetahuan anda seputar kasur latex, matras, spring bed dan masih banyak yang lain">
<meta property="og:title" content="Maya Spring Bed" />
<meta property="og:url" content="https://https://mayaspringbed.id" />
<meta property="og:type" content="website" />
<meta property="og:description"
    content="Dapatkan info berupa artikel seputar kasur di website resmi Maya Spring Bed. Tambah pengetahuan anda seputar kasur latex, matras, spring bed dan masih banyak yang lain">
<meta property="og:image" content="https://mayaspringbed.id/img/logo.png">
<meta property="twitter:title" content="Maya Spring Bed" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:description"
    content="Dapatkan info berupa artikel seputar kasur di website resmi Maya Spring Bed. Tambah pengetahuan anda seputar kasur latex, matras, spring bed dan masih banyak yang lain">
<meta property="twitter:image" content="https://mayaspringbed.id/img/logo.png">
@endpush

@section('content')
<x-navbar-sub />

<x-breadcrumb>
    <a class="breadcrumb-item" href="{{route('index')}}">Beranda</a>
    <span class="breadcrumb-item active">Artikel</span>
</x-breadcrumb>

<x-blog :blog="$blogs" :popular="$populars" />

<div class="container">
    <div class="row pb-5">
        <div class="col-12 col-lg-8 d-flex justify-content-center">
            {{$blogs->links()}}
        </div>
    </div>
</div>

@endsection