<?php
/*
In questo script vedremo quali sono gli elementi
che compongono un file PHP. Questo ad esempio è un
commento multilinea.
*/
// questo invece è un commento su singola riga
# questo è un altro tipo di commento
$nome = "Alessio ";
echo "Il mio nome è " . $nome;
function stampa_nome($nome) {
    echo "<strong>Ciao " . $nome . "</strong>";
}
stampa_nome($nome);
?>