@include('include.head')
@include('partials.navbar')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Detail</li>
        </ol>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="box filter">
                        <h2>About Us</h2>
                        <ul class="links">
                            <li class="active"><a href={{ url("/about-us")}}>About Us</a></li>
                            {{--<li><a href="terms-and-conditions.html">Terms & Conditions</a></li>--}}
                            <li><a href={{ url("/contact-us")}}>Contact Us</a></li>
                        </ul>
                    </div>
                    <!--end filter-->
                </div>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <div class="main-content">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <!--end title-->
                    <section>
                        <h2>Who We Are..</h2>
                        <p>Chohan Estate was established in 1985.This company was formed keeping in mind the
                            growing desires of the people and the demand to owe own house.
                            No one better than us could have capture the dreams and requirements of the people of Pakistan.
                        </p>
                        <p>
                            At Chohan we are committed to developing projects modified to the needs of the market and the
                            expectations of our clients and partners, whilst at the same time enriching these projects with our vision, aims, and values.
                        </p>

                        <p>
                            In conclusion, Please allow our extensive knowledge of real estate and our experienced staff to assist you with whatever your needs may be.
                            From rentals to property management, we are fully equipped to handle all of your real estate needs.
                        </p>
                    </section>
                    <section>
                        <h2>Our Agents</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="member">
                                    <div class="image"><img src="assets/img/person-01.jpg" alt=""></div>
                                    <div class="description">
                                        <h3>Kate Brown</h3>
                                        <h4>Company CEO</h4>
                                        <div class="info">
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>(123) 456 789</dd>
                                                <dt>Mobile Phone:</dt>
                                                <dd>888 123 456 789</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:kate.brown@example.com">kate.brown@example.com</a></dd>
                                                <dt>Skype:</dt>
                                                <dd>kate.brown</dd>
                                            </dl>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>
                                <!--member-->
                            </div>
                            <!--col-md-6-->
                            <div class="col-md-6">
                                <div class="member">
                                    <div class="image"><img src="assets/img/person-02.jpg" alt=""></div>
                                    <div class="description">
                                        <h3>Jone Doe</h3>
                                        <h4>PR Manager</h4>
                                        <div class="info">
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>(123) 456 789</dd>
                                                <dt>Mobile Phone:</dt>
                                                <dd>888 123 456 789</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:kate.brown@example.com">kate.brown@example.com</a></dd>
                                                <dt>Skype:</dt>
                                                <dd>kate.brown</dd>
                                            </dl>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>
                                <!--member-->
                            </div>
                            <!--col-md-6-->
                            <div class="col-md-6">
                                <div class="member">
                                    <div class="image"><img src="assets/img/person-03.jpg" alt=""></div>
                                    <div class="description">
                                        <h3>Kate Brown</h3>
                                        <h4>Marketing Guru</h4>
                                        <div class="info">
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>(123) 456 789</dd>
                                                <dt>Mobile Phone:</dt>
                                                <dd>888 123 456 789</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:kate.brown@example.com">kate.brown@example.com</a></dd>
                                                <dt>Skype:</dt>
                                                <dd>kate.brown</dd>
                                            </dl>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>
                                <!--member-->
                            </div>
                            <!--col-md-6-->
                            <div class="col-md-6">
                                <div class="member">
                                    <div class="image"><img src="assets/img/person-04.jpg" alt=""></div>
                                    <div class="description">
                                        <h3>John Doe</h3>
                                        <h4>Support Ninja</h4>
                                        <div class="info">
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>(123) 456 789</dd>
                                                <dt>Mobile Phone:</dt>
                                                <dd>888 123 456 789</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:kate.brown@example.com">kate.brown@example.com</a></dd>
                                                <dt>Skype:</dt>
                                                <dd>kate.brown</dd>
                                            </dl>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>
                                <!--member-->
                            </div>
                            <!--col-md-6-->
                        </div>
                        <!--end row-->
                    </section>
                </div>
                <!--end main-content-->
            </div>
            <!--end col-md-9-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer');
@include('include.foot');?>