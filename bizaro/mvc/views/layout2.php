<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bizaro</title>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous" />

    <!--OwlCarousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <!--Custom CSS File-->
    <link rel="stylesheet" href="./public/css/style.css" />
</head>

<body>
    <!--Header-->
    <header>
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-20 text-black-50 m-0">
                Web này là của Huỳnh Phúc Huy (4 đường Số 2 p.10 quận Tân Bình TP.HCM)
            </p>
        </div>

        <!--Start Primary Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="/bizaro/home">Bizaro Coffee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="/bizaro/home">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false">Category <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/bizaro/food">Foods</a>
                            <a class="dropdown-item" href="/bizaro/drink">Drinks</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/bizaro/blog">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Main-->
    <main id="main-site">
        <?php
        require_once "./mvc/views/pages/" . $data["page"] . ".php";
        ?>
    </main>

    <!--Footer-->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Bizaro</h4>
                    <p class="font-rale font-size-14 text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Facere, tempore dolorem ratione natus, quidem nam libero minima obcaecati tempora, voluptatum beatae ipsam!
                        Porro ex nam commodi nesciunt assumenda, qui enim.</p>
                </div>

                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newslatter</h4>
                    <form action="#" class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms</a>
                    </div>
                </div>

                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Whishlist</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy; Copyright 2020. Design By Phúc Huy</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

    <!--Custome Javascript-->
    <script src="./public/js/index.js"></script>
</body>

</html>