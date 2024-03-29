<header>
    <!-- place navbar here -->
    <nav class="navbar ">
        <div class=" topnavbar container-fluid">
            <button class="navbar-toggler bmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start divmenu" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Acceuil</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>Cartes Cadeaux</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Bijoux</b>
                            </a>
                            <ul class="dropdown-menu bBijoux">
                                <li><a class="dropdown-item" href="#">Collier</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Bague</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">B.d'orielle</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Bracelet</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Montre</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <br />
                    <div class="conn">
                        <ul>
                            <li>
                                <a class="connecte" href="#">Se connecte</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Créer un compte</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Contacter-nous</a>
                            </li>
                            <li>
                                <a class="connecte" href="#">Condition Générales</a>
                            </li>
                        </ul>
                    </div>
                    <br />
                    <br />

                    <footera class="sc">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <!-- </footera>
              <form class="d-flex mt-3" role="search">
                <input
                  class="form-control me-2"
                  type="search"S
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form> -->
                </div>
            </div>
            <img src="images/logo2.png" alt="logo" width="250" height="200" />
            <div>
                <span>
                    <a class="bsearch" href="#"><i class="fa-solid fa-magnifying-glass"></i> </a>
                </span>
                <span>
                    <a class="bpanier" href="#"><i class="fa-solid fa-bag-shopping"></i> <!--   <span class="notification"></span>-->
                        <span id="add" class="prixtotal">0 €</span>

                    </a>
                </span>
            </div>
        </div>

        <div class="carosel container-fluid ">
            <div class="divcarosel  container-fluid ">
                <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class=" divcarousel carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/2+.png" class="d-block w-100 imgcarosel" alt="colier" width="" height="500" />
                            <div class="carousel-caption d-none d-md-block    ">

                                <h5> <a href="#"><b>Collier</b></a> </h5>

                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="2000">

                            <img src="images/6.jpg" class="d-block w-100 imgcarosel" alt="b.orielle" width="" height="500" />
                            <div class="carousel-caption d-none d-md-block">

                                <h5> <a href="#"><b>B.d'orielle</b></a> </h5>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/7.jpg" class="d-block w-100 imgcarosel" alt="bague" width="" height="500" />
                            <div class="carousel-caption d-none d-md-block  ">
                                <h5> <a href="#"><B>Bague</B></a> </h5>

                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        </div>
        </div>
    </nav>
</header>
<div id="getFixed" class=" logobar container-fluid  ">
    <div class="row logo-bijoux">
        <div class="col"><a href="#"><img src="images/f1.png" alt="collier" width="50" height="50"></br>Collier </a></div>
        <div class="col"><a href="#"> <img src="images/f2.png" alt="b.d'oreille" width="50" height="50"></br>B.d'oreille</a></div>
        <div class="col"> <a href="#"> <img src="images/f3.png" alt="braslets" width="50" height="50"></br>Bracelet</a></div>
        <div class="col"><a href="#"><img src="images/f4.png" alt="bage" width="50" height="50"></br>Bague</a></div>
        <div class="col"> <a href="#"><img src="images/f5.png" alt="b cheville" width="50" height="50"></br> B.cheville</a></div>
        <div class="col"><a href="#"><img src="images/Montere.png" alt="b cheville" width="50" height="50"></br>Montre</a></div>
    </div>
</div>