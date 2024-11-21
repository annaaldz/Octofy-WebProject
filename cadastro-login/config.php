<?php

  // informações para acessar o projeto no supabase 
  
  function baseUri($method ='') {
    return 'https://disysetqrhcdnknnpxny.supabase.co/auth/v1/' . $method;
  }

  function getHeader() {
      $headers = [
        'Content-Type' => 'application/json',
        'apikey' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImRpc3lzZXRxcmhjZG5rbm5weG55Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MjYwMDEzOTIsImV4cCI6MjA0MTU3NzM5Mn0.HByHe4U7w9dWs6bO6NztpsZtvsJNqUnzlZw4VaFyg-I'
      ];
      return $headers;
  }
?>