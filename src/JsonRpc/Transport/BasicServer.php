<?php
namespace JsonRpc\Transport;


class BasicServer
{

  public function receive()
  {
    return @file_get_contents('php://input');
  }


  public function reply($data)
  {
    header('Content-type: application/json; charset=utf-8');
    echo $data;
    exit;
  }


}

