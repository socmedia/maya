@extends('layouts/landing')

@section('content')
<x-navbar />

<x-intro />

<x-about />

<x-product :products="$products" />

<x-contact />

<section class="py-5">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="header-text">Artikel</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 mb-3 mb-lg-0">
                <h3 class="text-capitalize mb-3"><u>Terbaru</u></h3>
                <div class="row">
                    @foreach ($blogs as $blog)
                    <article class="col-12 col-lg-6 mb-3 mb-lg-0" style="height: 100%">
                        <div class="card rounded" style="background: none">
                            <div class="card-body">
                                <div class="title">
                                    <h4 class="text-capitalize"><strong>{{$blog->title}}</strong></h4>
                                </div>
                                <div class="d-flex text-muted pt-3">
                                    <small class="d-flex align-items-center">
                                        <svg class="mr-2" aria-hidden="true" focusable="false" data-prefix="far"
                                            data-icon="eye" height="12px" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                            </path>
                                        </svg>
                                        {{$blog->viewed}} View</small>
                                    <small class="ml-auto">{{$blog->created_at->format('d M, Y h:i a')}}</small>
                                </div>
                                <p class="my-3 desc">
                                    {{$blog->subject}}
                                </p>
                                <a href="{{route('showArticle', $blog->slug_title)}}"
                                    class="btn btn-block company">Selengkapnya</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <h3 class="text-capitalize mb-3"><u>Terpopuler</u></h3>
                <div class="row">
                    @foreach ($populars as $popular)
                    <article class="col-12 mb-3" style="height: 100%">
                        <h5 class="text-capitalize">
                            <a class="text-muted"
                                href="{{route('showArticle', $blog->slug_title)}}">{{$popular->title}}</a>
                        </h5>
                        <div class="d-flex text-muted pt-2">
                            <small class="d-flex align-items-center">
                                <svg class="mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye"
                                    height="12px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                    </path>
                                </svg>
                                {{$popular->viewed}} View</small>
                            <small class="ml-auto">{{$popular->created_at->format('d M, Y h:i a')}}</small>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

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
