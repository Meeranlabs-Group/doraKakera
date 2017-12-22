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
                        <h1>Blog Post</h1>
                    </div>
                    <!--end title-->
                    <article class="blog-post">
                        <a href="#"><img src="{{ asset($article[0]->path) }}"></a>
                        <header><a href="#"><h2>{{ $article[0]->title }}</h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link-icon"><i class="fa fa-user"></i>Admin</a>
                            <a href="#" class="link-icon"><i class="fa fa-calendar"></i>06/04/2014</a>
                            <div class="tags">
                                <a href="#" class="tag article">Architecture</a>
                                <a href="#" class="tag article">Design</a>
                                <a href="#" class="tag article">Trend</a>
                            </div>
                        </figure>
                        <p>
                            {{ $article[0]->description }}
                        </p>
                        <h3>Parahraph Headline</h3>
                        <p>
                            Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                            Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                            felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
                            magna. Quisque pellentesque id mauris vitae placerat. Mauris facilisis odio nec metus cursus commodo.
                            Integer vel libero nunc. Donec ac lorem commodo, laoreet elit eget, tempus ante. Quisque eu nunc blandit
                            erat rutrum feugiat ac sed arcu. In nisi risus, molestie a sem adipiscing, porta volutpat velit.
                            Pellentesque nec felis sit amet nunc porta tincidunt sit amet et justo.
                        </p>
                        <h3>Audio Object</h3>
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/71654970&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                        <h3>Parahraph Headline</h3>
                        <p>
                            Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                            Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                            felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
                            magna. Quisque pellentesque id mauris vitae placerat.
                        </p>
                        <h4>List Headline</h4>
                        <ul>
                            <li>Phasellus metus ipsum, sollicitudin</li>
                            <li>Quisque pellentesque id mauris</li>
                            <li>Donec ac lorem commodo</li>
                            <li>In nisi risus, molestie a sem adipiscing</li>
                            <li>Pellentesque nec felis sit amet nunc</li>
                        </ul>
                    </article><!-- /.blog-post-listing -->
                    {{--<section id="about-author">--}}
                        {{--<header><h3>About the Author</h3></header>--}}
                        {{--<div class="post-author">--}}
                            {{--<img src="assets/img/person-01.jpg">--}}
                            {{--<div class="wrapper">--}}
                                {{--<header>Maria Scott</header>--}}
                                {{--<p>Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.--}}
                                    {{--Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</section>--}}
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
<!--end page-content-->




@include('partials.footer')
@include('include.foot')