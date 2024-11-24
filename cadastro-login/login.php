<?php
  
  session_start();
  require 'config.php';
  require 'vendor/autoload.php';
  
  $msg = '';
  
  // Verifica se o formulário foi submetido usando o método POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = isset($_POST['email']) ? $_POST['email'] : null;
      $password = isset($_POST['password']) ? $_POST['password'] : null;
  
      $client = new GuzzleHttp\Client();
      $body = [
          'email' => $email,
          'password' => $password
      ];
  
      try {
          $response = $client->post(
              baseUri('token?grant_type=password'),
              [
                  'headers' => getHeader(),
                  'body' => json_encode($body)
              ]
          );
  
          // Decodifique a resposta da API
          $data = json_decode($response->getBody());
  
          // Exiba o conteúdo de $data para verificar a resposta
          var_dump($data);
  
          // Verifique se o token foi retornado corretamente
          if (isset($data->access_token)) {
              $_SESSION['token'] = $data->access_token;
              $_SESSION['email'] = $data->user->email;
              header("Location: trilhas.php");
              exit();
          } else {
              $msg = 'Erro ao autenticar usuário';
          }
      } catch (GuzzleHttp\Exception\RequestException $e) {
          if ($e->hasResponse()) {
              $statusCode = $e->getResponse()->getStatusCode();
  
              // Exibe status e corpo da resposta para identificar o erro
              var_dump($statusCode, $e->getResponse()->getBody()->getContents());
  
              if ($statusCode == '400') {
                  $msg = 'Email e/ou senha incorretos';
              } elseif ($statusCode == '422') {
                  $res = json_decode($e->getResponse()->getBody());
                  $msg = $res->msg ?? 'Erro desconhecido';
              } else {
                  $msg = 'Erro inesperado ao se comunicar com o servidor';
              }
          } else {
              $msg = 'Erro de conexão com a API';
          }
      }
  }
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/register.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <title>Login</title>
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
        <form action="login.php" method="POST">
          <div class="form-header">
            <div class="title">
              <h1>Login</h1>
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
            
            <div class="login-button">
              <button type="submit" name="submit" id="submit" class="btn_cad">Login</button>  
            </div>
          </div>
            
            
          </div>
        </form>
        <button class="invi"><a href="/Octofy/Octofy/Metas/metas.html">Login</a></button>
      </div>
    </div>
  </body>
</html>
