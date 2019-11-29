<?php
if (empty($_SESSION['array_widget'])) {
    readfile('demo.html');
} else {

    echo '<div class="columns is-multiline">';

    foreach ($_SESSION['array_widget'] as $key=>$widget) {
        if ($widget['unity'] == "Celsius") {
            echo'<div class="column is-one-fifth">
                    <form action="edit.php" method="post">
                        <div class="notification" name="widget_'.$key.'" id="widget_'.$key.'">
                            <button type="submit" class="delete" name="delete_widget_" value='.$key.'></button>
                           <h4 id="const" class="title is-4">'.$widget['name'].'<br>'.$widget['temperature'].' °C</h4>
                        </div>
                    </form>
                </div>';
        } else if ($widget['unity'] == "Fahrenheit") {
            echo'<div class="column is-one-fifth">
                    <form action="edit.php" method="post">
                        <div class="notification" name="widget_'.$key.'" id="widget_'.$key.'">
                            <button type="submit" class="delete" name="delete_widget_" value='.$key.'></button>
                           <h4 id="const" class="title is-4">'.$widget['name'].'<br>'.$widget['temperature'].' F</h4>
                        </div>
                    </form>
                </div>';
        } else if ($widget['unity'] == "Kelvin") {
            echo'<div class="column is-one-fifth">
                    <form action="edit.php" method="post">
                        <div class="notification" name="widget_'.$key.'" id="widget_'.$key.'">
                            <button type="submit" class="delete" name="delete_widget_" value='.$key.'></button>
                           <h4 id="const" class="title is-4">'.$widget['name'].'<br>'.$widget['temperature'].' K</h4>
                        </div>
                    </form>
                </div>';
        }
    }

    echo '</div>';
}
?>
