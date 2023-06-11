<?php
include "conexao.php";

$conn->select_db('POSTGET');

switch($_GET["verificacoes"]){
    case 1:
        $dateInicio = $_GET['dateInicio'];
        $dateFim = $_GET['dateFim'];

        $sql = "SELECT * FROM TRANSACAO WHERE DATAPAGAMENTO BETWEEN '$dateInicio' AND '$dateFim'";
    break;
    case 2:
        $valueVer = $_GET['value_ver'];

        $sql = "SELECT * FROM TRANSACAO WHERE VALOR < $valueVer";
        break;
    case 3:
        $formaPagamentoVer = $_GET['formaPagamento_ver'];

        $sql = "SELECT * FROM TRANSACAO WHERE formapagamento LIKE '$formaPagamentoVer'";
        break;
    case 4:
        $receivedSendVer = $_GET['receivedSend_ver'];

        $sql = "SELECT * FROM TRANSACAO WHERE recebidaenviada LIKE '$receivedSendVer'";
        break;
};

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p class='result'> Valor: " . $row["valor"]. "- Forma de Pagamento: " . $row["formapagamento"]. "- Data de Pagamento: " . $row["datapagamento"]. "- Recebida/Enviada: " . $row["recebidaenviada"]. "</p>";
    }
} else {
    echo "<p class='result'>Não há registro na tabela.<p>";
}
?>