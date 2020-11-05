<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="#" class="logo">
                        <img src="{{asset('img/logo.png')}}" alt="Logo" />
                    </a>

                    <ul class="nav">
                        <li><a href="#welcome" class="active">Beranda</a></li>
                        <li><a href="#features">Tentang Maya</a></li>
                        <li><a href="#product">Produk</a></li>
                        @if ($blog->total() !== 0)
                        <li><a href="#blog">Artikel</a></li>
                        @endif
                        <li><a href="#contact-us">Hubungi Kami</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
