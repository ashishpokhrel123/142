@extends('frontend.layouts.app')

@section('title') home @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Engineering&nbsp;|&nbsp;Construction</h4>
                    </div>
                </div>
            </div>

        <!--wrapper-->
            <div class="wrapper">
                <!--hero image-->
                    <div class="hero_image">
                <div class="container hero_content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-left: 6rem;">
                            <!--search form-->
                                <form action="#" method="post" class="form-inline offset-lg-3 mt-3 wow fadeIn" data-wow-duration="4s">
                                    <button type="submit"><img src="{{ asset ('public_assets/images/btn_bg.png')}}" alt="Search Icon" class="img-fluid"></button>
                                        <input type="text" class="form-control" required placeholder="Search Our Site...">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
                <!-- company structure -->
                    <div class="col-sm-12 text-center mt-4 mb-4 wow fadeIn p-3" data-wow-duration="3s">
                <!--toggler icon-->
                    <div data-bs-toggle="collapse" data-bs-target="#collapse">
                        <h4 class="font-weight-bold">142 GROUP STRUCTURE</h4>
                        <img src="{{ asset ('public_assets/images/structure.png')}}" alt="" height="90">
                    </div>
                <!-- tree structure -->
                    <div class="collapse" id="collapse">
                <div class="card-body tree_structure text-center">
                    <div class="tf-tree example">
                        <ul>
                            <li>
                                <span class="tf-nc">142 GROUP</span>
                                <ul>
                                
                                    <li><span class="tf-nc">AAA</span>
                                        <ul class="staff_info">
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="{{ asset('public_assets/images/') }}front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                               
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc">Architectural</span>
                                        <ul class="staff_info">
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc">Administration</span>
                                        <ul class="staff_info">
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/staff_male.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Sabin Khadka</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="tf-nc">Estimating</span>
                                        <ul class="staff_info">
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                            <li><span class="tf-nc">
                                                                <div class="card">
                                                                    <div class="card-body staff_details">
                                                                        <img src="front_assets/images/female.png" alt="" height="70px">
                                                                            <ul>
                                                                                <li>Female Employee</li>
                                                                                <li>Director</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            </div>


@endsection