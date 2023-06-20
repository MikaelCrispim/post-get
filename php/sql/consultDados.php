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
    echo "<div class='consult'>
    <table class='tab'>
            <thread>
                <tr>
                    <th>Responsável</th>
                    <th>Valor</th>
                    <th>Forma de pagamento</th>
                    <th>Data de pagamento</th>
                    <th>Recebida/Enviada</th>
                <tr>
            </thread>
            <tbody>";
    while($row = mysqli_fetch_assoc($result)) {
        $data = $row["datapagamento"];
        $date = new DateTime($data);
        
        echo "<tr>
            <td>" . $row["nome"]. "</td>
            <td> R$ " . number_format($row["valor"], 2, ',', '.'). "</td>
            <td>" . $row["formapagamento"]."</td>
            <td>" . $date->format('d/m/Y')."</td>
            <td>". $row["recebidaenviada"]."</td>
            </tr>";
    }
    echo "</tbody>
    </table>";
} else {
    echo "
    <div class='consult'>
    <p class='result' style='color:#fff;'>Não há registro na tabela.<p>";
}
?>