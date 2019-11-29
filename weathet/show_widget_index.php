<?php
if (empty($_SESSION['array_widget'])) {
    readfile('demo.html');
} else {

    echo '<div class="section">
    <div class="columns is-multiline">';

    foreach ($_SESSION['array_widget'] as $widget) {
        if ($widget['unity'] == "Celsius") {
            echo'<div class="column is-one-fifth">
                    <div class="card bottom-border">
                        <header class="card-header">
                            <p class="card-header-title has-text-centered">'.$widget['name'].'</p>
                        </header>
                        <div class="card-content">
                            <div class="is-clearfix is-mobile is-tablet">
                                <div class="is-pulled-left">
                                    <h4 class="title has-text-centered is-4">'.$widget['temperature'].' °C</h4>
                                </div>
                                <div class="is-pulled-right">
                                        <i class="wi wi-owm-'.$widget['icon'].'"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        } else if ($widget['unity'] == "Fahrenheit") {
            echo'<div class="column is-one-fifth">
                    <div class="card bottom-border">
                        <header class="card-header">
                            <p class="card-header-title has-text-centered">'.$widget['name'].'</p>
                        </header>
                        <div class="card-content">
                            <div class="is-clearfix is-mobile is-tablet">
                                <div class="is-pulled-left">
                                    <h4 class="title has-text-centered is-4">'.$widget['temperature'].' °F</h4>
                                </div>
                                <div class="is-pulled-right">
                                        <i class="wi wi-owm-'.$widget['icon'].'"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        } else if ($widget['unity'] == "Kelvin") {
            echo'<div class="column is-one-fifth">
                    <div class="card bottom-border">
                        <header class="card-header">
                            <p class="card-header-title has-text-centered">'.$widget['name'].'</p>
                        </header>
                        <div class="card-content">
                            <div class="is-clearfix is-mobile is-tablet">
                                <div class="is-pulled-left">
                                    <h4 class="title has-text-centered is-4">'.$widget['temperature'].' K</h4>
                                </div>
                                <div class="is-pulled-right">
                                        <i class="wi wi-owm-'.$widget['icon'].'"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }

    echo '</div></div>';
}
