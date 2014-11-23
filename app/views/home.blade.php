@extends('layouts.master')

@section('body')
    <!-- Dummy header -->
    <div class="dummy-header"></div>
    <!-- /Dummy header -->

    <!-- Intro -->
    <div class="container home-container">
        <div class="row">
            <div class="col-md-12 col-sm-12 highlight">
                <h1>Your dashboard</h1>
                <div role="tabpanel">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_suggested_portfolio" aria-controls="tab_suggested_portfolio" role="tab" data-toggle="tab">Give a loan!</a></li>
                        <li role="presentation"><a href="#tab_equity" aria-controls="tab_equity" role="tab" data-toggle="tab">Buy equity!</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab_suggested_portfolio">
                            @include('includes.your_portfolio')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab_equity">
                            @include('includes.equity')
                        </div>
                    </div>

                </div>

                <!--
                <h2>Recommended interests</h2>
                <p class="text-muted">Give a short explanation of the recommended interests</p>
                <div id="recommended_interests"></div>
                -->
            </div>
        </div>
    </div>
    <!-- /Intro-->
@stop

@section('jshook')
    <script src="assets/flot/jquery.flot.js"></script>
    <script src="assets/flot/jquery.flot.pie.js"></script>
    <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="js/basic.js"></script>
@stop
