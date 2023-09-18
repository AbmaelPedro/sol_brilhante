<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Pagamento de Aluguel</title>
</head>
<body>
    <?php


        $bdconect = pg_connect("host=localhost port=5432 dbname=condominio user=postgres password=12345");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero_ap = $_POST["numero_ap"];
        $numero_bloco = $_POST["numero_bloco"];
        $data_pagamento = $_POST["data_pagamento"];
        $referente = $_POST["referencia_pagamento"];
        $ano = $_POST["referencia_pagamento"];
        $valor_pagamento = $_POST["valor_pagamento"];
        $metodo_pagamento = $_POST["metodo_pagamento"];
        
        echo "Número do Apartamento: " . $numero_ap . "<br>";
        echo "Número do Bloco: " . $numero_bloco . "<br>";
        echo "Data do Pagamento: " . $data_pagamento . "<br>";
        echo "Referência do Pagamento: " . $referencia_pagamento . "<br>";
        echo "Valor do Pagamento: " . $valor_pagamento . "<br>";
        echo "Método de Pagamento: " . $metodo_pagamento . "<br>";
        
        if ($metodo_pagamento === 'pix') {
            $id_pix = $_POST["id_pix"];
            echo "ID do PIX: " . $id_pix . "<br>";
        }
    }
    ?>

    <h1>Formulário de Pagamento de Aluguel</h1>
    <form action="process.php" method="post">
        <label>Número do Apartamento:</label>
        <input type="text" name="numero_ap" required><br><br>
        
        <label>Número do Bloco:</label>
        <input type="text" name="numero_bloco" required><br><br>
        
        <label>Data do Pagamento:</label>
        <input type="date" name="data_pagamento" required><br><br>
        
        <label>referente:</label>
        <input type="text" name="referencia_pagamento" required><br><br>

        <label>ano:</label>
        <input type="text" name="referencia_pagamento" required><br><br>
        
        <label>Valor do Pagamento:</label>
        <input type="number" name="valor_pagamento" step="0.01" required><br><br>
        
        <label>Método de Pagamento:</label>
        <select name="metodo_pagamento" required>
            <option value="pix">PIX</option>
            <option value="outro">Outro</option>
        </select><br><br>
        
        <div id="campo_pix" style="display: none;">
            <label>5 últimos caracteres do ID do PIX:</label>
            <input type="text" name="id_pix" pattern="[a-zA-Z0-9]{5}" title="Digite os 5 últimos caracteres do ID do PIX"><br><br>
        </div>
        
        <input type="submit" value="Enviar Pagamento">
    </form>

    <script>
        document.querySelector('select[name="metodo_pagamento"]').addEventListener('change', function() {
            if (this.value === 'pix') {
                document.getElementById('campo_pix').style.display = 'block';
            } else {
                document.getElementById('campo_pix').style.display = 'none';
            }
        });
    </script>
</body>
</html>
