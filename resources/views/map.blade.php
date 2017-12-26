@include('include.head')
@include('partials.navbar')



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

            <li><a href="{{ asset('maps/ABDALIAN.jpg') }}">Abdalian</a></li>
            <li><a href="{{ asset('maps/ALLAMA-IQBAL-TOWN.jpg') }}">Allama Iqbal Town</a></li>
            <li><a href="{{ asset('maps/ARMYWELFAIR.jpg' ) }}">Army Welfair</a></li>
            <li><a href="{{ asset('maps/CANAL-VIEW.jpg') }}">Canal View</a></li>
            <li><a href="{{ asset('maps/CAVLARY-GROUND.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/CHANAR-BAGH.jpg') }}">Chanar Bagh</a></li>
            <li><a href="{{ asset('maps/DH-PH-8-updated.jpg') }}">DHA Phase 8 Upadated</a></li>
            <li><a href="{{ asset('maps/DHA 1-5.jpg' ) }}">DHA Phase 1-5</a></li>
            <li><a href="{{ asset('maps/DHA-COMM-1-11 (1).jpg') }}">DHA Phase Commercial 1-11></a></li>
            <li><a href="{{ asset('maps/DHA-Phase-1.jpg') }}">DHA Phase 1</a></li>
            <li><a href="{{ asset('maps/DHA-Phase-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/DHA-Phase-3.jpg') }}">DHA Phase 3</a></li>
            <li><a href="{{ asset('maps/DHA-Phase-4.jpg') }}">DHA Phase 4</a></li>
            <li><a href="{{ asset('maps/DHA-Phase-5.jpg') }}">DHA Phase 6</a></li>
            <li><a href="{{ asset('maps/DHA-PHASE-9-TOWN.jpg') }}">DHA Phase 9 Town</a></li>
            <li><a href="{{ asset('maps/DHA-PHASE-XI-11-HALLOKI-GARDEN-1.jpg') }}">DHA Phase XI HALLOKI GARDEN</a></li>
            <li><a href="{{ asset('maps/DHA-PHASE-XI-11-RAHBAR.jpg') }}">DHA Phase 11 Rahbar</a></li>
            <li><a href="{{ asset('maps/EME.jpg') }}">DHA EME Sector</a></li>
            <li><a href="{{ asset('maps/FAISAL-TOWN.jpg') }}">Faisal Town + Model Town Ext</a></li>
            <li><a href="{{ asset('maps/FAZAIA15-6-12-Q.jpg') }}">Fazaia Housing Scheme </a></li>
            <li><a href="{{ asset('maps/FORMANITE.jpg') }}">Formanites Housing Scheme</a></li>
            <li><a href="{{ asset('maps/GARDEN-TOWN.jpg') }}">New Garden Town</a></li>

            <li><a href="{{ asset('maps/IZMIR-TOWN.jpg') }}">Izmir Town</a></li>
            <li><a href="{{ asset('maps/JOHAR-TOWN-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/JUBLLE-TOWN.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/LAHORE.jpg') }}">DHA Phase 2</a></li>
            {{--<li><a href="{{ asset('maps/) }}">DHA Phase 2</a></li>--}}
            <li><a href="{{ asset('maps/LDA-1.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/MODEL-TOWN.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/MUSLIM-TOWN.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/NFC-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/OPF.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/PECO.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/PND.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/PUBLIC-HALTH.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/PUNJAB-COP.jpg') }}">DHA Phase 2</a></li>


            <li><a href="{{ asset('maps/RAILTOWN.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/rsz_1new_phase_67.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/SABZAZAR.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/STATE-LIFE-1.jpg') }}">DHA Phase 2</a></li>


            <li><a href="{{ asset('maps/STATE-LIFE-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/SUIGAS-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/TnT.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/TOWN-SHIP.jpg') }}">DHA Phase 2</a></li>


            <li><a href="{{ asset('maps/uu.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/WAPDA-TOWN.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/Z-BLOCK.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('maps/HBFC.jpg') }}"> HBFC Officers Co. Housing Society</a></li>

        </ul>

            <!--end list-links-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->


    <!--end block-->










@include('partials.footer');
@include('include.foot');
