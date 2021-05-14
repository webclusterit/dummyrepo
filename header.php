<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebCluster Private Limited | A Digital Marketing Agency In Delhi</title>
    <link rel="stylesheet" href="headerstyle.css">
</head>

<body>
    <header style="color:white; position:absolute">
            <a href="#" class="logo">
            
                <img src="images/CompanyLogo.png"></img>
                Web<span style="color:#673DE6">Cluster</span>
            </a>

             <div class="toggle" style="position:absolute;"></div>

            <ul class="navigation">
                <li><a href="index.php" style="--i:1;" class="active"> Home</a></li>
                <li><a href="about.php" style="--i:2;"> About</a></li>
                <li><a href="services.php" style="--i:3;"> Services</a></li>
                <li><a href="products.php" style="--i:4;"> Products</a></li>
                <li><a href="contact.php" style="--i:5;"> Contact</a></li>
            </ul>
        </header>

        <script>
        const menuToggle = document.querySelector('.toggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active')
            navigation.classList.toggle('active')
        }    
    </script>
</body>
</html>
