<div class="block">
    <div class="container">
        <div class="title">
            <h2 class="center">Our Feature Properties</h2>
        </div>
        <!--end title-->

        <div class="gallery-carousel">

            @foreach($hot as $data)
            <div class="gallery-item">


                @foreach($photos as $photo)
                    @if( ($data->id == $photo->property_id) &&  $photo->rank ==1 )

                        <a href="propertydetail/{{ $data->id }}"><div class="image"><img src= "{{ $photo->path }}" alt=""></div></a>
                    @endif
                @endforeach

                <div class="description">
                    <a href="propertydetail/{{ $data->id }}"><h3> {{ $data->title }} </h3></a>
                    <figure>{{ $data->city_name }}</figure>
                    <p>  {{ str_limit($data->description , $limit = 150, $end = '...') }}  </p>
                    <a href="propertydetail/{{ $data->id }}" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                </div>
            </div>

        @endforeach
            <!--end gallery-item-->
        </div>


        <!--end gallery-carousel-->
    </div>
    <!--end container-->

    <div class="bg opacity-30">
        <img src={{ asset("assets/img/bg-map.jpg") }} alt="">
    </div>
</div>
<!--end block-->