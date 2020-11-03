<section class="section" id="blog">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="center-heading">
                    <h2 class="section-title">Artikel</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 mb-3 mb-lg-0">
                <h3 class="section-sub-title">Terbaru</h3>

                <div class="row">
                    @foreach ($blog as $blog)
                    <div class="col-12 col-md-6">
                        <div class="blog-post-thumb">
                            <div class="blog-content">
                                <div class="title">
                                    <h4>{{$blog->title}}</h4>
                                </div>
                                <div class="d-flex text-muted py-2">
                                    <small class="d-flex align-items-center">
                                        <svg class="mr-2" aria-hidden="true" focusable="false" data-prefix="far"
                                            data-icon="eye" height="12px" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                            </path>
                                        </svg>
                                        {{$blog->viewed}} View</small>
                                    <small class="ml-auto">{{ $blog->created_at->format('M d, Y. h:m a')}}</small>
                                </div>
                                <p class="text desc">
                                    {{$blog->subject}}
                                </p>
                                <a href="{{route('showArticle', $blog->slug_title)}}" class="main-button">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <h3 class="section-sub-title">Terpopuler</h3>

                <div class="row mt-3">
                    @foreach ($popular as $popular)
                    <article class="col-12 mb-3" style="height: 100%">
                        <h5 class="card-title">
                            <a href="{{route('showArticle',$popular->slug_title)}}">{{$popular->title}}</a>
                        </h5>
                        <div class="d-flex text-muted pt-1">
                            <small class="d-flex align-items-center">
                                <svg class="mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye"
                                    height="12px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                    </path>
                                </svg>
                                {{$popular->viewed}} View</small>
                            <small class="ml-auto">{{$blog->created_at->format('M d, Y. h:m a')}}</small>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>