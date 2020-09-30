@extends('layouts.customer')


@section('content')


            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>About Us</h1>
                        </div>
                        <ul class="breadcrumb"></ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">

                        <p class="text-center lead">Herbal Pharma  our company is an Egyptian company started production of cosmetics and cosmoceutical products for local market and export since 2014 . We  introduce for you all information you need about the company, its products and also our medical advice for your health.
                            We are producing variety of Skin Care, Hair Care, Body care and cosmoceutical  products. All our products are professionally formulated from 100% natural ingredients and completely free from chemicals. Herbalpharma products are Registered in Egyptian Ministry of Health .
                            We Grant The Best from Nature.</p>
                        <hr class="page-divider"/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="{{asset('assets/img/gamal.jpeg')}}" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title"><b>Dr. Gamal Nosair</b><small> <br>General Manager</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="https://www.facebook.com/drgamal.nosair.18" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                        <div class="caption-text">Pharmacist - Cairo University 1977</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="{{asset('assets/img/ahmed.png')}}" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title"><b>Dr. Ahmed Nosair</b><small><br>CEO and Marketing Manager</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                        <div class="caption-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="{{asset('assets/img/muhamad.jpeg')}}" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title"><b>Mr. Mohamed Mahmoud</b><small><br></small>Sales Manager</h4>
                                        <ul class="social-icons">
                                            <li><a href="https://www.facebook.com/mohamed.zaghloul.9047" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                        <div class="caption-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->



            </div>
            <!-- /CONTENT AREA -->

                    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
@endsection
