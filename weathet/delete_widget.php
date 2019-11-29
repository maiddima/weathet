<?php
if (isset($_POST['delete_widget_'])){
    unset($_SESSION['array_widget'][$_POST['delete_widget_']]);
    $_SESSION['array_widget'] = array_values($_SESSION['array_widget']);
}
?>
