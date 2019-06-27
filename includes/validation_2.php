<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

function reFreshToken() {
    $data = array("client_id" => "5827a978-9670-40d6-b956-3f32bb9b0716", 
        "client_secret" => "8f489405768f4b398bc26bfd76d54b31", 
        "refresh_token" => "RvuWM0jvON5kieXuVl-RoQNcKkSO1sk3hoQlpOb_MEk");                                                                    
    $data_string = json_encode($data);                                                                                   
                                                                                                                    
    $ch = curl_init('https://api.rd.services/auth/token');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Title');                                                                 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
                                                                                                                    
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result);
    return $json->access_token;
    // echo $result;
}
//reFreshToken();

function createToken() {
    $data = array("client_id" => "5827a978-9670-40d6-b956-3f32bb9b0716", 
        "client_secret" => "8f489405768f4b398bc26bfd76d54b31", 
        "code" => "53c3a2784e1253587a4ed1833751c74c");                                                                    
    $data_string = json_encode($data);                                                                                   
                                                                                                                    
    $ch = curl_init('https://api.rd.services/auth/token');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Title');                                                                 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
                                                                                                                    
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result);
    return $json->access_token;
    // echo $result;
}

function sendData() {
	// Variables que voy a enviar
	$email = $_POST["email2"];
	$sector = $_POST["sector"];
	$dolor = $_POST["dolor"];
	$product = $_POST["product"];
	$message = $_POST["message"];

    $authorization = "Authorization: Bearer ".reFreshToken()."";
    $data = array(
        "event_type" => "CONVERSION",
        "event_family" => "CDP",
        "payload" => array(
            "conversion_identifier" => "landing_competencias_ES_paso2_API",
            "email" => $email,
            "cf_sector" => $sector,  
            "cf_dolor" => $dolor,
            "cf_producto_interes" => $product,
            "cf_anotaciones" => $message,
        )
    );                                                                    
    $data_string = json_encode($data);                                                                                   
                                                                                                                    
    $ch = curl_init('https://api.rd.services/platform/events');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                            
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        $authorization,
        'Accept: application/json',
        'Accept-Language: en-US,en;q=0.5',
        'Content-Type: application/json',                                                                             
        'Content-Length: ' . strlen($data_string))                                                              
    );                                                                                                                   
                                                                                                                    
    $result = curl_exec($ch);
    curl_close($ch);
    echo  $result;
}

sendData();
?>