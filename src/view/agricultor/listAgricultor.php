<?php
include_once __DIR__ . '/../../dal/agricultor.php';
include_once __DIR__ . '/../../model/agricultor.php';

$dalAgricultor = new \DAL\Agricultor();
$lista = $dalAgricultor->select();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela Agricultores</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-700">
  <main class="w-dvw h-dvh flex flex-col items-center p-8">
    <div class="flex flex-col gap-5 justify-center items-center">
      <h2 class="text-3xl font-bold text-slate-100">Tabela: Agricultores</h2>
      <div class="w-full flex">
        <a href="formAgricultor.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-[2px_2px_1px_theme(colors.blue.300)]">Cadastrar Novo Agricultor</a>
      </div>
      <table class="border border-slate-300 bg-slate-100 rounded overflow-hidden">
        <tr class="h-8">
          <th class="w-28 border">ID</th>
          <th class="w-72 border">Nome</th>
          <th class="w-72 border">Cidade</th>
          <th class="w-72 border">Bairro</th>
          <th class="w-28 border">Idade</th>
        </tr>
        <?php foreach ($lista as $item) { ?>
          <tr class="h-8 even:bg-slate-50 odd:bg-slate-100">
            <td class="text-center border "><?php echo $item->getId(); ?></td>
            <td class="text-center border "><?php echo $item->getNome(); ?></td>
            <td class="text-center border "><?php echo $item->getCidade(); ?></td>
            <td class="text-center border "><?php echo $item->getBairro(); ?></td>
            <td class="text-center border "><?php echo $item->getIdade(); ?></td>
          </tr>
        <?php } ?>
    </div>
  </main>
</body>

</html>

</html>