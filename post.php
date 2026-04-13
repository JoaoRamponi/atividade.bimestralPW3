<?php
header("Content-Type: application/json; charset=utf-8");

$titulo = $_POST['titulo'] ?? '';
$data = $_POST['data'] ?? '';
$local = $_POST['local'] ?? '';

if (empty($titulo) || empty($data) || empty($local)) {
    http_response_code(400);
    exit;
}

$responce = [
   "status" => "sucesso",
   "metodo" => "POST",
   "tema" => "Agenda de Eventos da ETEC",
   "mensagem" => "Evento cadastrado com sucesso.",
   "evento" => [
      "id" => 4,
      "titulo" => $titulo,
      "data" => $data,
      "local" => $local
   ]
];

echo json_encode($responce, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);