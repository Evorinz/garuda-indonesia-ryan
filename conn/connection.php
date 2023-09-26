<?php
    $db = new mysqli('localhost','root','','db_berita_garuda');
    if($db -> connect_errno){
        echo "
            <script>
                alert('Gagal Terhubung Ke Database');
            </script>
        ";
    }
?>