<?php
require_once '../../app/Classes/VehicleManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
    ];
    $vm = new VehicleManager('', '', 0, '');
    $vm->addVehicle($data);
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Vehicle</title></head>
<body>
    <h1>Add New Vehicle</h1>
    <form method="POST">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Type: <input type="text" name="type" required></label><br>
        <label>Price: <input type="number" name="price" required></label><br>
        <label>Image Filename: <input type="text" name="image" required></label><br>
        <button type="submit">Add Vehicle</button>
    </form>
</body>
</html>
