@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-dark" href="https://ichef.bbci.co.uk/news/640/cpsprodpb/d124/live/b4442720-6a1b-11ed-ac65-cf03806195a5.jpg">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>penangkisa serangan hamas</h1>
                        <p>istrael merugi 12 miliar dolar.</p>
                        <p><a class="btn btn-lg btn-dark" href="#">lihat secra detail</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-dark" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-3">
    <p class="blog-post-meta">{{ now()->format('F j, Y') }} <a href="#"></a></p>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="card ">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-md btn-outline-secondary">View</button>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
  <img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/d124/live/b4442720-6a1b-11ed-ac65-cf03806195a5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">gempa cianjur</h5>
    <p class="card-text">gempa terus melanda bagian pulau jawa setiap harinya secara berulang</p>
    <a href="#" class="btn btn-dark">lihat</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://cdn0-production-images-kly.akamaized.net/d6FPayA6xu36hQOQylc9VmRZyXA=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3010577/original/064242000_1577883977-IMG-20200101-0053.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">banjir bogor</h5>
    <p class="card-text">inilah ceritanya jika dataran tinggi masih terkena banjir</p>
    <a href="#" class="btn btn-dark">lihat</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://cms.disway.id/uploads/afadac5a60d892df76815977d7510e87.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kebakaran jakarta selatan,</h5>
    <p class="card-text">hanya karna korek api berujung hilangnya 20 desa</p>
    <a href="#" class="btn btn-dark">lihat</a>
  </div>
</div>
        </div>
    </div>
    <div class="row">

<div class="col-lg-4 col-md-6">
    <div class="card ">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
        </svg>
        <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-md btn-outline-secondary">View</button>
                <small class="text-body-secondary">9 mins</small>
            </div>
            
        </div>
    </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/d124/live/b4442720-6a1b-11ed-ac65-cf03806195a5.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">gempa cianjur</h5>
<p class="card-text">gempa terus melanda bagian pulau jawa setiap harinya secara berulang</p>
<a href="#" class="btn btn-dark">lihat</a>
</div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://cdn0-production-images-kly.akamaized.net/d6FPayA6xu36hQOQylc9VmRZyXA=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3010577/original/064242000_1577883977-IMG-20200101-0053.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">banjir bogor</h5>
<p class="card-text">inilah ceritanya jika dataran tinggi masih terkena banjir</p>
<a href="#" class="btn btn-dark">lihat</a>
</div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://cms.disway.id/uploads/afadac5a60d892df76815977d7510e87.JPG" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">kebakaran jakarta selatan,</h5>
<p class="card-text">hanya karna korek api berujung hilangnya 20 desa</p>
<a href="#" class="btn btn-dark">lihat</a>
</div>
</div>
</div>
</div>
    
@endsection
