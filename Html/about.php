<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Timothys shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
		<link href="../php/mail.php" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../Index.php">Timothys Webshop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../Index.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Your company</h1>
                            <p class="lead text-white-50 mb-4"><loremxxx>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint ut ratione, autem et voluptate officiis eum incidunt cupiditate dolor totam laborum. Sed, tenetur!</loremxxx></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-textarea"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p><loremxxx>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, voluptate, minus? Eligendi quis rerum neque hic dolor vitae eveniet voluptates dicta, labore, veniam iusto.</loremxxx></p>
                        <a class="text-decoration-none" href="#!">
                            Your link here
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-textarea"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p><loremxxx>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde suscipit harum consectetur quia labore reiciendis esse minus, adipisci incidunt recusandae expedita id totam praesentium.</loremxxx></p>
                        <a class="text-decoration-none" href="#!">
                            Your link here
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-textarea"></i></div>
                        <h2 class="h4 fw-bolder">Featured title</h2>
                        <p><loremxxx>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum consectetur cumque vero libero quos, odio obcaecati repellat totam deleniti, voluptatibus provident est. Alias, necessitatibus!</loremxxx></p>
                        <a class="text-decoration-none" href="#!">
                            Your link here
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Get in touch</h2>
                    <p class="lead mb-0">We'd love to hear from you</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <form class="contact-form" action="../php/mail.php" method="post" id="contactForm">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" type="text" placeholder="Enter your name..." />
                                <label for="name">Full name</label>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="mail" type="text" placeholder="name@example.com" />
								<label for="email">Email address</label>
								
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..."></textarea>
                                <label for="message">Message</label>
                               
							</div>
                            <div class="d-grid"><button class="btn btn-primary" name="submit" type="submit">Submit</button></div>
                        </form>
                    </div>
				</div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>


