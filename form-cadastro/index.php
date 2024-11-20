<?php
  
require 'config.php';
require 'vendor/autoload.php';

$msg = '';

// quando o form for submetido, pega 'email' e 'password'
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = (isset($_POST['email']) ? $_POST['email'] :null);
  $password = (isset($_POST['password']) ? $_POST['password'] :null);

  $client = new GuzzleHttp\Client();

  $body = [
    'email' => $email,
    'password' => $password
  ];
  try{
    $response = $client->post(
      baseUri('signup'),
        [
          'headers' => getHeader(),
          'body' => json_encode($body)
        ]
    );
    $data = json_decode($response->getBody());
    if(isset($data->id)){
        $msg = 'Usuário ' . $data->email . 'criado com sucesso';      
    }
    else{
        $msg = 'Erro ao criar usuário';
    }
  }
  catch(GuzzleHttp\Exception\RequestException $e){
    if($e->hasResponse()){
      if($e->getResponse()->getStatusCode() == '400'){
        $msg = 'Email já cadastrado';
      }
      if($e->getResponse()->getStatusCode() == '422'){
        $res = json_decode($e->getResponse()->getBody());
        $msg =$res->msg;
      }
    }
  }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <title>Cadastro</title>
  </head>
  <body>
      <div class="form-image">
        <!-- <div class="form-group"> -->
          <div class="back-image">
            <a href="/Octofy/Octofy/Lading page/landing.html"><img src="assets\img\icons8-voltar-50.png" alt=""></a>
            
          </div>
          <div class="semi-title">
            <h1>
              Venha com a gente e não seja que nem 70% da população que tem 1000
              dívidas!!
            </h1>
          </div>
          <div class="form-gif">
            <img src="assets/img/bouncy-security-with-fingerprint-verification.gif" />
          </div>
        <!-- </div> -->
        </div>
        
      <div class="form">
        <form action="index.php" method="POST">
          <div class="form-header">
            <div class="title">
              <h1>Cadastro</h1>
              <p><?php echo $msg ?></p>
            </div>
            

          
            <div class="input-box">
              <label for="email"></label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="E-mail"
                required
              />
            </div>
            <div class="input-box">
              <label for="password"></label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Senha"
                required
              />
              
            </div>
            
          </div>
          <div class="login">
            <div class="login-info">
              <h5>Já tenho uma conta <a href="http://localhost/Octofy/Octofy/login/index.php">Login</a></h5>
            </div>
            <div class="login-button">
              <a href="/Octofy/Octofy/Metas/metas.html"><button type="submit" name="submit" id="submit" class="btn_cad">Cadastre-se</button></a>
            </div>
          </div>
            <div class="use-term">
              <h6>
                Ao se cadastrar você aceita nossos
                <a href="/Octofy/Octofy/Termos de uso/termos.html">Termos de Uso</a> 
                <br>
                e
                <a href="/Octofy/Octofy/Politica de privacidade/politica.html">Politíca de Privacidade</a>
              </h6>
            </div>
            
          </div>
        </form>
        <button class="invi"><a href="/Octofy/Octofy/Metas/metas.html">Cadastro</a></button>
      </div>
    </div>
  </body>
</html>
