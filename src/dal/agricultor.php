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
}
