<?

namespace DAL;

include_once(__DIR__ . '/conexao.php');
include_once(__DIR__ . '/../model/agricultor.php');

class Agricultor
{
  public function select()
  {
    $sql = "SELECT * FROM agricultor";
    $conexao = Conexao::conectar();
    $dados = $conexao->query($sql);

    $lista = [];

    foreach ($dados as $item) {
      $agricultor = new \MODEL\Agricultor(
        $item['id'],
        $item['nome'],
        $item['cidade'],
        $item['bairro'],
        $item['idade']
      );
      $lista[] = $agricultor;
    }
    return $lista;
  }

  public function insert(\MODEL\Agricultor $agricultor)
  {
    $query = "INSERT INTO agricultor (nome, cidade, bairro, idade) VALUES ('{$agricultor->getNome()}', '{$agricultor->getCidade()}', '{$agricultor->getBairro()}', {$agricultor->getIdade()})";
    $conexao = Conexao::conectar();
    $result = $conexao->query($query);
    return $result;
  }
}
