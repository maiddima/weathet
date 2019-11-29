<?php
session_start();

if (!isset($_SESSION['array_widget'])) {
    $_SESSION['array_widget'] = array();
}

require_once 'weather_api.php';
require_once 'delete_widget.php';

?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'head.php';?>
    <title>Edit Widgets | Weathet</title>
</head>
<body>
    <?php require_once 'header.php';?>
    <div class="container">
        <div class="section">
            <div class="box">
                <form action="edit.php" method="post" onchange="document.getElementById('form').action = this.value;">
                    <div class="field has-addons">
                        <div class="control is-expanded">
                            <input class="input has-text-centered" name="city_input" id="city_input" type="search" placeholder="City">
                        </div>
                        <div class="control">
                            <span class="select">
                                <select name="unity">
                                    <option value="Celsius">°C</option>
                                    <option value="Fahrenheit">°F</option>
                                    <option value="Kelvin">K</option>
                                </select>
                            </span>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php require_once 'show_widget_edit.php';?>
        </div>
    </div>
    <?php require_once 'footer.php';?>
</body>
</html>
