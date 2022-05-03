<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./homepage.css">
</head>
<body>
    <header>
        <h1>Ovyapaar</h1>
        <nav>
            <a href="">Option 1</a>
            <a href="">Option 2</a>
            <a href="">Option 3</a>
            <a href="">Option 4</a>
        </nav>
    </header>
    <main>
        <?php
            $con = new mysqli("localhost", "mayank", "eniac", "temp");
            $sql = "SELECT * FROM product";
            $result = $con->query($sql);
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="card">
            <img src="jeans3.jpg" alt="Denim Jeans" style="width:100%">
            <h1><?= $row['p_name']?></h1>
            <p class="price">$19.99</p>
            <p><?= $row['p_desc']?></p>
            <p><button>Add to Cart</button></p>
          </div>
          <?php
            }
          ?>
    </main>
    <footer>
        <p>&copy; 2022 ONLITS TECHNOLOGIES LLP</p>
    </footer>
</body>
</html>