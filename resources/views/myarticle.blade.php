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
        <div class="main-content">
            <div class="title">
                {{--<h1><a href="my-accommodations.html">My Accommodations</a></h1>--}}
                <h1 class="inactive"><a href="/profile">{{ Auth::user()->name }}</a></h1>
            </div>
            <div class="my-items table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Properties</th>
                        {{--<th>Featured</th>--}}
                        <th>Likes</th>
                        <th>Views</th>
                        <th>Rating</th>
                        <th>Last Reservation</th>
                    </tr>
                    </thead>
                    <tbody>

                    {{--@foreach($data as $property)--}}

                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    {{--<div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>--}}
                                    <a href="edit.html" class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/items/01.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">


                                    {{--propertydetail/{{ $property->id }}--}}
                                    {{--{{$property->title}}--}}
                                    <a href=""><h2>Title</h2></a>

                                    {{--{{$property->city}}--}}
                                    <figure class="location">Location</figure>

                                    {{--{{$property->property_type}}--}}
                                    <figure class="label label-info">Type</figure>
                                    <div class="meta">
                                        <span><i class="fa fa-bed"></i>365</span>

                                        {{--{{$property->price}}--}}
                                        <span class="price-info">Price: <span class="price">price</span></span>
                                    </div>
                                    <!--end meta-->
                                </div>
                                <!--end info-->
                            </td>
                            {{--<td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>--}}
                            <td class="views">426</td>
                            <td class="reviews">45</td>
                            <td class="rating">9.3</td>

                            <td class="last-reservation">

                                <div >
                                    {{--/editproperty/{{$property->id}}--}}
                                    <a href="" class="link icon"><i class="fa fa-edit"></i>Edit</a>

                                    {{--/deleteproperty/{{$property->id}}--}}
                                    <a href="" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>


                    {{--@endforeach--}}

                    </tbody>
                </table>
            </div>
            <!--end my-items-->
        </div>






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
        <!--end main-content-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer')
@include('include.foot')