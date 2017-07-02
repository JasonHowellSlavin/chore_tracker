<html>
<head>
</head>
<body>
    <article class="welcome">
        <div class="hello-world">
            <h1> Hello Wolrd </h1>
            <h2>I am writing HTML.</h2>
            <?php
            $myFirstArray = array(
                "name"  => "Jason",
                "age"   => "32",
                "pizza" => "yes"
            )
            ?>
            <p> Here is a p-tage, with my name from a php array in it! <?php echo $myFirstArray["name"]?></p>
        </div>
    </article>
</body>
</html>