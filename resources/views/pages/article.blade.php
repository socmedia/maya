@extends('layouts/landing')

@section('content')
<x-navbar />
<div class="container mt-5 pt-5">
    <div class="card-body p-2 p-lg-4">
        <div class="row">
            <div class="col-12 col-lg-8">
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
        </div>
    </div>
</div>
@endsection


@push('styles')
@endpush
