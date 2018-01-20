
<div class="item list" >
    <div class="image-wrapper">


        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Like This Property"><i class="fa fa-thumbs-up"></i>
        </div>


        <div class="image">
            <a href="{{ URL::to('/') . '/propertydetail/' . $data->slug }}" class="wrapper">


                <div class="gallery">

                    @foreach($photos as $photo)
                        @if($photo->property_id == $data->id )
                            <img src="{{ asset($photo->path)  }}" style="width:250px;height: 200px;"  alt="">
                        @endif
                        {{--<img src="#" class="owl-lazy" alt="" data-src="assets/img/items/02.jpg">--}}
                        {{--<img src="#" class="owl-lazy" alt="" data-src="assets/img/items/03.jpg">--}}
                    @endforeach
                </div>
            </a>
            <div class="map-item">
                <button class="btn btn-close"><i class="fa fa-close"></i></button>
                <div class="map-wrapper"></div>
            </div>
            <!--end map-item-->
            <div class="owl-navigation"></div>
            <!--end owl-navigation-->
        </div>
    </div>
    <!--end image-->
    <div class="description">
        <div class="meta">
            <span><i class="fa fa-bed"></i>{{ $data->number_of_bedrooms }}</span>
            <span><i class="fa fa-bath"></i>{{ $data->number_of_bathrooms }}</span>
        </div>
        <!--end meta-->
        <div class="info">



            {{--<a href=" /propertydetail/{{ $data->id }} " ><h3> {{  str_limit( ucfirst($data->title), $limit = 30, $end = '...')  }} </h3></a>--}}
            <a href="{{ URL::to('/') . '/propertydetail/' . $data->slug }}" ><h3> {{  str_limit( ucfirst($data->title), $limit = 30, $end = '...')  }} </h3></a>
            {{----}}



            @if($data->society_name == 'Other')
                <figure class="location">{{ $data->address }}</figure>
            @else
                <figure class="location">{{ $data->block_name }}, {{ $data->phase_name }}, {{ $data->society_name }}, {{ $data->city_name }}</figure>
            @endif
            {{--<figure class="label label-info">{{ $data->property_type }}</figure>--}}
            {{--<figure class="label label-success">{{$data->unit_size}} {{$data->unit_type}}</figure>--}}
            {{--<h6 class="label label-danger">PKR-{{ nice_number($data->price) }}</h6>--}}

            <figure class="label label-InProcess">{{ $data->purpose }}</figure>
            <figure class="label label-InProcess">{{ $data->property_type }}</figure>
            <figure class="label label-success">{{$data->unit_size}} {{$data->unit_type}}</figure>
            <h6 class="label label-danger">PKR-{{ nice_number($data->price) }}</h6>

            @if($data->status == 1)
                <figure class="label label-Available">Available</figure>
            @endif

            @if($data->status == 2)
                <figure class="label label-InProcess">In-Process</figure>
            @endif

            @if($data->status == 3)
                <figure class="label label-danger">Sold</figure>
            @endif



            <p>
                {{ $data->description }}
            </p>
            <div class="price-info">Price:<span class="price">PKR- {{ $data->price }}/-</span>
                <span class="price call"><i class="fa fa-phone"></i> 03224531314</span></div>

            <a href="{{ URL::to('/') . '/propertydetail/' . $data->slug }}"  class="btn btn-rounded btn-small btn-default btn-framed" >View detail</a>
        </div>
        <!--end info-->
    </div>
    <!--end description-->
</div>
<!--end item-->