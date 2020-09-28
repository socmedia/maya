<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="header-text">Semua <span>Produk</span></h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="elegance" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/elegance.png')}}" alt="Elegance">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Elegance</span></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="flipper" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/flipper.png')}}" alt="Flipper">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Flipper</span></h2>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="elegance-2" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/elegance 2.png')}}" alt="Elegance 2">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Elegance 2 in 1</span></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="prestige" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/prestige.png')}}" alt="Prestige">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Prestige</span></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="sporty" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/sporty.png')}}" alt="Sporty">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Sporty</span></h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product__card">
                    <a href="javascript:void(0)" data-slug="crystal" show-modal>
                        <div class="product__image">
                            <img src="{{asset('img/product/crystal.png')}}" alt="Crystal">
                        </div>
                        <div class="product__info">
                            <h2 class="product__name"><span>Crystal</span></h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade modal-product" id="modal-description" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true" data-aos="fade-down">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-image">
                    <img src="" alt="detail">
                </div>
                <div class="product-info">
                    <table class="table">
                        <tr>
                            <td>Kenyamanan</td>
                            <td>:</td>
                            <td id="comfort"></td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>:</td>
                            <td id="color"></td>
                        </tr>
                        <tr>
                            <td>Tinggi</td>
                            <td>:</td>
                            <td id="height"></td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>:</td>
                            <td id="size" colspan="3"></td>
                        </tr>
                        <tr>
                            <td>Garansi</td>
                            <td>:</td>
                            <td id="guarantee"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td id="description" colspan="3"></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
