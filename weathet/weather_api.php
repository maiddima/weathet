<?php


if (isset($_POST['unity']) == "Celsius" && isset($_POST['city_input'])){

    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&units=metric&type=accurate&appid=0a72c24c164f0742864d129aada49e53";

    $json = file_get_contents($url);

    $data = json_decode($json, true);

    $description = $data['weather'][0]['description'];

    $temperature = intval($data['main']['temp']);

    $id_icon = $data['weather'][0]['id'];

    $unity = "Celsius";

    $name = $data['name'];

    $add_weather =  array (
      'description' => $description,
      'temperature' => $temperature,
      'unity' => $unity,
      'name' => $name,
      'icon' => $id_icon
    );

    $_SESSION['array_widget'][] = $add_weather;


} else if (isset($_POST['unity']) == "Fahrenheit" && isset($_POST['city_input'])) {

    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&units=metric&type=accurate&appid=0a72c24c164f0742864d129aada49e53";

    $json = file_get_contents($url);

    $data = json_decode($json, true);

    $description = $data['weather'][0]['description'];

    $temperature = intval($data['main']['temp']);

    $id_icon = $data['weather'][0]['id'];

    $unity = "Fahrenheit";

    $name = $data['name'];

    $add_weather =  array (
      'description' => $description,
      'temperature' => $temperature,
      'unity' => $unity,
      'name' => $name,
      'icon' => $id_icon
    );

    $_SESSION['array_widget'][] = $add_weather;

} else if (isset($_POST['unity']) == "Kelvin" && isset($_POST['city_input'])) {

    $url = "http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&units=metric&type=accurate&appid=0a72c24c164f0742864d129aada49e53";

    $json = file_get_contents($url);

    $data = json_decode($json, true);
    
    $description = $data['weather'][0]['description'];

    $temperature = intval($data['main']['temp']);

    $id_icon = $data['weather'][0]['id'];

    $unity = "Kelvin";

    $name = $data['name'];

    $add_weather =  array (
      'description' => $description,
      'temperature' => $temperature,
      'unity' => $unity,
      'name' => $name,
      'icon' => $id_icon
    );

    $_SESSION['array_widget'][] = $add_weather;
}
?>
