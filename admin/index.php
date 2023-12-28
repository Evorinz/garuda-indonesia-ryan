<?php
if ($_SERVER['REQUEST_URI'] === '/garuda-indonesia-ryan/admin/') {
    header('Location: dashboard/');
    exit();
}
?>