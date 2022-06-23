    <!-- footer section  -->
    <div class="footer"> created by <span> ME </span> | all rights reserved! </div>

    <!-- javascript part  -->

    <!-- typed.js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <!-- particles.js links  -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

    <!-- vanilla-tilt.js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <script>

    let menu = document.querySelector('#menu-bars');
    let header = document.querySelector('header');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        header.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        header.classList.remove('active');
    };

    var typed = new Typed('.typing-text', {
        strings : ['front end developer', 'web designer', 'graphic designer', 'ui/ux designer'],
        loop : true,
        typeSpeed : 100
    });

    /* VanillaTilt.init(document.querySelectorAll('.tilt'),{
        max:25
    }); */

    </script>

    </body>
</html>