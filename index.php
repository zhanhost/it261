<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhan's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>    
    <div id="wrapper">
        <header>
            <h1><a href="index.php">Zhan's Portal Page</a></h1>
            <nav>
                <ul>
                    <li><a href="">Switch</a></li>
                    <li><a href="">Troubleshoot</a></li>
                    <li><a href="">Calendar</a></li>
                    <li><a href="">Email</a></li>
                    <li><a href="">Database</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav>
        </header>

        <main>
        <img id="self" src="images/selfreflection.png" alt="An image of me holding my cat up to a mirror">
        <h2>IT261 winter quarter</h2>
        <p>Hello, my name is Zhan. This is my second quarter at Seattle Central College, and I think I am most interested in pursuing web development. A few months ago, I moved to Washington from the midwest. So far, I enjoy exploring various coffee shops and hope to make some new friends.</p>

        <h2>MAMP Localhost - Homework 1</h2>
        <p>Click the image to view it on its own page.</p>
        <h3>Localhost and Name</h3>
        <a href="images/localhostMAMP.png"><img class="localhostMAMP" src="images/localhostMAMP.png" alt="A screenshot showing my localhost MAMP working as well as my computer name"></a>
        <h3>Test MAMP Screenshot</h3>
        <a href="images/testMAMP.png"><img class="localhostMAMP" src="images/testMAMP.png" alt="A screenshot showing my PHP properly rendering an error"></a>

        <p><a href="index.php">Back to top</a></p>
        </main>

        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ul>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/var2.php">var2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ul>
            <h3>Week 3</h3>
            <ul>
                <li><a href="if.php">if.php</a></li>
                <li><a href="date.php">date.php</a></li>
                <li><a href="forloop.php">forloop.php</a></li>
                <li><a href="foreach.php">foreach.php</a></li>
                <li><a href="switch.php">switch.php</a></li>
            </ul>
            <h3>Week 4</h3>
            <ul>
                <li><a href="form-get.php">form-get.php</a></li>
                <li><a href="form1.php">form1.php</a></li>
                <li><a href="form2.php">form2.php</a></li>
                <li><a href="form3.php">form3.php</a></li>
                <li><a href="form-arithmetic.php">form-arithmetic.php</a></li>
                <li><a href="celcius.php">celcius.php</a></li>
            </ul>
            <h3>Week 5</h3>
            <ul>
                <li><a href="currency1.php">currency1.php</a></li>
                <li><a href="currency2.php">currency2.php</a></li>
                <li><a href="currency3.php">currency3.php</a></li>
                <li><a href="currency4.php">currency4.php</a></li>
                <li><a href="null.php">null.php</a></li>
            </ul>
            <h3>Week 6</h3>
            <ul>
                <li><a href="form1.php">form1.php</a></li>
                <li><a href="functions.php">functions.php</a></li>
                <li><a href="implode.php">implode.php</a></li>
            </ul>
            <h3>Week 7</h3>
            <ul>
                <li><a href="random.php">random.php</a></li>
                <li><a href="strings.php">strings.php</a></li>
                <li><a href="pictures.php">pictures.php</a></li>
            </ul>
            <h3>Week 8</h3>
            <ul>
                <li><a href="people.php">people.php</a></li>
            </ul>
        </aside>

        <footer>
            <ul>
                <li>Copyright &copy;
                    2023</li>
                <li>All Rights Reserved</li>
                <li><a href="">Web Design by Zhan</a></li>
                <li><a id="html-checker" href="#">HTML Validation</a></li>
                <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>

            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
        </footer>
    
    </div> <!-- end wrapper -->
</body>
</html>