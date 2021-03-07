<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{asset('admin/dashboard/images/icon/logo-white.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            {{-- <div class="image img-cir img-120">
                <img src="{{asset('admin/dashboard/images/icon/avatar-big-01.jpg')}}" alt="John Doe" />
            </div> --}}
            <h4 class="name">{{ Auth::user()->name }}</h4>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Sign out') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                        {{-- <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span> --}}
                    </a>
                </li>
                <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-pills"></i>
                            Medicin Sector
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('add_medicin_category_page')}}">Add Medicin Catgery</a>
                            <a href="{{route('manage_medicin_category_page')}}">Manage Medicin Catgery</a>
                            <a href="{{route('add_medicin_page')}}">Add Medicin</a>
                            <a href="{{route('manage_medicin_page')}}">Manage Medicins</a>
                        </div>
                </li>
                <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-blog"></i>
                            Blog Sector
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('add_blog_category_page')}}">Add Blog Catgery</a>
                            <a href="{{route('manage_blog_category_page')}}">Manage Blog Catgery</a>
                            <a href="{{route('add_blog_post_page')}}">Add Blog Post</a>
                            <a href="">Manage Blog Post</a>
                        </div>
                </li>
                <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-play"></i>
                            Tutorial Sector
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('add_tutorial_page')}}">Add Tutorial</a>
                            <a href="{{route('manage_tutorial_page')}}">Manage Tutorial</a>
                        </div>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fab fa-product-hunt"></i>
                        Inustroment Sector
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{route('add_product_category_page')}}">Add Prodcut Category</a>
                        <a href="{{route('manage_product_category_page')}}">Manage Product Category</a>
                        <a href="{{route('add_product_page')}}">Add Product</a>
                    </div>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-md"></i>Nutrationist
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{route('add_doctor_page')}}"><i class="fa fa-plus"></i> Add Nutrationist</a>
                        {{-- <a href=""><i class="fa fa-cog"></i> Manage Nutrationist</a> --}}
                    </div>
                </li>
                <li>
                    <a href="{{route('order_list_page')}}">
                        <i class="fa fa-list"></i>
                       Orders
                    </a>
                </li>
                {{-- <li>
                    <a href="">
                        <i class="fa fa-list"></i>
                       Order Details
                    </a>
                </li> --}}

                <li>
                    @php
                        $appointmentNo=DB::table('appointments')
                        ->where('assigned_doctor',NULL)
                        ->count();
                    @endphp

                    @if($appointmentNo>=1)
                        <a href="{{route('appointment_list')}}" >
                            <i class="fas fa-users"></i>
                            Appoinments<sup><i style="color: red" class="fa fa-circle"></i></sup>
                        </a>
                    @else
                    <a href="{{route('appointment_list')}}" >
                        <i class="fas fa-users"></i>
                        Appoinments
                    </a>
                    @endif
            </li>
            </ul>
        </nav>
    </div>
</aside>