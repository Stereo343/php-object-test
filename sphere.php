<html>
<head>
</head>
<body>
    <main>
        <form method="post" action="sphere.php">
            <div>
                <label for="rayon">rayon:</label>
                <input type="text" name="rayon" title="rayon" />
            </div>
        </form>
    </main>
</body>
</html>

<?php

if (isset($_POST["rayon"]))
{
    $rayon = $_POST["rayon"];
    if ($rayon >= 0)
    {
        echo(sphereSurface($rayon));
        echo(sphereVolume($rayon));
    }
    else {
        echo("le Rayon est magique, mais négatif");
    }
}

function sphereSurface($x)
{
    $calculSphereSurface = (4 * pi()) * ($x ** 2);
    return ("<p>Une sphere de rayon $x a comme volume $calculSphereSurface m3</p>");
}

function sphereVolume($x)
{
    $calculSphereVolume = (4 * pi() /3) * ($x ** 3);
    return ("<p>Une sphere de rayon $x a comme volume $calculSphereVolume m3</p>");
}
