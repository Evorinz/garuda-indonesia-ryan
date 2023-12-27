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

    $target_dir = "../../../images/news/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
    } else {
        if(basename($_FILES["fileToUpload"]["name"]) !== ''){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $sql = "UPDATE tbl_news_event SET 
                    title = '$title',
                    location = '$location',
                    date_publish = '$datePublish',
                    published = '$optPublishOrNot',
                    desc_event = '$desc',
                    cap_image = '$capImages',
                    image_events = '" . basename($_FILES["fileToUpload"]["name"]) . "'
                    WHERE id = $id";
                $result = mysqli_query($db, $sql);
                if ($result) {
                    echo "
                        <script>
                            alert('Berita Berhasil Diupdate');
                        </script>
                    ";
                    header('Location: ../pages/news.php');
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($db);
                    echo "
                        <script>
                            alert('Gagal Update Berita');
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
        }else{
            $sql = "UPDATE tbl_news_event SET 
                    title = '$title',
                    location = '$location',
                    date_publish = '$datePublish',
                    published = '$optPublishOrNot',
                    desc_event = '$desc',
                    cap_image = '$capImages'
                    WHERE id = $id";
                $result = mysqli_query($db, $sql);
                if ($result) {
                    echo "
                        <script>
                            alert('Berita Berhasil Diupdate');
                        </script>
                    ";
                    header('Location: ../pages/news.php');
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($db);
                    echo "
                        <script>
                            alert('Gagal Update Berita');
                        </script>
                    ";
                }
        }
    }
}
?>

