<?php
    include "topo.php";
?>
<main>

<div class="container">
    <div class="row herosection">
        <div class="col">
            <h1>Capture suas ideias, organize sua vida.</h1>
            <p>Com nossa ferramenta intuitiva, você pode gerenciar suas notas de forma rápida e eficiente,
                mantendo tudo que é importante ao seu alcance.</p>
            <button type="button" class="btn btn-primary herobtn"><a href="form.html">Cadastre-se</a></button>
        </div>
        <div class="col">
            <img id="printhero" src="img/print notas.PNG" alt="">
        </div>
    </div>
</div>

</main>
<hr>
<section class="container cardsection">
<div class="row carddiv container">
    <div class="card cards" style="width: 18rem;">
        <img src="img/simbolo-de-verificacao-de-tempo.png" class="card-img-top imgcard" alt="...">
        <div class="card-body">
            <h5 class="card-title">Melhoria na gestão do tempo</h5>
            <p class="card-text">Organize suas tarefas e compromissos de forma eficiente, ajudando você a
                maximizar seu tempo e alcançar seus objetivos mais rapidamente.</p>
            <a href="#" class="btn btn-primary contatobtn saibamais">Saiba Mais</a>
        </div>
    </div>
    <div class="card cards" style="width: 18rem;">
        <img src="img/gerenciamento-de-projetos.png" class="card-img-top imgcard" alt="...">
        <div class="card-body">
            <h5 class="card-title">Organização das ideias</h5>
            <p class="card-text">Mantenha suas ideias e pensamentos bem estruturados, reduzindo a ansiedade e
                permitindo que você se concentre no que realmente importa.</p>
            <a href="#" class="btn btn-primary contatobtn saibamais">Saiba Mais</a>
        </div>
    </div>
    <div class="card cards" style="width: 18rem;">
        <img src="img/acessibilidade.png" class="card-img-top imgcard" alt="...">
        <div class="card-body">
            <h5 class="card-title">Acessibilidade rápida e fácil a todas as notas</h5>
            <p class="card-text">Tenha todas as suas anotações à mão, onde e quando precisar, facilitando o
                acesso a informações importantes a qualquer momento.</p>
            <a href="#" class="btn btn-primary contatobtn saibamais">Saiba Mais</a>
        </div>
    </div>
</div>
</section>

<section class="container funcionalidades">
<div class="row areacard">
    <div class="card cardfunc col">
        <h3>Troca de Temas</h3>
        <p>Personalize sua experiência com a opção de alternar entre os temas claro e escuro. A troca de tema é
            simples e instantânea, permitindo que você ajuste o visual da aplicação ao seu gosto e às suas
            condições de luz. O tema escuro ajuda a reduzir o cansaço visual em ambientes com pouca luz,
            enquanto o tema claro é ideal para locais bem iluminados.</p>
    </div>
    <img class="imgfunc" src="img/Brazuca - Screen 4.png" alt="">
</div>
<div class="row areacard">
    <div class="card cardfunc col">
        <h3>Contagem de Notas</h3>
        <p>Mantenha-se organizado e acompanhe seu progresso com a contagem automática de notas. Esta
            funcionalidade permite que você saiba exatamente quantas notas já criou, ajudando a monitorar sua
            produtividade e a ter uma visão clara do volume de informações armazenadas. Nunca mais perca o
            controle das suas anotações.</p>
    </div>
    <img class="imgfunc" src="img/pexels-mikhail-nilov-6963017.jpg" alt="">
</div>

</section>


<?php
include "adm/rodape.php";
?>