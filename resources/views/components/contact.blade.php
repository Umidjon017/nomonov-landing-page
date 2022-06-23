<!-- contact section starts  -->
<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="row">

        <div class="image">
            <img class="tilt" src="src/images/contact-img.svg" alt="">
        </div>

        <form action="{{ route('send.email') }}" method="POST">
            @csrf

            @if (Session::has('error'))
                <h4 class="alert alert-danger">
                    {{ Session::get('error') }}
                </h4>
            @endif

            @if (Session::has('success'))
                <h4 class="alert alert-success">
                    {{ Session::get('success') }}
                </h4>
            @endif

            <div class="form-group">
                <input type="text" class="box" placeholder="name" name="name" value="{{ old('name') }}">
                @error('name') <h4 class="text-danger"> {{ $message }} </h4> @enderror
            </div>

            <div class="form-group">
                <input type="email" class="box" placeholder="email" name="email" value="{{ old('email') }}">
                @error('email') <h4 class="text-danger"> {{ $message }} </h4> @enderror
            </div>

            <div class="form-group">
                <input type="text" placeholder="subject" name="subject" class="box" value="{{ old('subject') }}">
                @error('subject') <h4 class="text-danger"> {{ $message }} </h4> @enderror
            </div>

            <div class="form-group">
                <textarea placeholder="message" name="message" id="" cols="30" rows="10"> {{ old('message') }} </textarea>
                @error('message') <h4 class="text-danger"> {{ $message }} </h4> @enderror
            </div>

            <button type="submit" class="btn"> Send Message</button>

        </form>

    </div>

</section>
<!-- contact section ends -->