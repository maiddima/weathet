<?php

function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

if (isset($_POST['unity']) == "Celsius" && isset($_POST['city_input'])){

    $url = curl("http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&units=metric&type=accurate&appid=0a72c24c164f0742864d129aada49e53");

    $data = json_decode($url, true);

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

    $url = curl("http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&type=accurate&appid=0a72c24c164f0742864d129aada49e53");

    $data = json_decode($url, true);

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

    $url = curl("http://api.openweathermap.org/data/2.5/weather?q=".$_POST['city_input']."&type=accurate&appid=0a72c24c164f0742864d129aada49e53");

    $data = json_decode($url, true);

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
