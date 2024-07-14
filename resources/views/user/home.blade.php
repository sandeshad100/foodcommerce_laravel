@extends('user.layout.layoutmaster')

@section('main-content')
    <main class="container" style="height: 100vh;">
        <h1>Home </h1>
        <div class="showcase">
            <div class="row my-row ">

                @foreach ($products as $item)
                    <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('/image/img.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->product_name }}</h5>
                                    <p class="card-text">Rs. {{ $item->product_rate }}</p>
                                    <a href="#" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach





          

            </div>



        </div>
    </main>
@endsection
