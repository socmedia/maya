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
                        <li class="breadcrumb-item active"><a>Ubah</a></li>
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
                            Ubah Artikel
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.history.back()">
                                <i class="fas fa-arrow-left fa-fw mr-2"></i>Kembali
                            </button>
                        </div>
                    </div>


                    <div class="card-body p-2 p-lg-4">
                        <form action="{{route('article.update', $article->id)}}" method="POST">
                            @csrf
                            @method('put')

                            <fieldset class="form-group row">
                                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                    <label for="title">Judul Artikel</label>
                                    <input type="text" class="form-control @error('title') {{'is-invalid'}} @enderror"
                                        name="title" value="{{$article->title}}">
                                    @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="title">Tanggal Pembuatan</label>
                                    <div class="form-control">
                                        {{$article->created_at->format('d M, Y h:i a')}}
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12">
                                    <label for="subject">Subjek <small>(Deskripsi Singkat)</small></label>
                                    <textarea class="form-control @error('subject') {{'is-invalid'}} @enderror"
                                        name="subject" style="resize: none; height: 80px;"
                                        name="subject">{{$article->subject}}</textarea>
                                    @error('subject')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                    <label for="tags">Tags</label>
                                    <textarea type="text" name="tags" class="@error('tags'){{'border-danger'}}@enderror"
                                        placeholder="Masukkan tags">{{json_encode(explode(',', $article->tags))}}</textarea>
                                    @error('tags')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="publish">Status Artikel</label>
                                    <div class="d-flex">
                                        <div class="icheck-primary mr-2">
                                            <input type="radio" id="radioPrimary2" name="publish" value="0"
                                                @if($article->published === 0) {{'checked'}} @endif>
                                            <label for="radioPrimary2">
                                                Draft
                                            </label>
                                        </div>
                                        <div class="icheck-primary">
                                            <input type="radio" id="radioPrimary1" name="publish" value="1"
                                                @if($article->published === 1) {{'checked'}} @endif>
                                            <label for="radioPrimary1">
                                                Publish
                                            </label>
                                        </div>
                                    </div>
                                    @error('publish')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12">
                                    <textarea class="textarea" id="editor"
                                        name="article">{{$article->description}}</textarea>
                                    @error('article')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12 text-right">
                                    <button class="btn btn-success">
                                        <i class="fas fa-save mr-2 fa-fw"></i>Simpan
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
@endpush

@push('scripts')
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugins/ckeditor/config.js')}}"></script>
<script>
    var input = document.querySelector('textarea[name="tags"]'),
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
      maxTags: 10,
      delimiters: null
    })

    CKEDITOR.replace('editor', {
      width: 'auto',
      height: 750,
      extraAllowedContent: 'h1;a[!href]',
    });
</script>
@endpush
