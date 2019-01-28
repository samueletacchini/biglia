<?php

if (isset($_POST["modifica"]) && $_POST["modifica"] == 0) {
    //sto salvando



    for ($i = count($games4->games4) - 1; $i > count($games4->games4) - 4; $i--) {

        echo '<tr><td><button class="form-control" style="background-color: #FEFE9a; color: #ae1f1b" onclick="modifica(' . $i . ')">Modifica</button></td>';

        echo "<td>" . $games4->games4[$i]->date . "</td>";

        if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
            echo "<td><b> " . $games4->games4[$i]->player2->name . "<a1 class='trattino1'> - </a1><br class='trattino2'>" . $games4->games4[$i]->player1->name . "</b></td>";
            echo "<td><b>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}</b>  - {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</td>";
            echo "<td>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</td>";
        } else {
            echo "<td>" . $games4->games4[$i]->player2->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player1->name . "</td>";
            echo "<td>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}  - <b> {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</b></td>";
            echo "<td><b>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</b></td>";
        }
        echo "</tr>";
    }
} else {
    //sto modificando

    for ($i = count($games4->games4) - 1; $i > count($games4->games4) - 4; $i--) {

        echo '<tr><td><button class="form-control" style="background-color: #FEFE9a; color: #ae1f1b" onclick="modifica(' . $i . ')">salva</button></td>';

        echo "<td>" . $games4->games4[$i]->date . "</td>";

        if ($games4->games4[$i]->result1 > $games4->games4[$i]->result2) {
            echo "<td><b> " . $games4->games4[$i]->player2->name . "<a1 class='trattino1'> - </a1><br class='trattino2'>" . $games4->games4[$i]->player1->name . "</b></td>";
            echo "<td><b>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}</b>  - {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</td>";
            echo "<td>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</td>";
        } else {
            echo "<td>" . $games4->games4[$i]->player2->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player1->name . "</td>";
            echo "<td>({$games4->games4[$i]->defResult1}) {$games4->games4[$i]->result1}  - <b> {$games4->games4[$i]->result2} ({$games4->games4[$i]->defResult2})</b></td>";
            echo "<td><b>" . $games4->games4[$i]->player4->name . " <a1 class='trattino1'> - </a1><br class='trattino2'> " . $games4->games4[$i]->player3->name . "</b></td>";
        }
        echo "</tr>";
    }
}
?>