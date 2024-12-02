<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Anesu Gandiwa Portfolio</title>
    <meta name="AdsBot-Google" content="noindex follow"/>
    <meta name="description" content="Perez - Tailwind CSS Personal Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


    <!-- Font CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css"/>
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css"/>


    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        #na {
            width: 5rem;
            height: 5rem;
            border-radius: 50px;
            color: white;
        }

        .header-menu {
            align-items: center;
            display: flex;
            justify-content: space-between;
        }

        .header-menu ul li {
            display: inline-block;
            margin: 0 18px 0;
            position: relative;
            z-index: 1;
            color: white;
        }

        .header-menu ul li a {
            display: inline-block;
            padding: 35px 0 35px;
            font-size: 18px;
            line-height: 28px;
            color: orange;
            font-weight: 500;
            font-family: "Oswald";
        }

        #logo {
            height: 100px;
            width: 100px;
        }

        #two {
            margin-top: 200px;
            height: 40%;
            width: 40%;
            margin-right: 80px;

        }

        .hover-color-change:hover span {
            color: red; /* Change the color on hover */
        }

        .hover-color-change:hover p,
        .hover-color-change:hover h4 {
            color: blue; /* Change the color of <p> and <h4> on hover */
        }
        .bg1{
            width: 100%;
            height: auto;
            opacity: 0.3;


        }
        img{
           margin-top: 20px;
        }
        .project{
            position: absolute ;
            top:20%;
            width: 100%;
            text-align: center;




        }


    </style>

</head>
<body>
@include('layouts.navigation')
@yield('body')
@include('Layouts.footer')



<!-- Vendors JS -->
<script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins/aos.js">
</script>
<script src="assets/js/plugins/swiper-bundle.min.js">
</script>
<script src="assets/js/plugins/jquery.waypoints.js">
</script>
<script src="assets/js/plugins/jquery.counterup.min.js">
</script>


<!-- Activation JS -->
<script src="assets/js/main.js"></script>


</body>
</html>


