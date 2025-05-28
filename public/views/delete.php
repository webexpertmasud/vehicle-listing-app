<?php
require_once '../../app/Classes/VehicleManager.php';
$vm = new VehicleManager('', '', 0, '');

$id = $_GET['id'] ?? null;

if ($id) {
    $vm->deleteVehicle($id);
    header('Location: ../index.php');
    exit;
} else {
    echo "Invalid request.";
}
?>
