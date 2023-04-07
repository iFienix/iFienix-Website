@extends("frontend.layout.master")

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/ourProject.css')}} "/>
@stop

@section('content')
<main>
    <div class="container">
        <section >
            <div class="food-website">
                <div class="img-website">
                  <a href="">
                    <img src="{{ asset('assets/images/food-website.svg')}}" alt="">
                  </a>
                </div>
                <div class="text-website">
                    <h3>Food Website</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Vitae mauris et vitae sed sociis sed. Velit ultricies sit et pharetra id lorem massa fringilla. Donec augue venenatis .</p>
                    <button>Contact Us</button>
                </div>
            </div>
        </section>
        <section class="list-websites">
            <div class="list-website">
                <div>
                  <a href="">
                    <img src="{{ asset('assets/images/food--website.svg')}}" alt="">
                  </a>
                </div>
                <small>Food Website</small>
            </div>
            <div class="list-website">
                <div>
                  <a href="">
                    <img src="{{ asset('assets/images/rosoma.svg')}}" alt="">
                  </a>
                </div>
                <small>Rosama Fashion Website</small>
            </div>
            <div class="list-website">
                <div>
                  <a href="">
                    <img src="{{ asset('assets/images/istwred.svg')}}" alt="">
                  </a>
                </div>
                <small>Istwred Website</small>
            </div>
        </section>
    </div>
</main>
@stop
