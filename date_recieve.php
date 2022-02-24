<?php

$ajaxindex = $_POST['ajaxindex'];
$id=$_POST['id'];
include('functions.php');
$pdo = connect_to_db();
$sql = 'UPDATE studyselfnote SET noteindex=:jsondata, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':jsondata', $ajaxindex, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

exit();

?>
