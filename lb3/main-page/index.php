<html>
    <head>
        <title>Diggitec</title>
    </head>

    <body>
        <h1>Herzlich Willkommen zu Diggitec, dem besten Shop für elektronische Produkte.</h1>
        <ul>
            <?php
$json = file_get_contents('http://content-service/');   #Wouldnt recommend this for production but it works as an example
$obj = json_decode($json);

$products = $obj->products;

foreach ($products as $product)
{
    echo "<li>$product</li>";
}

?>
        </ul>
    </body>
</html>

