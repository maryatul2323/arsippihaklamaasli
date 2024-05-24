<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solid Template</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="solid/dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">SI DATA</h1>

                        <div style="background-color: white; border: 1px solid #ddd; padding: 20px; border-radius: 10px; max-width: 400px; margin-left: -50px;">
                                <h2 style="font-size: 1.5em; color:black; margin-bottom: 15px;">Login</h2>
                                <form action="login.php" method="post">
                                    <div style="margin-bottom: 10px;">
                                        <label for="username" style="display: block; font-size: 1em;">Username</label>
                                        <input type="text" id="username" name="username" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
                                    </div>
                                    <div style="margin-bottom: 10px;">
                                        <label for="password" style="display: block; font-size: 1em;">Password</label>
                                        <input type="password" id="password" name="password" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
                                    </div>
                                    <div style="text-align: center;">
                                        <button type="submit" style="padding: 10px 20px; border: none; background-color: #007bff; color: #fff; border-radius: 5px; cursor: pointer; font-size: 1em;">Login</button>
                                    </div>
                                </form>
                            </div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
                            <img src="solid/src/images/arsip.png" alt="arsip" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 9999;">
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>


        </main>

    </div>

    <script src="solid/dist/js/main.min.js"></script>
</body>
</html>
