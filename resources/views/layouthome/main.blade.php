<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="/assets/css/styles.css">

        {{-- My Style --}}
        <link rel="stylesheet" href="/css/style.css">

        {{-- Bootstrap Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <title>Notariku by Tety Andriani</title>
    </head>

    <body>

        @include('layouthome.header')

        <div class="container mt-4">
            @yield('container')
        </div>

        @include('layouthome.footer')

        <a href="https://api.whatsapp.com/send?phone=+6281905972540&text=Saya ingin bertanya boleh?" target="_blank"><button id="myWa" title="Go to WA"><i style="color: white" class="bi bi-whatsapp"></i></button></a>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        {{-- <script>
            //Get the button:
            mybutton = document.getElementById("myWa");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "block";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script> --}}
    </body>
</html>