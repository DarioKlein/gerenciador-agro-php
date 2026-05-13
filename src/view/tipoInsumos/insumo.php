<?php
include_once __DIR__ . '/../../dal/conexao.php';
$sql = "SELECT * FROM tipoinsumo";
$conexao = DAL\Conexao::conectar();
$dados = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela Tipos de Insumos</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-700">
  <main class="w-dvw h-dvh flex flex-col items-center p-8">
    <div class="flex flex-col gap-5 justify-center items-center">
      <h2 class="text-3xl font-bold text-slate-100">Tabela: Tipos de Insumos</h2>
      <table class="border border-slate-300 bg-slate-100 rounded overflow-hidden">
        <tr class="h-8">
          <th class="w-28 border">ID</th>
          <th class="w-72 border">Nome</th>
        </tr>
        <?php foreach ($dados as $item) { ?>
          <tr class="h-8 even:bg-slate-50 odd:bg-slate-100">
            <td class="text-center border "><?php echo $item['id']; ?></td>
            <td class="text-center border "><?php echo $item['descricao']; ?></td>
          </tr>
        <?php } ?>
    </div>
  </main>
</body>

</html>