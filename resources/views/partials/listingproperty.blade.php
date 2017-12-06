<div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="1">
    <div class="image-wrapper">
        <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="scelerisque ut est" {{ $data->location }} ><i class="fa fa-question"></i></div>
        <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>

        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i>
        </div>
        <div class="image">
            <a href="detail" class="wrapper">
                <div class="gallery">
                    <img src="assets/img/items/01.jpg" alt="">
                    <img src="#" class="owl-lazy" alt="" data-src="assets/img/items/02.jpg">
                    <img src="#" class="owl-lazy" alt="" data-src="assets/img/items/03.jpg">
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
            <span><i class="fa fa-bath"></i>8.9</span>

            <i class="fa fa-bath" aria-hidden="true">123</i>
            <span><i class="fa fa-bed"></i>365</span>
        </div>
        <!--end meta-->
        <div class="info">
            <a href={{ "/detail" }}><h3> {{ $data->title }} </h3></a>
            <figure class="location">{{ $data->address }}</figure>
            <figure class="label label-info">House</figure>
            <figure class="label label-Available">Available</figure>
            <figure class="label label-InProcess">In-Process</figure>
            <figure class="label label-danger">Sold</figure>

            <p>
                {{ $data->description }}
            </p>
            <div class="price-info">Price<span class="price">PKR-{{ $data->price }}</span><span class="price call"><i class="fa fa-phone"></i> 03224531314</span></div>

            <a href={{ "/detail" }} class="btn btn-rounded btn-default btn-framed btn-small">View detail</a>
        </div>
        <!--end info-->
    </div>
    <!--end description-->
</div>
<!--end item-->