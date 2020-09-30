<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="header-text">Hubungi <span>Kami</span></h2>
            <hr>
            <p>
                Anda dapat menghubungi kami dengan mengisi form di bawah ini untuk memperoleh informasi lebih lengkap
                terkait produk kami. Atau melalui email kami. Harap form diisi dengan lengkap dan jelas.
            </p>
        </div>
        <div class="row">
            <div class="col-12 m-auto contact-info text-left">
                <div class="row mb-3">
                    <div class="col-12 mb-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.662024097915!2d110.73234575820614!3d-7.539593889619536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14a2fc03108d%3A0x8f7b66c3059a14de!2sIndronatan%2C%20Ngabeyan%2C%20Kec.%20Kartasura%2C%20Kabupaten%20Sukoharjo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1600686242656!5m2!1sid!2sid"
                            width="100%" height="200" frameborder="0" style="border:0;"></iframe>
                    </div>
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <h3>Alamat</h3>
                        <div class="contact-item">
                            <p>Indronatan RT 03 RW 03, Ngabean</p>
                            <p>Kec. Kartasura, Kab. Sukoharjo, 57165</p>
                            <p>Phone: <a href="tel:+6285876771888">+62 858-7677-1888</a></p>
                            <p>Email: <a href="mailto:info@mayaspringbed.id">info@mayaspringbed.id</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-md-offset-2 m-auto">
                        <h3>Tinggalkan Pesan Untuk Kami</h3>
                        <form action="{{route('send.contactUs')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nama">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek">
                            </div>
                            <div class="form-group">
                                <textarea name="message" name="message" class="form-control" rows="4"
                                    placeholder="Pesan"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div id="success"></div>
                            <button type="submit" class="btn-contact"><span>Kirim Pesan</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
