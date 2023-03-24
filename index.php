<?php
    require_once("vendor/autoload.php");
    $latte = new Latte\Engine;
    $latte->setTempDirectory('temp');

    $file_path = "https://onemocneni-aktualne.mzcr.cz/api/v2/covid-19/zakladni-prehled.csv";


    if(str_contains(get_headers($file_path)[0],"200 OK")) {
        $params = [];

        $file = file($file_path);
        $file_data = [];    
    
        foreach($file as $line) {
            array_push($file_data,explode(",",$line));
        }
    
        if(count($file_data) == 2) {
            $header = $file_data[0];
            $data = $file_data[1];
        
            for($i = 0; $i < count($header); $i++) {
                $key = str_eval($header[$i]);
                $value = $data[$i];
        
                $params[$key] = $value;
            }
            $params["status_code"] = 200;
        } else {
            $params["status_code"] = 404;
        }
    } 

    // Function for making the string alphanumeric
    function str_eval($text) {
        return preg_replace("/([^a-zA-Z0-9]+_*[^a-zA-Z0-9])*/", "", $text);
    }

    $latte->render('templates/covid-app.latte',$params);
?>