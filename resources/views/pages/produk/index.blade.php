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
                        <li class="breadcrumb-item active"><a>Produk</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">

            @if (session()->has('success'))
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Sukses!</strong> {{session()->get('success')}}
                </div>
            </div>
            @endif

            <div class="col-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Daftar Produk
                        </h3>
                        <div class="card-tools">
                            <a href="{{route('product.create')}}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus fa-fw mr-2"></i>Produk
                            </a>
                        </div>
                    </div>


                    <div class="card-body p-2 p-lg-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Gambar</td>
                                        <td>Nama</td>
                                        <td>Visibilitas</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">
                                            <img width="130px" src="{{route('image.showProductImg', $product->image)}}"
                                                alt="{{$product->image}}" loading="lazy">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td class="text-center">
                                            @if ($product->is_showed === 0)
                                            <span class="badge badge-pill badge-secondary">Disembunyikan</span>
                                            @elseif ($product->is_showed === 1)
                                            <span class="badge badge-pill badge-success">Ditampilkan</span>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{route('product.show', $product->slug_name)}}"
                                                class="btn btn-outline-default" title="Detail Produk">
                                                <i class="fas fa-eye fa-fw"></i>
                                            </a>

                                            <a href="{{route('product.edit', $product->slug_name)}}"
                                                class="btn btn-outline-default" title="Ubah Produk">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a>

                                            <a class="btn btn-outline-default"
                                                data-url="{{route('product.delete', $product->id)}}"
                                                title="Hapus Produk" confirm>
                                                <i class="fas fa-trash fa-fw"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal-danger" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0" style="border-radius: 9px">
            <div class="modal-header border-0 bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-danger text-white text-center">
                Anda yakin akan menghapus data ini ?
            </div>
            <div class="modal-footer bg-danger border-0">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                <form delete-form method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-light">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script>
    $('table').DataTable({
        width: '100%',
        dom: `<'row'
                <'col-lg-6 align-self-center col-md-6 col-sm-12text-right text-sm-left'B>
                <'col-lg-6 align-self-center col-md-6 col-sm-12 text-right text-sm-left'f>
                >
            <'row mb-2'
                <'col-12'<'table-responsive' t>>
            >
            <'row'
                <'col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0' i>
                <'col-lg-6 col-md-6 col-sm-12' p>
        >`,
        buttons: [{
                extend: "copy",
                text: '<i class="fa fa-fw fa-copy"></i>',
                className: "btn btn-outline-default btn-sm",
                titleAttr: "Copy"
            },
            {
                extend: "excel",
                text: '<i class="fa fa-fw fa-file-excel"></i>',
                className: "btn btn-outline-default btn-sm",
                titleAttr: "Export as Excell"
            },
            {
                extend: "pdfHtml5",
                download: "open",
                text: '<i class="fa fa-fw fa-file-pdf"></i>',
                className: "btn btn-outline-default btn-sm",
                titleAttr: "Export as PDF"
            },
            {
                extend: "print",
                text: '<i class="fa fa-fw fa-print"></i>',
                className: "btn btn-outline-default btn-sm",
                titleAttr: "Print"
            }
        ],
    });

    $('[confirm]').click(function () {
        $('.modal').modal('show');
        $('.modal').find('[delete-form]').attr('action', $(this).data('url'))
    })
</script>
@endpush