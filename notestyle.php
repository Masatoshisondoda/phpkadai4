<?php
if (
    !isset($_POST['notename']) || $_POST['notename'] == '' ||
    !isset($_POST['usepurpose']) || $_POST['usepurpose'] == ''
) {
    exit('paramError');
}

include('functions.php');
$notename=$_POST['notename'];
$usepurpose=$_POST['usepurpose'];

$pdo = connect_to_db();
$sql = 'INSERT INTO studyselfnote(id, notename, usepurpose, created_at, updated_at) VALUES(NULL, :notename, :usepurpose, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':notename', $notename, PDO::PARAM_STR);
$stmt->bindValue(':usepurpose', $usepurpose, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$lastid = $pdo->lastInsertId();
header("Location:note.php?param1=1&param2={$lastid}");
exit();
?>