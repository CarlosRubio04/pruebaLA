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
	$job_title = $_POST["job_title"];
	$n_empleados = $_POST["empleados"];
	$product = $_POST["product"];
	$message = $_POST["message"];

    $authorization = "Authorization: Bearer ".reFreshToken()."";
    // $data = array(
    //     "event_type" => "CONVERSION",
    //     "event_family" => "CDP",
    //     "payload" => array(
    //         "conversion_identifier" => "landing_flex_ES_paso2",
    //         "email" => $email,
    //         "job_title" => $job_title,   
    //         "numero_empleados" => $n_empleados,
    //         "Producto de interés" => $product,
    //         "Anotaciones" => $message,
    //     )
    // );                                                                    
    // $data_string = json_encode($data);                                                                                   
                                                                                                                    
    $ch = curl_init('https://api.rd.services/platform/contacts/fields');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                                                                                    
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                            
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        $authorization,
        'Accept: application/json',
        'Accept-Language: en-US,en;q=0.5',
        'Content-Type: application/json',                                                                             
        'Content-Length: ')                                                              
    );                                                                                                                   
                                                                                                                    
    $result = curl_exec($ch);
    curl_close($ch);
    echo  $result;
}

sendData();
?>