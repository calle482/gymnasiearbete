<!DOCTYPE html>
<html lang="en">
    <head>
		<!--här sätter vi utf8 och gör hemsidan mobil optimiserad-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--sätter en description för hemsidan och vem som är author-->
        <meta name="description" content="En shop" />
        <meta name="author" content="" />
        <title>Timothys shop</title>
        <!--en icon för hemsidan-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- här importerar vi boostarps iconer-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- här importerar vi bootstratps library-->
        <link href="css/styles.css" rel="stylesheet" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </head>
    <body>
        <!--Här är navbaren-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Timothys Webshop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Html/about.php">About</a></li>
					  <!--här startar dropdown menyn -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
								<!--här slutar dropdown menyn-->
                            </ul>
                        </li>
                    </ul>
					<!-- här är view cart knappen och paypals kåd för att den ska fungera -->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
  <input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
	<!-- här är stilen för knappen-->
<button type="submit" value="test" class="btn btn-outline-dark">
	<i class="bi-cart-fill me-1"></i> View cart
	</button>
					</form>
                </div>
            </div>
        </nav>
        <!--En headline för hemsidan. sätter stilen och texten-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
				<!--sätter texten i mitten och gör den vit-->
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">place holder</p>
                </div>
            </div>
        </header>
       <!--skapar boxen som produkten, priser och knappen ligger i-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!--bilden för produkten-->
                            <img class="card-img-top" src="https://www.confectioneryproduction.com/wp-content/uploads/Japanese-sweet-bread-450x300.jpg" alt="..." />
                            <div class="card-body p-4">
								 <!--Produkt namet och priset.sätter också texen i mitt-->
                                <div class="text-center">
                                  <h5 class="fw-bolder">Bröd</h5>
									30kr
<!--add to cart knappen som leder till paypals hemsida där priset och produkten läggs till-->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RZSUS866T3734">
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> </div>
	<!--stilen på knappen-->
<input type="submit" value="Add to cart" class="btn btn-outline-dark mt-auto" border="0" name="submit" alt="Add to cart">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>



                                </div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
							<!--bilden för produkten-->
                            <img class="card-img-top" src="https://burgersandbangers.se/wp-content/uploads/2021/02/img_5490-1-450x300.jpg" alt="..." />
                            <div class="card-body p-4">
								 <!--Produkt namet och priset. sätter också texen i mitt-->
                                <div class="text-center">
                                    <h5 class="fw-bolder">Hamburgare</h5>
								55kr
<!--add to cart knappen som leder till paypals hemsida där priset och produkten läggs till-->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="P5T35VVUMPAJS">
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> </div>
	<!--stilen på knappen-->
<input type="submit" value="Add to cart" class="btn btn-outline-dark mt-auto" border="0" name="submit" alt="Add to cart">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>

								</div>
                            </div>
                        </div>
                    </div>
					 <!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!--Lägger till en "sales" icon-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- bilden för produkten-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
								 <!--Produkt namet och priset.sätter också texen i mitt-->
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder&nbsp;</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Produkt bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
								<!--Produkt namet och priset. sätter också texen i mitt-->
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder&nbsp;</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">  
                            <!--Produkt bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!--Produkt namet och priset. sätter också texen i mitt-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Produkt Bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!--Produkt namet och priset. sätter också texen i mitt-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- sätter en "sale" icon vid produkten-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Produkt bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                           <!--Produkt namet och priset. sätter också texen i mitt-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Produkt bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                           <!--Produkt namet och priset. sätter också texen i mitt-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Place holder</h5>
                                    $1
                                </div>
                            </div>
                            <!-- stilen på knappen. här lägger man till sin egen paypal länk för produkten-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!--här stängs selction diven och så öppnar vi en ny under den för att få in dem sista 2 produkterna-->
        </section>
		<!--skapar boxen som produkten, priser och knappen ligger i-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Produkt bilden-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!--Produkt namet och priset. sätter också texen i mitt-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                  <h5 class="fw-bolder">Place holder</h5>
									10kr
									<!--add to cart knappen som leder till paypals hemsida där priset och produkten läggs till-->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VU7Q2NWUS9LK8">
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> </div>
	<!--stilen på knappen-->
<input type="submit" value="Add to cart" class="btn btn-outline-dark mt-auto" border="0" name="submit" alt="Add to cart">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>
					         </div>
                            </div>
                        </div>
                    </div>
					<!--skapar boxen som produkten, priser och knappen ligger i-->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                  <h5 class="fw-bolder">Place holder</h5>
									10kr
									<!--add to cart knappen som leder till paypals hemsida där priset och produkten läggs till-->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VU7Q2NWUS9LK8">
<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> </div>
	<!--stilen på knappen-->
<input type="submit" value="Add to cart" class="btn btn-outline-dark mt-auto" border="0" name="submit" alt="Add to cart">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>
                            </div>
                        </div>
						</div>
					</div>
					</div>
				</div>
				 <footer class="py-5 bg-dark">
					 <div class="container px-5"><p class="m-0 text-center text-white">Contact me testingwebsida@gmail.com</p></div>
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
    </body>
</html>
                    