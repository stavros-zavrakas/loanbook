@extends('layouts.master')

@section('body')

    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">Personality matched investments!</h1>
                <p class="tagline">
                    A peer-to-business lending platform that uses social data (risk profile and likes) to match people to businesses they may want to loan to.
                </p>
                <p>
                    <a class="btn btn-default btn-lg" role="button">Find out more!</a>
                    <a class="btn btn-action btn-lg" role="button" href="/facebook">Try it now!</a>
                </p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">A personalised direct investment network</h2>
        <p class="text-muted">
            Enables people to support business in their community.
        </p>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <h3 class="text-center thin">Reasons to use this Social Invest!</h3>
            
            <div class="row">
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Community</h4></div>
                    <div class="h-body text-center">
                        <p>
                            You have a connection to your investment and your fellow incestors and allows you to expand these relationships.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Personalized</h4></div>
                    <div class="h-body text-center">
                        <p>We match you with opportunities based on your unique interests, behaviours preferences and social networks.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Technology</h4></div>
                    <div class="h-body text-center">
                        <p>Proprietary machine learning Infers interests & preferences from users’ social media.</p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>

@stop