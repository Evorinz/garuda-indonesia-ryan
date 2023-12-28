<?php
include('../../../conn/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $location = $_POST['location'];
    $datePublish = $_POST['datePublish'];
    $optPublishOrNot = $_POST['optPublishOrNot'];
    $capImages = $_POST['capImages'];

    $namaFile = uniqid();
    $namaFileBaru = $namaFile . '.' . pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

    $target_dir = "../../../images/news/";
    $target_file = $target_dir . $namaFileBaru;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (basename($_FILES["fileToUpload"]["name"]) !== '' && file_exists($target_file)) {
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
        header('Location: ../pages/news.php');
        exit();
    } else {
        if(basename($_FILES["fileToUpload"]["name"]) !== ''){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $sql = "UPDATE tbl_news_event SET 
                    title = ?,
                    location = ?,
                    date_publish = ?,
                    published = ?,
                    desc_event = ?,
                    cap_image = ?,
                    image_events = ?
                    WHERE id = ?";

                $stmt = mysqli_prepare($db, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "sssssssi", $title, $location, $datePublish, $optPublishOrNot, $desc, $capImages, $namaFileBaru, $id);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "
                            <script>
                                alert('Berita Berhasil Diupdate');
                            </script>
                        ";
                    } else {
                        echo "
                        <script>
                        alert('Gagal Update Berita');
                        </script>
                        ";
                    }
                    mysqli_stmt_close($stmt);
                    header('Location: ../pages/news.php');
                    exit();
                } else {
                    echo "
                        <script>
                            alert('Gagal mempersiapkan statementGagal Update Berita');
                        </script>
                    ";
                    header('Location: ../pages/news.php');
                    exit();
                }
            } else {
                echo "
                    <script>
                        alert('Maaf, terjadi kesalahan saat mengunggah file.');
                    </script>
                ";
                header('Location: ../pages/news.php');
                exit();
            }
        } else {
            $sql = "UPDATE tbl_news_event SET 
                    title = ?,
                    location = ?,
                    date_publish = ?,
                    published = ?,
                    desc_event = ?,
                    cap_image = ?
                    WHERE id = ?";

            $stmt = mysqli_prepare($db, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssssssi", $title, $location, $datePublish, $optPublishOrNot, $desc, $capImages, $id);
                if (mysqli_stmt_execute($stmt)) {
                    echo "
                        <script>
                            alert('Berita Berhasil Diupdate');
                        </script>
                    ";
                    header('Location: ../pages/news.php');
                    exit();
                } else {
                    echo "
                        <script>
                            alert('Gagal Update Berita');
                        </script>
                    ";
                    header('Location: ../pages/news.php');
                    exit();
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "
                    <script>
                        alert('Gagal mempersiapkan statementGagal Update Berita');
                    </script>
                ";
                header('Location: ../pages/news.php');
                exit();
            }
        }
    }
}
?>
