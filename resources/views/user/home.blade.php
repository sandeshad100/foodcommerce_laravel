@extends('user.layout.layoutmaster')

@section('main-content')
    <main class="container" style="height: 100vh;">
        <h1>Home </h1>
        <div class="showcase">
            <div class="row my-row ">
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('/image/img.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('/image/img.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('/image/img.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('/image/img.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </main>
@endsection
