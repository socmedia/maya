@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('article.index')}}">Artikel</a></li>
                        <li class="breadcrumb-item active"><a>Baca</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Baca Artikel
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.history.back()">
                                <i class="fas fa-arrow-left fa-fw mr-2"></i>Kembali
                            </button>
                        </div>
                    </div>


                    <div class="card-body p-2 p-lg-4">
                        <div class="row">
                            <div class="col-8 col-lg-6 m-auto">
                                <h1 class="mb-4">{{$article->title}}</h1>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        @foreach ($tags as $tag)
                                        <span class="badge badge-pill badge-secondary"># {{$tag}}</span>
                                        @endforeach
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">
                                            <i class="fas fa-fw fa-eye"></i>
                                            {{$article->viewed}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endpush
