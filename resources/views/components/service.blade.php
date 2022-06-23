<!-- services section starts  -->
<section class="services" id="services">

    <h1 class="heading"> <span> my </span> services </h1>

    <div class="box-container">

        @foreach ($services as $service)
        <div class="box tilt">
            <i class="{!! $service->icon !!}"></i>
            <h3>{!! $service->title !!}</h3>
            <p>{!! $service->description !!}</p>
        </div>
        @endforeach

    </div>

</section>
<!-- services section ends -->