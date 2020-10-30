@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Produk</a></li>
                        <li class="breadcrumb-item active"><a>Tambah</a></li>
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
                            Tambah Produk
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.history.back()">
                                <i class="fas fa-arrow-left fa-fw mr-2"></i>Kembali
                            </button>
                        </div>
                    </div>


                    <div class="card-body p-2 p-lg-4">
                        <form action="{{route('product.post')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <fieldset class="form-group row flex-column-reverse flex-lg-row">
                                <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                                    <figure>
                                        <div class="preview rounded">
                                            <img src="https://via.placeholder.com/1000x1000.png?text=Thumbnail Produk"
                                                class="preview-img-thumbnail">
                                        </div>
                                        <figcaption>
                                            <label for="name">Thumbnail Produk</label> <br>
                                            <input type="file" name="thumbnail" accept="image/*" class="" /> <br>
                                            @error('thumbnail')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <figure>
                                        <div class="preview rounded">
                                            <img src="https://via.placeholder.com/1000x1000.png?text=Gambar Produk"
                                                class="preview-img">
                                        </div>
                                        <figcaption>
                                            <label for="name">Gambar Produk</label> <br>
                                            <input type="file" name="image" accept="image/*" class="" /> <br>
                                            @error('image')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </figcaption>
                                    </figure>
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12">
                                    <label for="name">Nama Produk</label>
                                    <input type="text" class="form-control @error('name') {{'is-invalid'}} @enderror"
                                        name="name" value="{{old('name')}}">
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                    <label for="production">Harga Produksi <small>(Harga tidak ditampilkan di landing
                                            page)</small></label>
                                    <input type="number"
                                        class="form-control @error('production') {{'is-invalid'}} @enderror"
                                        name="production" value="{{old('production')}}" min="1">
                                    @error('production')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                    <label for="sell">Harga Jual <small>(Harga tidak ditampilkan di landing
                                            page)</small></label>
                                    <input type="number" class="form-control @error('sell') {{'is-invalid'}} @enderror"
                                        name="sell" value="{{old('sell')}}" min="1">
                                    @error('sell')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">

                                <div class="col-12 col-lg-6">
                                    <label for="is_showed">Visibilitas Produk <small>(Produk akan ditampilkan di
                                            landing page)</small></label>
                                    <div class="d-flex">
                                        <div class="icheck-primary mr-2">
                                            <input type="radio" id="radioPrimary2" name="is_showed" value="0">
                                            <label for="radioPrimary2">
                                                Sembunyikan
                                            </label>
                                        </div>
                                        <div class="icheck-primary">
                                            <input type="radio" id="radioPrimary1" name="is_showed" value="1" checked>
                                            <label for="radioPrimary1">
                                                Tampilkan
                                            </label>
                                        </div>
                                    </div>
                                    @error('is_showed')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </fieldset>

                            <fieldset class="form-group row">
                                <div class="col-12">
                                    <textarea class="textarea" name="description">{{old('description')}}</textarea>
                                    @error('description')
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
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<style>
    .preview {
        position: relative;
        display: block;
        width: 100%;
    }

    .preview .preview-img,
    .preview .preview-img-thumbnail {
        width: 100%;
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugins/ckeditor/config.js')}}"></script>
<script>
    async function readURL(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                if(input.name === 'image'){
                    $('.preview-img').attr('src', e.target.result)
                }
                if(input.name === 'thumbnail'){
                    $('.preview-img-thumbnail').attr('src', e.target.result)
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    CKEDITOR.replace('editor', {
      width: 'auto',
      height: 750,
      extraAllowedContent: 'h1;a[!href]',
    });

    $('input[type="file"]').change(function () {
        readURL(this)
    })
</script>
@endpush
