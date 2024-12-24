<?php

include '../databases/connection.php';

if (isset($_GET['id_pemesanan'])) {
    $id = intval($_GET['id_pemesanan']); 

    $query = "DELETE FROM pemesanan WHERE id_pemesanan = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $id);

   
    if ($stmt->execute()) {
        header("Location: ../listPesanan.php?message=success");
        exit();
    } else {
        header("Location: ../listPesanan.php?message=error");
        exit();
    }
    $stmt->close();
} else {
    header("Location: ../listPesanan.php?message=invalid");
    exit();
}
?>
