@extends('front_end.master')

@section('title')
    Parts
@endsection

@section('body')
<div class="gray-content-background">
    <div class="container">
        <div class="row-fluid">
            <!-- Main Container -->
            <div class="span16">
                <div class="main-content-box" id="before-after-container">

                    <div class="row-fluid">
                        @foreach($tutorials_parts as $tutorial)
                        <a href="{{route('tutorial_parts',['tutorial_id'=>$tutorial->tutorial_id])}}">
                            <div class="span8">
                                <div class="before-after-box">
                                    <h2> {{$tutorial->sub_tutorial_title}} </h2>
                                    <div class="clearfix"></div>
                                       <iframe src="{{$tutorial->sub_tutorial_link}}" frameborder="0" width="440" height="300"></iframe>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    

                    <div class="row-fluid">
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
                                        +8801836652757
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection