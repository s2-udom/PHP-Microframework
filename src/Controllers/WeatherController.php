<?php
namespace App\Controllers;

class WeatherController {
    public function showWeather($request, $response, $args): mixed {
        // City names and API key
        $city1 = "Cambridge";
        $city2 = "Heidelberg, DE";
        $apiKey = "043a690509ea29e513f8ab5df971b36d";

        // OpenWeatherMap API URLs
        $url1 = "http://api.openweathermap.org/data/2.5/weather?q={$city1},uk&mode=xml&appid={$apiKey}&units=metric";
        $url2 = "http://api.openweathermap.org/data/2.5/weather?q={$city2},de&mode=xml&appid={$apiKey}&units=metric";

        // Function to get and parse weather data
        function getWeatherData($url) {
            $xml = simplexml_load_file($url);
            if ($xml === false) {
                echo "Failed to load XML data.";
                return null;
            }
            return $xml;
        }

        // Get weather data for both cities
        $weather1 = getWeatherData($url1);
        $weather2 = getWeatherData($url2);

    
          // Now render the weather data with Twig
        // The $twig variable is the Twig instance that you should pass data to
        /** @var Twig $twig */
        global $twig;  // You can access Twig globally if it's set up this way, or inject via constructor
        return $twig->render($response, 'weather.twig', [
            'weather1' => $weather1,
            'weather2' => $weather2
        ]);
    }
}