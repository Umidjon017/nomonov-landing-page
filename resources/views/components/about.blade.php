<!-- about section starts  -->
<section class="about" id="about">

    <h1 class="heading"> about <span>me</span> </h1>

    @foreach ($abouts as $about)
        <div class="row">

            <div class="image">
                <img class="tilt" src="{{ Voyager::image( $about->image ) }}" alt="">
            </div>

            <div class="content">
                <h3> my name is <span>Abdulboriy Nomonov </span> </h3>
                <p class="info"> {!! $about->description !!} </p>
                <div class="box-container">
                    <div class="box">
                        <p> <span> age: </span> {!! $about->age !!} </p>
                        <p> <span> gender: </span> {!! $about->gender !!} </p>
                        <p> <span> experience  : </span> {!! $about->experience !!} </p>
                        <p> <span> freelance : </span> {!! $about->freelance !!} </p>
                    </div>
                    <div class="box">
                        <p> <span> language : </span> {!! $about->language !!} </p>
                        <p> <span> phone : </span> {!! $about->phone !!} </p>
                        <p> <span> email : </span> {!! $about->email !!} </p>
                        <p> <span> address : </span> {!! $about->address !!} </p>
                    </div>
                </div>
                <a href="/src/images/mine-cv.jpg" class="btn" download>download CV</a>
            </div>

        </div>
    @endforeach

</section>
<!-- about section ends -->