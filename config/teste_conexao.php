<?php
echo "<h3>Teste de Conexão com Banco</h3>";

// testa se o arquivo existe
if(!file_exists(__DIR__ . '/config/connection.php')) {
    die("Arquivo connection.php NÃO encontrado!");
}

echo "✅ Arquivo connection.php encontrado<br>";

// tenta incluir
include_once("config/connection.php");
echo "✅ Arquivo incluído sem erros<br>";

// testa a conexão
try {
    $stmt = $conn->query("SELECT COUNT(*) as total FROM usuarios");
    $result = $stmt->fetch();
    echo "✅ Conexão com banco funcionando!<br>";
    echo "📊 Total de usuários no banco: " . $result['total'];
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>