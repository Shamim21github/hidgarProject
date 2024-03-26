@extends('Frontend.layout.app')

@section('content')
    
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Our Team Members</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><span>Team</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-12">
                        <div class="wpo-section-title">
                           
                            <h3>Our Expert Team.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset('Frontend/assets/images/team/img-1.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Robert Fox</a></h3>
                                <span>HR Leader</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset('Frontend/assets/images/team/img-2.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Kristin Watson</a></h3>
                                <span>Human Recources</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset('Frontend/assets/images/team/img-3.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Guy Hawkins</a></h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="tema-card">
                            <div class="image">
                                <img src="{{ asset('Frontend/assets/images/team/img-4.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="team-single.html">Albert Flores</a></h3>
                                <span>Department Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
