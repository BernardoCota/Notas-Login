<?php
    include "toponotas.php";
?>

<main id="fundoprincipal">
        <div id="areatitulonota">
            <img id="noteicon" src="../img/notanovaicon.svg" alt="notaicon">
            <strong>
                <h1 id="h1nota">Notas</h1>
            </strong>
            <strong>
                <h3 id="contagemnotas"></h3>
            </strong>
        </div>
    
        <div id="areanota">
            <input type="text" name="titulonota" id="titulonota" placeholder="Insira o Título da sua Nota" required>
            <div>
                <textarea name="nota" id="nota" cols="30" rows="10"></textarea>
                <img id="saveicon" onclick="salvarNota()" src="../img/saveicon.svg" alt="">
            </div>
        </div>

        <!---->
        <div id="notasSalvas" style="display: none;">
            <strong>
                <h2 id="tituloNotasSalvas">Notas Salvas</h2>
            </strong>
            <ul id="listaNotas"></ul>
        </div>
    </main>

    <script src="../script/script.js"></script>
</body>
</html>