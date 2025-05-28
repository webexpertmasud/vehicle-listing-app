<?php
require_once '../app/Classes/VehicleManager.php';

$vm = new VehicleManager('', '', 0, '');
$vehicles = $vm->getVehicles();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Listing</title>
</head>
<body>
    <h1>Vehicle Listing</h1>
    <a href="views/add.php">Add New Vehicle</a>
    <ul>
        <?php foreach ($vehicles as $vehicle): ?>
            <li>
                <strong><?= $vehicle['name'] ?></strong> - <?= $vehicle['type'] ?> - $<?= $vehicle['price'] ?><br>
                <img src="images/<?= $vehicle['image'] ?>" alt="<?= $vehicle['name'] ?>" width="100"><br>
                <a href="views/edit.php?id=<?= $vehicle['id'] ?>">Edit</a> |
                <a href="views/delete.php?id=<?= $vehicle['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
