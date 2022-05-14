<html>
    <head>
        <title>Diggitec</title>
    </head>

    <body>
        <h1>Herzlich Willkommen zu Diggitec, dem besten Shop für elektronische Produkte.</h1>
        <ul>
            <?php
$json = file_get_contents('http://content-service/');
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

