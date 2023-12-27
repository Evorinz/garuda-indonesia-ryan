<?php
include('../../../conn/connection.php');

if (isset($_POST['delete'])) {
    $id_to_delete = $_POST['id'];

    $query = "DELETE FROM tbl_news_event WHERE id = $id_to_delete";
    $result = mysqli_query($db, $query);

    if ($result) {
        header('Location: ../pages/news.php');
        exit();
    } else {
        echo "
            <script>
                alert('Gagal Hapus Berita');
            </script>
        ";
    }
}
?>
