<!-- portfolio section starts  -->
<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> my </span> portfolio </h1>

    <div class="box-container">

        @foreach ($portfolios as $portfolio)
        <div class="box tilt">
            <img src="{{ Voyager::image($portfolio->image) }}" alt="">
            <div class="content">
                <a href="{{ $portfolio->link }}" class="btn" target="_blank">learn more</a>
            </div>
        </div>
        @endforeach

    </div>
    
</section>
<!-- portfolio section ends -->