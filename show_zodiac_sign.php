<?php include('layouts/header.php'); ?>

<?php
// Receber a data de nascimento do usuário
$data_nascimento = $_POST['data_nascimento'];

// Carregar o arquivo XML
$signos = simplexml_load_file("signos.xml");

// Extrair o Dia e o mês da data de nascimento
list($ano, $mes, $dia) = explode('-', $data_nascimento);
$data_usuario = $dia . '/' . $mes;

// Função para verificar se a data do usuário está entre duas datas
function data_entre($data, $dataInicio, $dataFim) {
    $data = DateTime::createFromFormat('d/m', $data);
    $inicio = DateTime::createFromFormat('d/m', $dataInicio);
    $fim = DateTime::createFromFormat('d/m', $dataFim);

    if ($inicio > $fim) {
        return $data >= $inicio || $data <= $fim;
    } else {
        return $data >= $inicio && $data <= $fim;
    }
}

// Verificar cada signo para encontrar o correspondente
$signoEncontrado = null;
foreach ($signos->signo as $signo) {
    if (data_entre($data_usuario, $signo->dataInicio, $signo->dataFim)) {
        $signoEncontrado = $signo;
        break;
    }
}

// Exibir o resultado
if ($signoEncontrado): ?>
    <div class="signo-container">
        <h1 class="signo-nome"><?= $signoEncontrado->signoNome; ?></h1>
        <p class="signo-descricao"><?= $signoEncontrado->descricao; ?></p>
    </div>
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
<?php else: ?>
    <p class="text-center mt-5">Desculpe, não conseguimos encontrar seu signo.</p>
    <div class="text-center">
        <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
<?php endif; ?>

</div>
</body>
</html>
