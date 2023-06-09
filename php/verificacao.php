<?php
if(isset($_GET['verificacoes'])){
    switch ($_GET['verificacoes']) {
        case 1:
            echo "
            <form action=? method=get>
            <label>Escolha a data entre a data:</label>
            <br><input type=date name=dateInicio><br>
            <input type=date name=dateFim><br>
            <input type=submit value=Filtrar><input type=submit value=Back>
            </form>";
            break;
        case 2:
            break;
        default:
            # code...
            break;
    }
}
?>