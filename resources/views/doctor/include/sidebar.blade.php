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
            <h4 class="name">{{Session::get('doctor_name')}}</h4>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Sign out') }}
            </a>
            <form id="logout-form" action="{{ route('doctor_logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard

                    </a>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                    <div class="dropdown-menu">
                        <a href="">Update Profile</a>
                        <a href="">View Profile</a>
                    </div>
                </li>

                <li>
                    @php
                    $doctor_id=Session::get('doctor_id');
                        $appointmentNo=DB::table('appointments')
                        ->where('assigned_doctor',$doctor_id)
                        ->count();
                    @endphp

                    @if($appointmentNo>=1)
                        <a href="{{route('doctor_appointment_list')}}" >
                            <i class="fas fa-users"></i>
                            Patient Appoinments<sup><i style="color: red" class="fa fa-circle"></i></sup>
                        </a>
                    @else
                    <a href="{{route('doctor_appointment_list')}}" >
                        <i class="fas fa-users"></i>
                        Patient Appoinments
                    </a>
                    @endif
            </li>
            </ul>
        </nav>
    </div>
</aside>