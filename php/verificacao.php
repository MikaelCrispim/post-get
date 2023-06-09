<?php
if(isset($_GET['verificacoes'])){
    switch ($_GET['verificacoes']) {
        case 1:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados em qual período:</label>
            <br><input type=date name=dateInicio><br>
            <input type=date name=dateFim><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>";
            break;
        case 2:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados até qual quantia?</label>
            <br><input type=number placeholder=Valor name=value_ver step=any min=0><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>";
            break;
        case 3:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados com qual forma de pagamento?</label>
            <select name=formaPagamento_ver>
                <option value=boleto_ver>Boleto</option>
                <option value=pix_ver>Pix</option>
                <option value=cartao_ver>Cartão de crédito/débito</option>
                <option value=transferencia_ver>Transferência Bancária</option>
            </select><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>
            ";
            break;
        case 4:
            echo"
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram enviados ou recebidos?</label>
            <select name=receivedSend_ver>
                <option value=1>Enviados</option>
                <option value=0>Recebidos</option>
            </select><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>
            ";
            break;
    }

    if(isset($_GET['back'])){
        header("location: ../index.php");
    }
}
?>