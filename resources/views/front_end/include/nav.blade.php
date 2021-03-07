<div class="container header-container">
    <div class="row">
        <div class="span16">
            <!-- Header -->
            <div id="dn-header">
                <div class="dn-logo">
                    <a href="{{route('/')}}"><img style="height: 50px;width:auto" src="{{asset('/front_end/userInterface/images/logo.png')}}" alt="Diet&amp;Nutrition"></a>
                </div>
                <div class="dn-free-consult">
                    <h2><span class="blue">Call:</span>+8801836652757</h2>
                    <p>
                        for your free consultation
                    </p>
                </div>
            </div>
            <!-- Main Menu -->
            <div id="dn-main-menu-background">
                <div id="dn-main-menu">
                    <ul class="menu-items">
                            {{-- <span class="arrow-bottom green"></span> --}}
                            <li>
                            <a href="{{route('/')}}"><i class="fa fa-home"></i><span> Home</span></a>
                        </li>
                        <li>
                            <span class="arrow-bottom green"></span>
                            <a href="{{route('blog_page')}}"><i class="fa fa-blog"></i><span> Blog</span></a>
                        </li>
                        <li>
                            <span class="arrow-bottom green"></span>
                        <a href="{{route('excercise')}}"><i class="fa fa-play"></i><span> Excercise</span></a>
                        </li>
                        <li>
                            <span class="arrow-bottom green"></span>
                            <a href="{{route('our_team_page')}}"><i class="fa fa-users"></i><span> Our Team</span></a>
                        </li>
                        <li>
                            <span class="arrow-bottom green"></span>
                            @if(Session::get('customer_id')==NULL)
                            <a href="{{route('customer_login_page')}}"><i class="fa fa-calendar"></i> Make Appoinment</a>
                            @else
                            <a href="{{route('appointment_page')}}"><i class="fa fa-calendar"></i> Make Appoinment</a>
                            @endif
                        </li>
                        
                        <li>
                            <span class="arrow-bottom green"></span>
                            <a href="{{route('cart_show')}}"> <i class="fa fa-shopping-cart"></i><span> Cart</span></a>
                        </li>
                        <li>
                            <a href="" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-store"></i><span> Shop</span></a>
                            <ul class="dn-submenu-pages">
                                <li>
                                    <span class="arrow-bottom green"></span>
                                    <a href="{{route('shop_page')}}"><i class="fa fa-pills"></i><span> Medicins</span></a>
                                </li>
                                <li>
                                    <span class="arrow-bottom green"></span>
                                    <a href="{{route('all_product_page')}}"><i class="fas fa-product-hunt"></i><span> Inustroments</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="arrow-bottom green"></span>
                            <?php
                                $customer_id=Session::get('customer_id');
                                $customer_name=Session::get('customer_name');
                                if ($customer_id!=NULL && $customer_name!=NULL)
                                {
                                ?>
                              <a href="" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-user"></i><span> {{$customer_name}}</span></a>
                              <ul class="dn-submenu-pages">
                                <li>
                                    <a href="{{route('appointment_page')}}"><i class=""></i>Make Appoinment</a>
                                </li>
                                <li>
                                    <a href="{{route('my_appointment_page')}}"><i class=""></i>My Appoinment</a>
                                </li>
                                <li>
                                    <a href="{{route('customer_logout')}}"><i class="fas fa-sign-out"></i> Logout</a>
                                </li>
                                </ul>
                              <?php }
                              else if($customer_id==NULL && $customer_name==NULL){
                              ?>
                             <li><a href=""><i class="fa fa-sign-in-alt"></i> Login</a>
                               <ul class="dn-submenu-pages">
                                <li>
                                    <a href="{{route('customer_login_page')}}"><i class="fa fa-sign-in-alt"></i> Login</a>
                                </li>
                                <li>
                                    <a href="{{route('customer_registration_page')}}"><i class="fa fa-edit"></i> Registretion</a>
                                </li>
                                </ul>
                            </li>
                              <?php } 
                            ?>
                                <?php
                                     $customer_name=Session::get('customer_name');
                                     $cusotmer_id=Session::get('customer_id');
                                if ($customer_name!=NULL && $customer_id!=NULL)
                                    {
                                ?>
                                {{-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="guest account! Please login"> --}}
                                <?php }
                                  ?>
                              </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>		