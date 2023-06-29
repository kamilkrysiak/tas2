<?php 

require_once './src/AuthControllers.php';
require_once './libs/Smarty.class.php';


if (isset($_POST)) { 
    $data = file_get_contents("php://input");
    $user = json_decode($data, true); 

    if ($user['email'] === '' || $user['password'] === '') {
        echo http_response_code(422);
    } else  { 
        $dataArr = ["email" => $user['email'], "password" => $user['password']];

        $auth = new AuthController;
        $result = $auth->verify($dataArr);

        if (isset($result['status'])) { 
            echo http_response_code(422);
        } else { 
            $data = ["data" => json_encode($result)];
            echo $result;
        }
        
        
    }
 }

