@extends ('layout')
@section('pageTitle', 'onepage')

@section ('content')

    @include ('layout.partials.header')

    <main class="index">
        <section class="index-hero">
            <div class="index-hero-content">
                <div class="index-hero-content-circle">

                </div>
                <div class="index-hero-content-title">
                    <div class="index-hero-content-title-single" style="transform: translate3d(0px, 0px, 0px);">
                        <h4>This</h4>
                    </div>
                    <div class="index-hero-content-title-single" style="transform: translate3d(0px, 0px, 0px);">
                        <h4>is</h4>
                    </div>
                    <div class="index-hero-content-title-single" style="transform: translate3d(0px, 0px, 0px);">
                        <h4>only</h4>
                    </div>
                    <div class="index-hero-content-title-single" style="transform: translate3d(0px, 0px, 0px);">
                        <h4>Temp</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="index-intro">
            <div class="wrap">
                <div class="index-intro-content">
                    <div class="index-intro-content-about">
                        <h3>INTRO</h3>
                        <p>The assignment was to create a robot as a team by joining forces. We have bundled our Adafruits as one with which we could develop something what could never have been foreseen. The performance that our creation delivers is above our expectations where he pushes the competition off with his speed, maneuvers around the enemy and detects something with the detection capability’s before you even know it.</p>
                    </div>
                    <div class="index-intro-content-update">
                        <h3>STAY UPDATES</h3>
                        <ul>
                            <li><a href="">Facebook</a></li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd;}</style></defs><title>arrow-right</title><g><g><polygon class="cls-1" points="0 288 390.4 288 211.2 467.2 256 512 512 256 256 0 211.2 44.8 390.4 224 0 224 0 288"></polygon></g></g></svg>
                            <li><a href="">Twitter</a></li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd;}</style></defs><title>arrow-right</title><g><g><polygon class="cls-1" points="0 288 390.4 288 211.2 467.2 256 512 512 256 256 0 211.2 44.8 390.4 224 0 224 0 288"></polygon></g></g></svg>
                            <li><a href="">Dribble</a></li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#fff;fill-rule:evenodd;}</style></defs><title>arrow-right</title><g><g><polygon class="cls-1" points="0 288 390.4 288 211.2 467.2 256 512 512 256 256 0 211.2 44.8 390.4 224 0 224 0 288"></polygon></g></g></svg>
                        </ul>
                    </div>
                </div>
                <div class="index-intro-selected">
                    <h4><a href="#anker1">OUR PROJECT</a></h4>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384.67 384.67"><g data-name="Layer 2"><path fill="#fff" fill-rule="evenodd" d="M0 45.26l276.05 276.05H22.63v63.36h362.04V22.63h-63.36v253.42L45.26 0 0 45.26z" data-name="Layer 1"></path></g></svg>
                </div>
            </div>
        </section>
        <a name="anker1"></a>
        <section class="index-project">
            <div class="index-project-content">
                <h3>Run from it, dread it, destiny still arrives</h3>
                <div class="index-project-content-info">
                    <h4>Faster then lightning Mcqueen</h4>
                    <h4>steers like Max Verstappen</h4>
                    <h4>Detected enemy's faster then light it self</h4>
                </div>
            </div>
            <div class="index-project-tiles">
                <div class="index-project-tiles-item">
                    <img src="{{asset("/images/ironman1.gif")}}" alt="">
                </div>
                <div class="index-project-tiles-item">
                    <img src="{{asset("/images/ironman1.gif")}}" alt="">
                </div>
                <div class="index-project-tiles-item">
                    <img src="{{asset("/images/ironman1.gif")}}" alt="">
                </div>
            </div>
        </section>
    </main>


    @include ('layout.partials.footer')


@endsection
