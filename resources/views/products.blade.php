@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/products">Make Up</a></li>
        <li class="active">Recommend</li>
    </ol>
    <!-- /#wrapper -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail" >
                        <h4 class="text-center"><span class="label label-info">NUX</span></h4>
                        <img src="http://cdn2.bigcommerce.com/server3500/0bb09/product_images/uploaded_images/nyx-mls-category.jpg?t=1399496037" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Matte</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                        <label>$15</label></h3>
                                </div>
                            </div>
                            <p>Red</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <a href="/cart" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span>Buy</a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail" >
                        <h4 class="text-center"><span class="label label-info">Urban Decay</span></h4>
                        <img src="http://www.urbandecay.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-urbandecay-master-catalog/default/dw22da3e54/ProductImages/Palettes/Naked2/604214916463_naked2.jpg?sw=1000&sh=1000&sm=fit" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Naked</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                        <label>$70</label></h3>
                                </div>
                            </div>
                            <p>2</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/cart" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail" >
                        <h4 class="text-center"><span class="label label-info">NUX</span></h4>
                        <img src="http://maggiesemple.com/wp-content/uploads/2015/12/2242461.jpg" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Matte</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                        <label>$17</label></h3>
                                </div>
                            </div>
                            <p>Dark Red</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <a href="/cart" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail" >
                        <h4 class="text-center"><span class="label label-info">BH</span></h4>
                        <img src="http://bpc.h-cdn.co/assets/16/19/480x480/bh-cosmetics-liquid-lipstick-matte.jpg" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Liquid</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                        <label>$25</label></h3>
                                </div>
                            </div>
                            <p>Rose</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <a href="/cart" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row" id="slider-text">
            <div class="col-md-6" >
                <h2>NEW COLLECTION</h2>
            </div>
        </div>
    </div>

    <!-- Item slider-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://www.nyxcosmetics.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-cpd-nyxusa-master-catalog/default/dwfe832458/ProductImages/Lips/Liquid_Suede_Cream_Lipstick/liquidsuedecreamlipstick_main.jpg?sw=600&sh=600&sm=fit" class="img-responsive center-block"></a>
                                <h4 class="text-center">NYX Liquid</h4>
                                <h5 class="text-center">$15-20</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://www.nyxcosmetics.com/dw/image/v2/AANG_PRD/on/demandware.static/-/Sites-cpd-nyxusa-master-catalog/default/dw2fa25259/ProductImages/2016/Lips/Ombre_Lip_Duo/ombrelipduo_main.jpg?sw=600&sh=600&sm=fit" class="img-responsive center-block"></a>
                                <h4 class="text-center">NYX Pencils</h4>
                                <h5 class="text-center">$10</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://a0.bb-cdn.com/assets/productimages/medium/perfectmattlipstick_1_gm.jpg?version=747" class="img-responsive center-block"></a>
                                <h4 class="text-center">ARTDECO Lipsticks</h4>
                                <h5 class="text-center">$7</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://media.allure.com/photos/577ff0568adb777d7e930f78/master/pass/beauty-trends-blogs-daily-beauty-reporter-kailijumei-flower-lipsticks.jpg" class="img-responsive center-block"></a>
                                <h4 class="text-center">ALLURE Lipsticks</h4>
                                <h5 class="text-center">$40</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://www.saradujour.me/wp-content/uploads/2013/05/top-10-best-favorite-mac-lipsticks.png" class="img-responsive center-block"></a>
                                <h4 class="text-center">MAC Lipsticks</h4>
                                <h5 class="text-center">$20</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://static1.squarespace.com/static/5594b2c7e4b03822e68df637/t/570b768d1bbee05d7fd202c4/1460370897463/Too+Faced+Melted+Matte+Lipsticks?format=1000w" class="img-responsive center-block"></a>
                                <h4 class="text-center">TOO FACED LIQUID</h4>
                                <h5 class="text-center">$30</h5>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://cdn1.feelunique.com/img/products/34717/Lanc__me_Hypn__se_Doll_Eyes_Mascara_6_5g_1366648067.png" class="img-responsive center-block"></a>
                                <h4 class="text-center">LANCOME Hypnose</h4>
                                <h5 class="text-center">$20</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://media.brostrick.com/wp-content/uploads/2015/12/31153058/vasanti-eye-smile-mascara.jpg" class="img-responsive center-block"></a>
                                <h4 class="text-center">VASANTI Smile</h4>
                                <h5 class="text-center">$36</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://images.ulta.com/is/image/Ulta/2165816?$detail$" class="img-responsive center-block"></a>
                                <h4 class="text-center">NYX Doll Eye</h4>
                                <h5 class="text-center">$25</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="https://d210vlyat54t3c.cloudfront.net/media/transfer/img/web_sweetpeach_open.jpg" class="img-responsive center-block"></a>
                                <h4 class="text-center">TOO FACED Peach</h4>
                                <h5 class="text-center">$70</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://www.pauladorf.com/images/large/pressed-powder_LRG.jpg" class="img-responsive center-block"></a>
                                <h4 class="text-center">Paula Dorf</h4>
                                <h5 class="text-center">$40</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="#"><img src="http://cdn2.bigcommerce.com/server5400/291eluz5/products/277/images/501/FairFacePowder__70462.1333125984.1280.1280__50594.1355965078.600.600.jpg?c=2" class="img-responsive center-block"></a>
                                <h4 class="text-center">BEN NYE</h4>
                                <h5 class="text-center">$38</h5>
                            </div>

                        </div>




                    </div>

                    <div id="slider-control">
                        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
                        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-footer">
            <ol class="breadcrumb">
                <li><a href="/aboutUs">About Us</a></li>
                <li><a href="/contact">Contacts</a></li>
            </ol>
        </div>
    </div>
@endsection