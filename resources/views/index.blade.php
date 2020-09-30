@extends('index_layout')
@section('page-head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
@endsection

@section('content')

    <header>
        <div>
            <div>
                <div>
                    <img id="header-background-image_1" src="{{ asset('img/header_shape_2.png') }}">
                    <img id="header-background-image_2" src="{{ asset('img/header_shape_1.png') }}">
                </div>
            </div>
            <div style="padding: 30px;">
                <div style="padding: 50px; position: relative;">
                    <div style="float: left;">
                        <img id="nike-side-logo" src="{{ asset('img/nike_originally_known_as_.png') }}" >
                    </div>
                    <div style="padding: 0 70px;">
                        <div>
                            <div style="display: inline;">
                            <span>
                                <a href="#">
                                    <img src="{{ asset('img/vector_smart_object_2.png') }}">
                                    <span class="main-logo">Sho<strong style="color: black;">e</strong>shop</span>
                                </a>
                            </span>
                            </div>
                            <div style="float: right;">
                                <a href="{{ route('showCart') }}">
                                    <div class="top-social-logo-con">
                                        <img src="{{ asset('img/black_background.png') }}">
                                        <img class="top-social-logo-img" src="{{ asset('img/image.png') }}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <div>
                                <img src="{{ asset('img/nike_2.png') }}" style="position: absolute; top: 100px; left: 10%; ">
                            </div>
                            <div>
                                <a href="#" id="shop-brand-btn">Shop by Brands</a>
                            </div>
                            <div>
                                <img id="shoe-img" src="{{ asset('img/img_2.png') }}" >
                            </div>
                        </div>
                    </div>
                    <div style="float: right;">
                        <ul class="top-social-logo">
                            <li class="top-social-logo-list">
                                <div>
                                    <a href="#">
                                        <div class="top-social-logo-con">
                                            <img src="{{ asset('img/white_background.png') }}">
                                            <img class="top-social-logo-img" src="{{ asset('img/fa-twitter.png') }}">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="top-social-logo-list">
                                <div>
                                    <a href="#">
                                        <div class="top-social-logo-con">
                                            <img src="{{ asset('img/black_background.png') }}">
                                            <img class="top-social-logo-img" src="{{ asset('img/fa-facebook_2.png') }}">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="top-social-logo-list">
                                <div>
                                    <a href="#">
                                        <div class="top-social-logo-con">
                                            <img src="{{ asset('img/black_background.png') }}">
                                            <img class="top-social-logo-img" src="{{ asset('img/fa-google-plus_2.png') }}">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="top-social-logo-list">
                                <div>
                                    <a href="#">
                                        <div class="top-social-logo-con">
                                            <img src="{{ asset('img/black_background.png') }}">
                                            <img class="top-social-logo-img" src="{{ asset('img/fa-pinterest_2.png') }}">
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section style="margin-top: 710px;">
        <div style="padding: 100px; position: relative;">
            <div
                style="z-index: -1; display: inline-block; text-align: center; border: 10px solid white; background-color: #eeeded; height: 650px; width: 650px; position: relative;
                box-shadow: 0 0 10px 5px #eeeded;">
                <img src="{{ asset('uploads/products/' . $products[0]['productImage']) }}" style ="vertical-align: middle; text-align: center; margin: 2cm; display: inline; ">
            </div>
            <div style="display: inline-block; position: relative; top: 50px; right: 3%;">
            <span style="font-size: 45pt; color: rgba(0, 0, 0, 255);">
               {{ $products[0]['productName'] }}
            </span>
                <span style="font-size: 15pt; color: rgba(136, 136, 136, 255);">
                <p>
                    {{  $products[0]['productDescription'] }}
                </p>
                <p>

                </p>
            </span>
                <div style=" float: right;">
                    <a href="#" class="main-btn">View Now</a>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: auto;">
        <div class="container-class" style="text-align: left;">
        <span class="main-heading" style="text-align: left;">
            New Arrivals
        </span>
            <div style="padding-top:1cm;">
                @foreach($products as $product)
                    <div style="display: inline-block; padding: 1cm 1cm;">
                        <div>
                            <div style="text-align: center; height: auto; width: 250px;">
                                <div class="con">
                                    <img src="{{ asset('uploads/products/' . $product->productImage) }}" class="img">
                                    <a href="{{ route('productShowPage',['product' => $product->productCode]) }}" class="link" >View Details</a>
                                </div>
                            </div>
                        </div>
                        <div style="padding:1cm 0; font-size: 15px;">
                    <span style="text-align: left;">
                        {{ $product->productName }}
                    </span>
                            <span style="float: right; color: rgba(136, 136, 136, 255);">
                        Shop Outdoors
                    </span>
                        </div>
                        <div>
                            <span style="font-size: 25pt; color: rgba(153, 153, 153, 255);">$ {{ $product->productPrice }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section style="margin-top: auto; padding-top: 2cm;">
        <div class="container-class" style="text-align: left;">
            <div style="position: relative;">
                <img src="{{ asset('img/bg_8.jpg') }}"
                     style ="vertical-align: middle; text-align: center; border: 10px solid white; display: inline;
                    background-color: #eeeded; box-shadow: 0 0 10px 5px #eeeded;position: absolute; z-index: 3; right: 10%;">

                <div style="z-index: 2; background-color: #a6eed9; height: 350px; width: 250px; position: absolute;  right: 3%; top: 300px;"></div>
            </div>
            <div style="float: left;">
                <div style="padding: 10em; height: auto; width: 500px;">
                <span class="main-heading" style="display: block; text-align: left;">
                    Pre- Fall Collections
                </span>
                    <p style="font-size: 15pt; color: rgba(136, 136, 136, 255); text-align: justify; ;">
                        Bring to the table win-win survival strategies to ensure proactive domination.
                        At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.
                        User generated content in real-time will
                    </p>
                    <br>
                    <br>
                    <br>
                    <div>
                        <a href="#" style="background-color: #82f4d3; padding: 10px 40px; font-size: 15pt;
                    color: rgba(10, 10, 10, 255); text-decoration: none;" >View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 750px; background-color: #f8f8f8; width: 100%;">
        <div class="container-class">
        <span class="main-heading">
            We Thought of you
        </span>
            <p style="font-size: 15pt; color: rgba(136, 136, 136, 255);">
                Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                Override the digital divide with additional clickthroughs from DevOps.
                Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
            </p>

        </div>
    </section>
    <section style="margin-top:auto ;">
        <div class="container-class">
            <div>
                <span class="main-heading">Latest Blog</span>
            </div>
            <br>
            <br>
            <div style="position: relative;">
                <div style="width: 266px; height: 352px; background-color: #ffffff; border: 10px solid #f9f9f9; border-radius: 10px; position: relative;"></div>
                <img src="{{ asset('img/bg_6.png') }}" style="border: 5px solid white; box-shadow: 0 0 10px 5px #eeeded; position: absolute; left: 5%; top: 20%;">
                <div style="width: 266px; height: 352px; background-color: #b1f4e1; position: absolute; z-index: -1; left: 25%;">
                    <img src="{{ asset('img/nike.png') }}" style="float: right;">
                </div>
                <p style="width: 531px; font-size: 15pt; color: rgba(136, 136, 136, 255); text-align: justify; position: absolute; right: 25%; bottom: 20%;">
                    <strong style="font-size: 20pt; color: rgba(0, 0, 0, 255);">Colorful Offer;</strong>
                    <br>
                    <br>
                    Leverage agile frameworks to provide a robust synopsis for high level overviews.
                    Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.
                    Organically grow the holistic world view of disruptive
                </p>
                <div style="float: right; margin-right: 200px;">
                    <a class="main-btn" href="#">Read More</a>
                </div>

            </div>
        </div>
    </section>
    <section style="margin-top: 350px;">
        <div class="container-class">
            <hr>
            <div>
                <table style="width: 100%;">
                    <tr>
                        <td>
                        <span>
                            <img src="{{ asset('img/vector_smart_object.png') }}">
                            <span class="main-logo">Sho<strong style="color: black;">e</strong>shop</span>
                        </span>
                        </td>
                        <td>
                            <ul style="list-style-type: none; text-align: left;">
                                <li><a class="last-menu-list" href="#">Home</a></li>
                                <li><a class="last-menu-list" href="#">Man</a></li>
                                <li><a class="last-menu-list" href="#">Woman</a></li>
                                <li><a class="last-menu-list" href="#">Popular</a></li>
                                <li><a class="last-menu-list" href="#">About</a></li>
                                <li><a class="last-menu-list" href="#">Blog</a></li>
                            </ul>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <ul style="list-style-type: none; text-align: left;">
                                            <li><a class="last-menu-list" href="#">Support</a></li>
                                            <li><a class="last-menu-list" href="#">Advertisment status</a></li>
                                            <li><a class="last-menu-list" href="#">Online Shop</a></li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <ul style="list-style-type: none; text-align: left;">
                                <li>
                                    <span class="newsletter">Sign up for news and events</span>
                                </li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>

                                <li>
                                    <input class="newsletter signup-input" type="search" name="search" placeholder="Your email address">
                                    <a href="#" class="main-btn">Submit</a>
                                </li>
                                <li>
                                    <ul style="list-style-type: none;">
                                        <li class="last-menu-icon-list">
                                            <div>
                                                <a href="#">
                                                    <div style="text-align: center;">
                                                        <img src="{{ asset('img/fa-twitter.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="last-menu-icon-list">
                                            <div>
                                                <a href="#">
                                                    <div style="text-align: center;">
                                                        <img src="{{ asset('img/fa-facebook.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="last-menu-icon-list">
                                            <div>
                                                <a href="#">
                                                    <div style="text-align: center;">
                                                        <img src="{{ asset('img/fa-google-plus.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="last-menu-icon-list">
                                            <div>
                                                <a href="#">
                                                    <div style="text-align: center;">
                                                        <img src="{{ asset('img/fa-pinterest.png') }}">
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
@endsection
