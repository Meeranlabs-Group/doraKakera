


<div class="block">
    <div class="container">
        <div class="title">
            <h2 class="center">Available Properties</h2>
        </div>
        <!--end title-->





        {{--{{ $Property->where('city','=',"Lahore") }}--}}
         {{--{{ $total= Property::where('city',"Lahore") }}--}}
            {{--{{ $total }}--}}

        <ul class="list-links">


            @foreach($Property1 as $property)


            {{--<li><a href="#"> {{ $property[0][0]->city }} <span> {{ $property[0][1]->count}} </span></a></li>--}}

                <li><a href="/properties/{{ $property->city }}">{{ $property->city }}<span>{{ $property->total }}</span></a></li>

            @endforeach



        </ul>
        <!--end list-links-->
    </div>
    <!--end container-->
</div>