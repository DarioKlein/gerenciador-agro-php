<?php
class Conexao
{
  private static $dbname = 'agro';
  private static $dbHost = 'db';
  private static $dbUsuario = 'user';
  private static $dbSenha = 'user';

  private static $cont = null;

  public static function conectar()
  {
    if (self::$cont == null) {
      try {
        self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbname, self::$dbUsuario, self::$dbSenha);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }
    return self::$cont;
  }

  public static function desconectar()
  {
    self::$cont = null;
    return self::$cont;
  }
}
