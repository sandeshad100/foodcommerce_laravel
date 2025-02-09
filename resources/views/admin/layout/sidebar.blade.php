<div class="row my-row ">
    <div class="col-sm-12 col-md-8 col-lg-3">
        <div class="item">
            <div class="flex-shrink-0 p-3 border vh-100 bg-white" style="width: 280px;">
                <a href="/"
                    class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-5 fw-semibold">FoodCommerce Admin</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse"
                            data-bs-target="#home-collapse" aria-expanded="true">
                            Home
                        </button>
                        <div class="collapse show" id="home-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('category.show') }}" class="link-dark rounded">Category</a></li>
                                <li><a href="{{ route('product') }}" class="link-dark rounded">Product</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Auth
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ route('login') }}" class="link-dark rounded">Login</a></li>
                                <li><a href="{{ route('register') }}" class="link-dark rounded">Register</a></li>
                                <li><a href="{{ route('logout') }}" class="link-dark rounded">LogOut</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#orders-collapse" aria-expanded="false">
                            Orders
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">New</a></li>
                                <li><a href="#" class="link-dark rounded">Processed</a></li>
                                <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                <li><a href="#" class="link-dark rounded">Returned</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">New...</a></li>
                                <li><a href="#" class="link-dark rounded">Profile</a></li>
                                <li><a href="#" class="link-dark rounded">Settings</a></li>
                                <li><a href="#" class="link-dark rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-9 p-2 border">
        <div class="item main-content">
