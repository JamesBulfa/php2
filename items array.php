<?php
$items = array(
    1 => 'Item 1',
    2 => 'Item 2',
    3 => 'Item 3',
    4 => 'Item 4',
    5 => 'Item 5',
);

// Check if "Item 1" is in the cart based on the query parameter
$itemInCart = isset($_GET['item']) && $_GET['item'] === '1';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://c4.wallpaperflare.com/wallpaper/297/22/531/lake-blue-moonlight-moon-wallpaper-thumb.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<div class="container">
    <ul class="nav">
        <?php foreach ($items as $id => $name): ?>
            <li class="nav-item">
                <a class="nav-link" href="item.php?id=<?php echo $id; ?>&item=1"><?php echo $name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="container">
    <form class="form-inline" action="item.php" method="get">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" id="search" name="search">
        <button class="btn btn-primary" type="submit" onclick="checkSearch()">Search</button>
    </form>
    <ul class="nav">
        <?php foreach ($items as $id => $name): ?>
            <li class="nav-item">
                <a class="nav-link" href="item.php?id=<?php echo $id; ?>"><?php echo $name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    // JavaScript function to check the search term and display a message
    function checkSearch() {
        var searchInput = document.getElementById("search").value.toLowerCase();
        if (searchInput === "bag") {
            if (<?= $itemInCart ? 'true' : 'false' ?>) {
                alert("Item 1 is already in the cart.");
            }
        }
    }

    // JavaScript to display a message if Item 1 is in the cart
    if (<?= $itemInCart ? 'true' : 'false' ?>) {
        alert("Item 1 is already in the cart.");
    }
</script>

</body>
</html>
