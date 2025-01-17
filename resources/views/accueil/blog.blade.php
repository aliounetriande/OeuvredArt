@extends('front.layout.front')

@section ('contentPage')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Se connecter</a>
            <a href="#">S'inscrire</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
    
    <!-- Header Section Begin -->
    <header class="header">
        <x-menu_navigation />
    </header>
    <!-- Header Section End -->

     <!-- Blog Section Begin -->
     <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic large__item set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">No Bad Blood! The Reason Why Tamr Judge Finally Made Up With...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-7.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Pot Party! See Farrah Abraham Flaunt Smoking Body At...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Amf Cannes Red Carpet Celebrities Kendall Jenner, Pamela...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Ireland Baldwin Shows Off Trendy Ilse Valfre Tattoo At Stagecoach...</a>
                            </h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Gigi Hadid, Rita Ora, Serena & Other Hot Celebs Stun At 2019...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-5.jpg"></div>
                        <div class="blog__item__text">
                            <h6><a href="#">Billboard Music Awards: Best, Worst & Wackiest Dresses On The...</a></h6>
                            <ul>
                                <li>by <span>Ema Timahe</span></li>
                                <li>Seb 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Load more posts</a>
                </div>-->
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
<footer class="footer">
<x-footer />
    
</footer>
<!-- Footer Section End -->

@endsection
