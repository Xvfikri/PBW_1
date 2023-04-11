<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,600&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Sign-up.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="wrapper">
            <div class="nav-2">
                <ul>
                    <li>
                        <a href="Sign-In.php">Sign-In</a>
                    </li>

                    <li>
                        <a href="#">Sign-Up</a>
                    </li>
                </ul>
            </div>

            <nav>
                <div class="logo">
                    <a href="HomePage.php"><img src="Assets/Image/logo_myvote.svg" alt="My Vote">My Vote</a>
                </div>
                <ul>
                    <li>
                        <a href="HomePage.php">Beranda</a>
                    </li>

                    <li>
                        <a href="#">Tentang</a>
                    </li>

                    <li>
                        <a href="coba.php">Fitur</a>
                    </li>

                    <li>
                        <a href="#">Tutorial Voting</a>
                    </li>

                    <li>
                        <a href="#">Kontak Kami</a>
                    </li>


                </ul>
            </nav>
    </header>
    <!-- End of Navbar -->
    <div class="hero-section">
        <div class="right">
            <img src="Assets/Image/Hero_Sign-up.png" alt="">
        </div>
        <div class="btn-logo">
            <a href="#"><img class="svg-icon" src="Assets/Image/Logo_Whatsapp.svg" alt="btn-logo"></a>
            <div class="pseudo"></div>
        </div>
        <div class="box">
            <div class="container">
                <form method="post" action="post.php">
                    <h2>USER REGISTER</h2>
                    <div class="input-box">
                        <input type="text" class="input" placeholder="Nama" name="Name" required>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input" placeholder="NO NIK KTP" name="NO_NIK" required>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input" placeholder="No. Handphone" required>
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Register">
                    </div>

                </form>
            </div>
        </div>

    </div>



    <script></script>
</body>

</html>