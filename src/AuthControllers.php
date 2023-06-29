<?php 

declare(strict_types=1);

use Firebase\JWT\JWT;

require './vendor/autoload.php';

class AuthController 
{
    public function verify(array $data): string | array
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../.env');
        $dotenv->load();

        $email = $_ENV['USER_NAME'];
        $pass = $_ENV['PASSWORD'];

        if ($data['email'] === $email && $data['password'] === $pass) {

            $secretKey  = $_ENV['SECRET_KEY'];
            $issuedAt   = new DateTimeImmutable();
            $expire     = $issuedAt->modify('+6 minutes')->getTimestamp();      // Add 60 seconds
            $serverName = "http://127.0.0.1:8000/";
            $username   = $data['email'];                                           // Retrieved from filtered POST data

        $data = [
            'iat'  => $issuedAt->getTimestamp(),         // Issued at: time when the token was generated
            'iss'  => $serverName,                       // Issuer
            'nbf'  => $issuedAt->getTimestamp(),         // Not before
            'exp'  => $expire,                           // Expire
            'userName' => $username                     // User name
        ];

        return JWT::encode(
            $data,
            $secretKey,
            'HS512'
        );
    }  else { 
        $result = ['status' => http_response_code(422)];
        return $result;
    }
}
}

    