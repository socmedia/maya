@extends('layouts/landing')

@push('meta')
<title>Maya Spring Bed | {{$article->title}}</title>
<meta name="keywords" content="{{$article->tags}}">
<meta name="description" content="Artikel Maya Spring Bed - {{$article->subject}}">
<meta property="og:title" content="Maya Spring Bed" />
<meta property="og:url" content="https://https://mayaspringbed.id" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Artikel Maya Spring Bed - {{$article->subject}}">
<meta property="og:image" content="https://mayaspringbed.id/img/logo.png">
<meta property="twitter:title" content="Maya Spring Bed" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:description" content="Artikel Maya Spring Bed - {{$article->subject}}">
<meta property="twitter:image" content="https://mayaspringbed.id/img/logo.png">
@endpush

@section('content')
<x-navbar-sub />

<x-breadcrumb>
    <a class="breadcrumb-item" href="{{route('index')}}">Beranda</a>
    <a class="breadcrumb-item" href="{{route('articles')}}">Artikel</a>
    <a class="breadcrumb-item">Baca</a>
    <span class="breadcrumb-item active">{{$article->title}}</span>
</x-breadcrumb>

<div class="container padding-top-70">
    <div class="card-body p-2 p-lg-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 class="mb-4 article-title">{{$article->title}}</h1>
                <div class="row">
                    <div class="col-12 mb-3">
                        @foreach ($tags as $tag)
                        <span class="badge badge-pill badge-secondary"># {{$tag}}</span>
                        @endforeach
                    </div>
                    <div class="col-6">
                        <small class="text-muted">
                            <i class="fas fa-fw fa-eye"></i>
                            Dibaca oleh, {{$article->viewed}} orang
                        </small>
                    </div>
                    <div class="col-6 text-right">
                        <small class="text-muted">
                            Dipublish pada,
                            <strong>{{$article->created_at->format('d M. Y h:i a')}}</strong>
                        </small>
                    </div>
                </div>
                <div class="py-4">
                    {!!$article->description!!}
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <h5 class="pl-3 mb-4"><strong><u>Artikel Terkait</u></strong></h5>
                @foreach ($relates as $relate)
                <article class="col-12 mb-3">
                    <h5 class="card-title">
                        <a href="{{route('showArticle', $relate->slug_title)}}">{{$relate->title}}</a>
                    </h5>
                    <div class="d-flex text-muted pt-1">
                        <small class="d-flex align-items-center">
                            <svg class="mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye"
                                height="12px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                </path>
                            </svg>
                            {{$relate->viewed}} View</small>
                        <small class="ml-auto">{{$relate->created_at->format('M d, Y. h:m a')}}</small>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
