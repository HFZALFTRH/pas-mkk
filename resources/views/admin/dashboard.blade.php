@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
<div class="card col-3 mx-2" style="width: 18rem;">
  <img src="https://asset.kompas.com/crops/3PsZuqRbETzNFgZ0u3XkMKnOvKo=/0x0:0x0/750x500/data/photo/2023/05/16/646271a87820f.jpg" class="card-img-top" alt="a.">
  <div class="card-body">
    <h5 class="card-title">kebakaran</h5>
    <p class="card-text">kebakaran yang melanjad jakarta pusat baru baru ini</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
<div class="card col-3 mx-2" style="width: 18rem;">
  <img src="https://asset.kompas.com/crops/3PsZuqRbETzNFgZ0u3XkMKnOvKo=/0x0:0x0/750x500/data/photo/2023/05/16/646271a87820f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kebakaran</h5>
    <p class="card-text">kebakaran yang melanjad jakarta pusat baru baru ini</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
<div class="card col-3 mx-2" style="width: 18rem;">
  <img src="https://asset.kompas.com/crops/3PsZuqRbETzNFgZ0u3XkMKnOvKo=/0x0:0x0/750x500/data/photo/2023/05/16/646271a87820f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kebakaran</h5>
    <p class="card-text">kebakaran yang melanjad jakarta pusat baru baru ini</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
<div class="card col-3 mx-2" style="width: 18rem;">
  <img src="https://asset.kompas.com/crops/3PsZuqRbETzNFgZ0u3XkMKnOvKo=/0x0:0x0/750x500/data/photo/2023/05/16/646271a87820f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kebakaran</h5>
    <p class="card-text">kebakaran yang melanjad jakarta pusat baru baru ini</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
</div>
<div class="card col-3 mx-2" style="width: 18rem;">
  <img src="https://asset.kompas.com/crops/3PsZuqRbETzNFgZ0u3XkMKnOvKo=/0x0:0x0/750x500/data/photo/2023/05/16/646271a87820f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">kebakaran</h5>
    <p class="card-text">kebakaran yang melanjad jakarta pusat baru baru ini</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
</div>
</div>
@endsection
