<section class="section" id="product">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="center-heading">
                    <h2 class="section-title"><span class="dif">Katalog</span> Maya Spring Bed</h2>
                </div>

                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>
                            <strong>Maya Spring Bed</strong> memiliki berbagai macam produk dengan kualitas premium
                            dan dengan harga
                            yang
                            terjangkau.</p>
                    </div>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card product__card">
                            <div class="card-body">
                                <figure class="img">
                                    <a href="javascript:void(0)" data-slug="{{$product->slug_name}}" show-modal>
                                        <img src="{{route('image.showProductImg', $product->thumbnail)}}"
                                            alt="{{$product->slug_name}}">
                                        <figcaption>
                                            <div class="product__name">{{$product->name}}</div>
                                        </figcaption>
                                    </a>
                                </figure>
                                <figcaption class="product__info">
                                    <a href="https://api.whatsapp.com/send?phone=+6285876771888&amp;text=Halo kak ! Saya mau menanyakan seputar produk {{$product->name}} ini :)"
                                        class="btn-cart" target="_blank">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M8.98837 22.875C9.53022 22.875 9.96947 22.4086 9.96947 21.8333C9.96947 21.258 9.53022 20.7917 8.98837 20.7917C8.44652 20.7917 8.00726 21.258 8.00726 21.8333C8.00726 22.4086 8.44652 22.875 8.98837 22.875Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M19.7805 22.875C20.3224 22.875 20.7616 22.4086 20.7616 21.8333C20.7616 21.258 20.3224 20.7917 19.7805 20.7917C19.2387 20.7917 18.7994 21.258 18.7994 21.8333C18.7994 22.4086 19.2387 22.875 19.7805 22.875Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M1.13953 1H5.06394L7.69331 14.9479C7.78302 15.4275 8.02875 15.8583 8.38748 16.1649C8.74621 16.4715 9.19508 16.6344 9.65551 16.625H19.1919C19.6523 16.6344 20.1012 16.4715 20.4599 16.1649C20.8186 15.8583 21.0643 15.4275 21.1541 14.9479L22.7238 6.20833H6.04505"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        Beli Produk
                                    </a>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade modal-product" id="modal-description" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true" data-aos="fade-down">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body align-items-center justify-content-center" style="display:flex;height: 120px"
                modal-body-loader>
                <span class="loading"></span>
            </div>
            <div class="modal-body d-none" modal-body-real>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-image text-center">
                    <img src="" alt="detail" width="60%">
                </div>
                <div class="product-info">
                </div>
            </div>
        </div>
    </div>
</div>