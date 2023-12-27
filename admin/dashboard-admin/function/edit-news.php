<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $location = $_POST['location'];
    $datePublish = $_POST['datePublish'];
    $optPublishOrNot = $_POST['optPublishOrNot'];
    $fileToUpload = $_POST['fileToUpload'];

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file sudah ada di server
    if (file_exists($target_file)) {
        echo "
            <script>
                alert('Maaf, file sudah ada.');
            </script>
        ";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "
            <script>
                alert('Maaf, file tidak diunggah.');
            </script>
        ";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO tbl_news_event (title, location, date_publish, published, desc_event, cap_image, image_events) VALUES ('$title', '$desc', $location, $datePublish, $optPublishOrNot,'" . basename($_FILES["fileToUpload"]["name"]) . "')";
            $result = mysqli_query($db, $sql);
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
        } else {
            echo "
                <script>
                    alert('Maaf, terjadi kesalahan saat mengunggah file.');
                </script>
            ";
        }
    }
}
?>

