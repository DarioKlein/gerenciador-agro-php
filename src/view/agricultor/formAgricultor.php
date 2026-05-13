<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <title>Cadastrar Agricultor</title>
</head>

<body class="bg-blue-100">
  <form class="w-screen h-screen flex flex-col items-center justify-center gap-6" action="cadastrarAgricultor.php" method="POST">
    <fieldset class="flex flex-col gap-5 w-[500px] bg-white p-8 rounded-xl shadow-[5px_5px_1px_theme(colors.blue.300)]">
      <h1 class="text-white flex justify-center items-center gap-6 text-3xl font-bold mb-5 bg-blue-500 p-2 rounded shadow-[5px_5px_1px_theme(colors.blue.300)]"><i class="fa-solid fa-user-plus"></i> Cadastrar Agricultor</h1>
      <div class="flex flex-col gap-1">
        <label for="nome" class="flex gap-2 items-center text-gray-700"><i class="fa-regular fa-id-badge text-xl text-blue-500"></i>
          <span>Nome:</span></label>
        <input class="h-9 border border-gray-500 px-2 text-gray-700 rounded focus:outline-none focus:border-blue-500 shadow-[2px_2px_1px_theme(colors.gray.500)]" type="text" id="nome" name="nome" placeholder="Digite o seu nome...">
      </div>
      <div class="flex flex-col gap-1">
        <label for="cidade" class="flex gap-2 items-center text-gray-700"><i class="fa-solid fa-city text-xl text-blue-500"></i>
          <span class="mt-1">Cidade:</span></label>
        <input class="h-9 border border-gray-500 px-2  text-gray-700 rounded focus:outline-none focus:border-blue-500 shadow-[2px_2px_1px_theme(colors.gray.500)]" type="text" id="cidade" name="cidade" placeholder="Digite o nome da sua cidade...">
      </div>
      <div class="flex flex-col gap-1">
        <label for="bairro" class="flex gap-2 items-center text-gray-700"><i class="fa-solid fa-house text-xl text-blue-500"></i>
          <span class="mt-1">Bairro:</span></label>
        <input class="h-9 border border-gray-500 px-2 text-gray-700 rounded focus:outline-none focus:border-blue-500 shadow-[2px_2px_1px_theme(colors.gray.500)]" type="text" id="bairro" name="bairro" placeholder="Digite o nome do seu bairro...">
      </div>
      <div class="flex flex-col gap-1">
        <label for="idade" class="flex gap-2 items-center text-gray-700"><i class="fa-solid fa-calendar-days text-xl text-blue-500"></i>
          <span class="mt-1">Idade:</span></label>
        <input class="h-9 border border-gray-500 px-2 text-gray-700 rounded focus:outline-none focus:border-blue-500 shadow-[2px_2px_1px_theme(colors.gray.500)] 
        [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none
        " type="number" id="idade" name="idade" placeholder="Digite a sua idade...">
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Cadastrar</button>
    </fieldset>
  </form>
</body>

</html>