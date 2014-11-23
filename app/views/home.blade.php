@extends('layouts.master')

@section('body')
    <!-- Dummy header -->
    <div class="dummy-header"></div>
    <!-- /Dummy header -->

    <!-- Intro -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 highlight">
                <h1>Your suggested portfolio</h1>
                <p class="text-muted">Give a short explanation of the portfolio</p>
                @include('includes.your_portfolio')
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
