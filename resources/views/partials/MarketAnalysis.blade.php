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
            <div class="col-md-9">
                <div class="main-content">
                    <div class="title">
                        <h1>Blog Posts</h1>
                    </div>
                    <!--end title-->
                    <article class="blog-post">
                        <a href="/MarketDetails"><img src="assets/img/items/01_b.jpg"></a>
                        <header><a href="/MarketDetails"><h2>Vivamus porta orci eu turpis vulputate ornare fusce hendrerit arcu risu</h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                            <a href="#" class="link icon"><i class="fa fa-calendar"></i>06/04/2014</a>
                            <div class="tags">
                                <a href="#" class="tag article">Architecture</a>
                                <a href="#" class="tag article">Design</a>
                                <a href="#" class="tag article">Trend</a>
                            </div>
                        </figure>
                        <p>Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
                            tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
                            velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
                            sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
                            hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
                            in malesuada sem rutrum. In placerat porta egestas.
                        </p>
                        <a href="/MarketDetails" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                    </article><!-- /.blog-post -->
                    <article class="blog-post">
                        <header><a href="/MarketDetails"><h2>Nulla sapien leo, placerat sed lacinia nec, rutrum quis</h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                            <a href="#" class="link icon"><i class="fa fa-calendar"></i>06/04/2014</a>
                            <div class="tags">
                                <a href="#" class="tag article">Interior</a>
                                <a href="#" class="tag article">New Living</a>
                            </div>
                        </figure>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec rutrum imperdiet ligula in bibendum. Aenean vulputate rutrum lobortis. Nullam non
                            mi ac dui egestas venenatis. Etiam venenatis fermentum accumsan. Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Donec at lacus sapien.
                        </p>
                        <a href="/MarketDetails" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                    </article><!-- /.blog-post -->



                    <!-- Pagination -->
                    <div class="center">
                        <ul class="pagination">
                            <li class="prev">
                                <a href="#"><i class="arrow_left"></i></a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#"><i class="arrow_right"></i></a>
                            </li>
                        </ul>
                        <!-- end pagination-->
                    </div>
                    <!-- end center-->
                </div>
                <!--end main-content-->
            </div>
            <!--end col-md-9-->
            <div class="col-md-3">
                <div class="sidebar">
                    <h2>Archive</h2>
                    <ul class="links">
                        <li><a href="#">January</a></li>
                        <li><a href="#">February</a></li>
                        <li><a href="#">April</a></li>
                        <li><a href="#">March</a></li>
                        <li><a href="#">July</a></li>
                        <li><a href="#">September</a></li>
                        <li><a href="#">October</a></li>
                        <li><a href="#">December</a></li>
                    </ul>
                </div>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>

@include('partials.footer');
@include('include.foot')