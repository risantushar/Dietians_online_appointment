@extends('front_end.master')
@section('title')
 Dietians || Nutritionists
@endsection

<style>
button {
    background-color: rgba(0,0,0,0);
    outline: none;
}


.btn {
    margin-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

input {
    width: 100%;
    padding: 5px 14px;
    border: 2px solid #201f1d;
    margin-bottom: 10px;
    background-color: rgba(0,0,0,.4);
    outline: none;
    color: #fff;
    font-size: 14px;
}

input:focus {
    border: 2px solid rgba(0,0,0,.4);
    background-color: rgb(60,60,60);
}

form {
    background-color: #fff;
    padding: 20px;
    color: #000;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.4);
}

form p {
    margin-bottom: 5px;
}

form p:nth-child(1){
    margin-top: 0;
}

.panel {
    margin-top: 20px;
    float: none;
}

@media (min-width: 768px) {
    .panel {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 1024px) {
    .panel {
        width: 30%;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>
@section('body')
@include('front_end.include.slider')
<div class="container">
    <div class="row-fluid">
        <div class="span13">
            <div class="row-fluid">
                <!-- Healthy Recipes - Blog Box -->
                {{-- <div class="span10">
                    <div class="healthy-recipes">
                        <div class="image-container-healthy-recipes">
                            <a href="pages-blog.html"><img src="{{asset('/front_end/userInterface/assets/image-blog.png')}}" alt="image"/></a>
                            <div class="arrow-down-img">
                                <span class="green-line"></span>
                                <span class="the-arrow"></span>
                                <span class="green-line"></span>
                            </div>
                        </div> 
                        <div class="row-fluid">
                                <div class="content-container">
                                <div class="span5">
                                    <div class="content-title">
                                        <h2><span class="bold">Healthy </span>Recipes</h2>
                                    </div>
                                </div>
                                <div class="span11">
                                    <div class="content-text">
                                        <p>
                                            Your body is a complex system, bocconcini hard cheese cheesy grin. Roquefort halloumi bocconcini fromage cheese slices pecorino melted cheese cheesecake.
                                        </p>
                                        <a class="link" href="pages-blog.html"> <i class="link-icon"></i> Health Blog </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                
                {{-- <div class="span6">
                    <div class="row-fluid">
                        <!-- Search Box -->
                        <div class="span16">
                            <div class="search">
                                <span class="arrow-down brown"></span>
                                <h2> Search </h2>
                                <p>
                                    <span>-----</span> type for any keywords <span>-----</span>
                                </p>
                                <div class="search-box">
                                    <input type="text" class="input-search" value="nutrition"/>
                                    <button class="search-btn"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <!-- Programs Box -->
                        <div class="span16">
                            <div class="programs">
                                <span class="arrow-left blue"></span>
                                <h2> Programs </h2>
                                <p>
                                    Weight loss programs - designed with you in mind!
                                </p>
                                <a class="link" href="pages-pricing.html"> <i class="link-icon"></i> Loosing weight program </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
{{--             
            <div class="row-fluid">
                <!-- Good to know Box -->
                <div class="span5">
                    <div class="good-to-know">
                        <div class="calories">
                            <span> Kcal</span>
                            <p>
                                2500
                            </p>
                        </div>
                        <div class="carbs">
                            <span> Carbs</span>
                            <p>
                                15%
                            </p>
                        </div>
                        <div class="name">
                            <i class="icon-cake"></i>
                            <p>
                                Good to know
                            </p>
                            <h3>Chocolate Cake</h3>
                        </div>
                    </div>
                </div>
                <!-- Dieticians -->
                <div class="span11">
                    <div class="dieticians">
                        <span class="arrow-right green"></span>	
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="image-container-dietician">
                                    <img src="{{asset('/front_end/userInterface/assets/dietician.png')}}" alt="dietician"/>
                                </div>
                            </div>
                            <div class="span10">
                                <div class="text-container">
                                    <h2> Dieticians </h2>
                                    <p>
                                        All nutrition services are provided by Registered Dietitians (RDs), who are accredited experts in nutrition .
                                    </p>
                                    <a class="link" href="our-team.html"> <i class="link-icon"></i> Our Team</a>
                                </div>
                            </div>
                        </div>			
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Today's recipe Box -->
        {{-- <div class="span3">
            <div class="todays-recipe">
                <div class="border-container">
                    <div class="recipes-titles">
                        <h2><a href="recipes-book-details-page.html"> Shrimp </a></h2>
                        <h3> Tomatoes &amp; Garlic</h3>
                        <p>
                            Today's recipe
                        </p>
                    </div>
                    <div class="recipes-ingredients">
                        <div class="row-gray">
                            <p>
                                Tomatoes
                            </p>
                            <span class="units">0.5lb</span>
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
                                Onion
                            </p>
                            <span class="units">0,7lb</span>
                        </div>
                        <div class="row-gray">
                            <p>
                                Olive oil
                            </p>
                            <span class="units">1oz</span>
                        </div>
                        <div class="row-white">
                            <p>
                                Shrimp
                            </p>
                            <span class="units">0,5lb</span>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="arrow-up-img">
                        <span class="blue-line"></span>
                        <span class="the-arrow"></span>
                        <span class="blue-line"></span>
                    </div>
                    <a href="recipes-book-details-page.html"><img src="{{asset('/front_end/userInterface/assets/recipe-image.png')}}" alt="recipe"/></a>
                </div>
            </div>
        </div>  --}}
    </div>
       
            <div class="container">
                <div class="panel" >
                    <h2 class="text-center" style="background:#28AE61;color:white">Check your BMI</h2>
                    
                        <p id="introText" class="text-center">Enter your weight and height below to check your BMI results</p>
                        
                        <form>
                            <div id="weightInput">
                                <p>Put your weight in here (KG)</p>
                                 <input id="weight" type="number" pattern="[0-9]*" name="a" />
                            </div>
                            <div id="heightInput">
                                <p>And your height in here (CM)</p>
                                 <input id="height" type="number" pattern="[0-9]*" name="b"/> 
                            </div>
                         <button type="button" class="btn" onclick="calculate()">Calculate BMI</button>
                    </form>
                    <div id="results" class="text-center"><h2>Your BMI results will appear here</h2></div>
                </div>
            </div>

    
    
    <div class="row-fluid">
        <div class="span4">
            <!-- Users Testimonials -->
            <div class="testimonial-box">
                <div class="image-testimonial">
                    <a href="before-after.html"><img class="img-circle" src="{{asset('/front_end/userInterface/assets/testimonial-image.png')}}" alt="testimonial"/></a>
                </div>
                <div class="main-container">
                    <h2> Danielle </h2>
                    <p>
                        This experience taught me so much.
                    </p>
                    <a class="read-more" href="before-after.html"> <i class="read-more-icon-sm"></i> Read more</a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="testimonial-box">
                <div class="image-testimonial">
                    <a href="before-after.html"><img class="img-circle" src="{{asset('/front_end/userInterface/assets/jessica.png')}}" alt="testimonial" /></a>
                </div>
                <div class="main-container">
                    <h2> Jessica</h2>
                    <p>
                        Change your life, make it beautiful!
                    </p>
                    <a class="read-more" href="before-after.html"> <i class="read-more-icon-sm"></i> Read more</a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="testimonial-box">
                <div class="image-testimonial">
                    <a href="before-after.html"><img class="img-circle" src="{{asset('/front_end/userInterface/assets/jose.png')}}" alt="testimonial"/></a>
                </div>
                <div class="main-container">
                    <h2> Joseph Nadal </h2>
                    <p>
                        I now know how to have a healhy life!
                    </p>
                    <a class="read-more" href="before-after.html"> <i class="read-more-icon-sm"></i> Read more</a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="testimonial-box">
                <div class="image-testimonial">
                    <a href="before-after.html"><img class="img-circle" src="{{asset('/front_end/userInterface/assets/lady-shape.png')}}" alt="testimonial"/></a>
                </div>
                <div class="main-container">
                    <h2> You! </h2>
                    <p>
                        Don’t let fat beat you! Do something!
                    </p>
                    <a class="read-more" href="before-after.html"> <i class="read-more-icon-sm"></i>Get started now!</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('/front_end/userInterface/js/bmi.js')}}"></script>
@endsection