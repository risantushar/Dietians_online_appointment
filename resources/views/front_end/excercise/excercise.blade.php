@extends('front_end.master')
@section('title')
    Excercise || Dietians
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('body')
<div class="gray-content-background">
    <div class="container">
        <div class="row-fluid">
            <!-- Main Container -->
            <div class="span16">
                <div class="main-content-box" id="before-after-container">
                    <h1> Excercise Tutorials  </h1>

                    <div class="row-fluid">
                        @foreach($tutorials as $tutorial)
                        <a href="{{route('tutorial_parts',['tutorial_id'=>$tutorial->tutorial_id])}}">
                            <div class="span8">
                                <div class="before-after-box">
                                    <h2> {{$tutorial->tutorial_title}} </h2>
                                    <p>
                                        {{$tutorial->tutorial_description}}
                                    </p>
                                    <div class="clearfix"></div>
                                    <div class="before-picture ">
                                        <img src="{{asset($tutorial->tutorial_thumbnail)}}" alt="before"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    {{$tutorials->links()}}
                </div>
            </div>

        </div>
    </div>
</div>

@endsection