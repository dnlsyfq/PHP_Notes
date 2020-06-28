<html>
<head>
    <title>My First PHP Site</title>
</head>
<body>
<h1>PHP and HTML</h1>
<p>This is HTML</p>
<?php
echo "<h3>Hello! I'm {$about_me["name"]}!</h3>";
echo "<p> I'm " . calculateAge($about_me). " years old! That's pretty cool, right?</p>";
echo "<div>What more is there to say? I love {$about_me["favorite_food"]}, and that's pretty much it!</div>";
?>

</body>
</html>