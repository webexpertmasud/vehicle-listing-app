<?php
require_once '../../app/Classes/VehicleManager.php';
$vm = new VehicleManager('', '', 0, '');

$id = $_GET['id'] ?? null;
$vehicles = $vm->getVehicles();
$vehicle = null;

foreach ($vehicles as $v) {
    if ($v['id'] === $id) {
        $vehicle = $v;
        break;
    }
}

if (!$vehicle) {
    echo "Vehicle not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
    ];
    $vm->editVehicle($id, $data);
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Vehicle</title></head>
<body>
    <h1>Edit Vehicle</h1>
    <form method="POST">
        <label>Name: <input type="text" name="name" value="<?= $vehicle['name'] ?>" required></label><br>
        <label>Type: <input type="text" name="type" value="<?= $vehicle['type'] ?>" required></label><br>
        <label>Price: <input type="number" name="price" value="<?= $vehicle['price'] ?>" required></label><br>
        <label>Image Filename: <input type="text" name="image" value="<?= $vehicle['image'] ?>" required></label><br>
        <button type="submit">Update Vehicle</button>
    </form>
</body>
</html>
