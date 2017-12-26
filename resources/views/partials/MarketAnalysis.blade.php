@include('include.head')
@include('partials.navbar')

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">Market Anaylysis</li>

        </ol>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-9">
                <div class="main-content">




                    <div class="title">
                        <h1>Market Analysis</h1>
                    </div>
                    <!--end title-->

                    @foreach($articles as $article)

                    <article class="blog-post">
                        <a href="/MarketDetail/{{$article->id}}">
                            <img src="{{ asset($article->path)}}"></a>
                        <header><a href="/MarketDetail/{{$article->id}}"><h2>{{ $article->title }}</h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                            <a href="#" class="link icon"><i class="fa fa-calendar"></i>{{ $article->created_at }}4</a>
                            <div class="tags">
                                <a href="#" class="tag article">Architecture</a>
                                <a href="#" class="tag article">Design</a>
                                <a href="#" class="tag article">Trend</a>
                            </div>
                        </figure>
                        <p>
                            {{ $article->description }}

                            Phasellus metus ipsum, sollicitudin lacinia turpis in, pellentesque pulvinar diam.
                            Cras ultricies augue sapien, aliquam hendrerit mi suscipit at. Suspendisse vulputate felis eget
                            felis convallis fermentum et eu nulla. Donec sagittis sit amet erat non eleifend. Mauris at convallis
                            magna. Quisque pellentesque id mauris vitae placerat. Mauris facilisis odio nec metus cursus commodo.
                            Integer vel libero nunc. Donec ac lorem commodo, laoreet elit eget, tempus ante. Quisque eu nunc blandit
                            erat rutrum feugiat ac sed arcu. In nisi risus, molestie a sem adipiscing, porta volutpat velit.
                            Pellentesque nec felis sit amet nunc porta tincidunt sit amet et justo.
                        </p>
                        <a href="/MarketDetail/{{$article->id}}" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                    </article><!-- /.blog-post -->
                  @endforeach




                    <!-- Pagination -->
                    <div class="center">


                        {{ $articles->render() }}

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