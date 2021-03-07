@extends('front_end.master')
@section('title')
Services
@endsection
@section('body')
<div class="gray-content-background">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="main-content-box">
                    <h1> Diet & Nutrition Services</h1>
                    <div class="services-box">
                        <img src="{{asset('front_end/userInterface/assets/services-image.png')}}" alt="image"/>
                        <p>
                            We offer highly customized nutrition programs that address your health needs and help you learn how better nutrition can impact you and your family. Our Registered Dietitians (RDs) develop these personalized programs, which often include services for 3 to 6 months.
                        </p>
                        <h2 id="analysis">Analisys and Investigations</h2>
                        <h4>1. Metabolic profile</h4>
                        <p>
                            The metabolic profile assesses your body’s most vital processes, major organ systems and essential nutrient levels to pinpoint imbalances that lead to disease.  The results reveal root causes of any symptoms you may have and also serve as a great tool to gauge overall health.
                        </p>
                        <h5>The Profile interprets your health by looking at 2 predominant categories:</h5>
                        <dl>
                            <dt>
                                a) Energy and Cardiovascular Health – B Vitamin Deficiency
                            </dt>
                            <dd>
                                Energy production, cardiovascular health, as well as muscle and nerve function are just a few of the things dependent on having sufficient B-vitamins.  Periods of stress and perspiration can easily deplete your B-Vitamin supply, making shortages very common.  Even modest deficits can noticeably affect your energy levels.  Discovering and fixing these issues can have a dramatic and immediate impact in your daily life as well as continued well-being down the road.
                            </dd>
                            <dt>
                                b) Fat Burning Capacity – Cellular Energy
                            </dt>
                            <dd>
                                How efficiently do your cellular engines (called mitochondria) produce energy?  All body processes depend on this key activity.  If you are having trouble losing weight and keeping it off, poor cellular health and energy is often the culprit.  It can also lead to fatigue, muscle weakness , or even aging if left untreated.
                            </dd>
                        </dl>
                        <h4>2. Hair Analisys</h4>
                        <p>
                            Hair tissue mineral analysis (HTMA), is an analytical test which measures your mineral content and heavy metal exposure. Test results reflect how much of these elements are in your tissues and provide a vivid picture of your internal environment, that very few tests can reveal.
                        </p>
                        <h2 id="bodycomposition">Body Composition Analisys</h2>
                        <p>
                            At complete nutrition and wellness, we recently started measuring body composition through a sophisticated scientific tool called Bioelectrical Impedance Analyzer (BIA). BIA is one of the most accurate methods of measuring body fat, muscle and water and it has been an invaluable tool for our weight loss program.
                        </p>
                        <h5>What is it?</h5>
                        <p>
                            Simply explained, BIA measures the impedance or resistance to the signal as it travels through the water that is found in muscle and fat. The more muscle a person has, the more water their body can hold. The greater the amount of water in a person’s body, the easier it is for the current to pass through it. The more fat the person has, the more resistance to the current. BIA is completely safe and it does not hurt. In fact, the signal used in body fat monitors cannot be felt at all either by an adult or child.
                        </p>
                        <h5>How is it performed?</h5>
                        <p>
                            While the person is lying down, 4 electrodes are attached to the foot and hand and a small electric signal is circulated.  The person’s height, age, gender and weight along with other characteristics such as body type and physical activity level are entered in a sophisticated computer system. The results show:
                        </p>
                        <ul class="dots-blue">
                            <li>
                                Body fat percentage
                            </li>
                            <li>
                                Total pounds of fat
                            </li>
                            <li>
                                Total pounds of muscle
                            </li>
                            <li>
                                Total pounds of water
                            </li>
                            <li>
                                Total body water with a differential of water both in and out of the cell
                            </li>
                        </ul>

                        <p>
                            * The results of our patients are variable. Each patient may lose more or less depending on age, sex, health status and its determination. We provide you promise that we will do everything we can to help you lose weight healthy and happy.
                        </p>
                    </div>
                    <!-- Get free consult -->
                    <div class="consult">
                        <a href="contact-request-consultation.html" class="btn-book">
                            Book a Free Consultation! <i class="icon"></i>
                        </a>
                        <p>
                            or
                        </p>
                        <div class="call-us-widget">
                            <i class="icon-call-us"></i>
                            <div class="call-container">
                                <div class="call-us">
                                    CALL US
                                </div>
                                <div class="phone">
                                    800-55-555-1111
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <!-- Sidebar Container -->
            <div class="span4">
                <div class="row-fluid">
                    <div class="span16">
                        <div class="main-sidebar">
                            <div class="sidebar-menu">
                                <ul class="nav nav-list">
                                    <li class="active">
                                        <a href="diet-nutrition-services.html">Diet & Nutrition Services</a>
                                        <ul class="nav-submenu">
                                            <li class="active-submenu">
                                                <span class="left-white-arrow"></span><a href="#analysis" class="text-overflow">Analisys and Investigations</a>
                                            </li>
                                            <li>
                                                <a href="#bodycomposition">Body Composition Analisys</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="before-after.html">Before / After </a>
                                    </li>
                                    <li>
                                        <a href="our-team.html">Our Team </a>
                                    </li>
                                    <li>
                                        <a href="recipes-book.html">Recipes Book</a>
                                    </li>
                                    <li>
                                        <a href="pages-pricing.html">Pages</a>
                                    </li>
                                    <li>
                                        <a href="contact-request-consultation.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span16">
                        <!-- Slider Widget -->
                        <div class="slider-widget sidebar-widget">
                            <div id="dn-top-widget-slider" class="owl-carousel">
                                <div class="item">
                                    <h2>Success Stories</h2>
                                    <h3>Jessica</h3>
                                    <div class="before-picture">
                                        <img src="{{asset('front_end/userInterface/assets/before-picture.png')}}" alt="before"/>
                                    </div>
                                    <div class="after-picture">
                                        <img src="{{asset('front_end/userInterface/assets/shilouette.png')}}" alt="after"/>
                                    </div>
                                    <div class="widget-navigation">
                                        <a class="prev-arrow"></a>
                                        <a class="next-arrow"></a>
                                    </div>
                                    <span class="libs">lost 66 libs </span>
                                    <span class="sizes">&amp; 8 sizes * </span>
                                <a href="contact-request-consultation.html" class="btn-free-consult">
                                    Get a Free Consultation! <i class="icon"></i>
                                </a>
                                    <span class="results">*Individual results may vary </span>
                                </div>
                                <div class="item">
                                    <h2>Success Stories</h2>
                                    <h3>Daniel</h3>
                                    <div class="before-picture">
                                        <img src="{{asset('front_end/userInterface/assets/man-before.png')}}" alt="before"/>
                                    </div>
                                    <div class="after-picture">
                                        <img src="{{asset('front_end/userInterface/assets/man-after.png')}}" alt="after"/>
                                    </div>
                                    <div class="widget-navigation">
                                        <a class="prev-arrow"></a>
                                        <a class="next-arrow"></a>
                                    </div>
                                    <span class="libs">lost 88 libs </span>
                                    <span class="sizes">&amp; 5 sizes * </span>
                                    <a href="contact-request-consultation.html" class="btn-free-consult">
                                        Get a Free Consultation! <i class="icon"></i>
                                    </a>
                                    <span class="results">*Individual results may vary </span>
                                </div>
                            </div>
                            <span class="arrow-bottom blue"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span16">
                        <!-- Recipe Widget Sidebar-->
                        <div class="recipe-widget">
                            <h2> Health Blog </h2>
                            <div class="recipe-title">
                                <i class="recipe-icon"></i>
                                <h3>Stew with Tomatoes & Garlic</h3>
                            </div>
                            <div class="recipe-image">
                                <div class="image-container-recipe">
                                    <a href="#"> <img src="{{asset('front_end/userInterface/assets/stew-img.png')}}" alt="image"/></a>
                                </div>
                            </div>
                            <div class="recipe-details">
                                <i class="difficulty-icon-hard"></i>
                                <i class="duration-icon-10m"></i>
                                <i class="makes-icon-2"></i>
                            </div>
                            <div class="widget-recipe-ingredients">
                                <div class="row-white">
                                    <p>
                                        Green salad
                                    </p>
                                    <span class="units">3pcs</span>
                                </div>
                                <div class="row-gray">
                                    <p>
                                        Pepper
                                    </p>
                                    <span class="units">0,5oz</span>
                                </div>
                                <div class="row-white">
                                    <p>
                                        Green salad
                                    </p>
                                    <span class="units">3pcs</span>
                                </div>
                                <div class="row-gray">
                                    <p>
                                        Pepper
                                    </p>
                                    <span class="units">0,5oz</span>
                                </div>
                                <div class="row-white">
                                    <p>
                                        Green salad
                                    </p>
                                    <span class="units">3pcs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span16">
                        <!-- Facebook Widget Sidebar-->
                        <div class="fb-widget">
                            <div class="fb-like-box" data-href="https://www.facebook.com/DietNutritionHealthCenter" data-width="100%" data-height="320" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span16">
                        <!-- Custom Text Widget -->
                        <div class="custom-widget">
                            <h2> Custom Text Widget </h2>
                            <p>
                                You can add any text or message here.
                            </p>
                        
                            <h3> You can add image as well </h3>
                            <img src="{{asset('front_end/userInterface/assets/widget-image.png')}}" alt="image"/>
                            <p class="signature">
                                Signed, <a href="#">AA-Team</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
