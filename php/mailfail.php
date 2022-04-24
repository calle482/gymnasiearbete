<!DOCTYPE html>
<html lang="en">
    <head>
		<!--här sätter vi utf8 och gör hemsidan mobil optimiserad-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--sätter en description för hemsidan och vem som är author-->
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Timothys shop</title>
        <!--en icon för hemsidan-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- här importerar vi boostarps iconer-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- här importerar vi bootstratps library och javascripty liberaryt-->
        <link href="../css/styles.css" rel="stylesheet" />
		<link href="../php/mail.php" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Här är navbaren-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.php">Timothys Webshop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Html/about.php">About</a></li>
						<!--här startar dropdown menyn -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../index.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
								<!--här slutar dropdown menyn-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--En headline för webpagen. sätter stilen och texten-->
        <header class="bg-dark py-5">
            <div class="container px-5">
				<!--sätter texten i mitten och gör den vit-->
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
							<!--här skriver vi texten till boxen -->
                            <h1 class="display-5 fw-bolder text-white mb-2">Your mail failed to send!</h1>
                            <p class="lead text-white-50 mb-4"><loremxxx>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sint ut ratione, autem et voluptate officiis eum incidunt cupiditate dolor totam laborum. Sed, tenetur!</loremxxx></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="../Html/about.php">Try again</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>


