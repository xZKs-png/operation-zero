<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Operation Zero: Jogo de ação, atualizações e comunidade.">
    <meta name="keywords" content="Operation Zero, jogo, atualizações, ranking, comunidade">
    <meta name="author" content="Sua Equipe">
    <link rel="preload" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" as="style">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="admin/css/style.css" media="screen">
    <title>Operation Zero</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="admin/img/OZ_logo.png" alt="Logo do Operation Zero">
            <a href="index.php">Operation Zero</a>
        </div>
        <div class="titulo-game">
            Operation Zero
        </div>
        <div class="controle-de-usuario">
            <a href="#"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
            <a href="logout.php">Sair</a>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="#">JOGO</a>
                    <ul class="submenu">
                        <li><a href="admin/menu_submenu/jogo/guia_iniciante.html">GUIA INICIANTE</a></li>
                        <li><a href="admin/menu_submenu/jogo/guia_interme.html">GUIA INTERMED.</a></li>
                        <li><a href="admin/menu_submenu/jogo/guia_avancado.html">GUIA AVANÇADO</a></li>
                        <li><a href="#">FORÇA-TAREFA</a></li>
                    </ul>
                </li>
                <li><a href="#">NOTÍCIAS</a>
                    <ul class="submenu">
                        <li><a href="admin/menu_submenu/noticias/noticias.html">NOTÍCIAS</a></li>
                        <li><a href="admin/menu_submenu/noticias/eventos.html">EVENTOS</a></li>
                        <li><a href="admin/menu_submenu/noticias/atualizacoes.html">ATUALIZAÇÕES</a></li>
                        <li><a href="admin/menu_submenu/noticias/blog.html">BLOG</a></li>
                        <li><a href="admin/menu_submenu/noticias/status_do_servico.html">STATUS DO SERVIÇO</a></li>
                    </ul>
                </li>
                <li><a href="#">RANKING</a>
                    <ul class="submenu">
                        <li><a href="admin/menu_submenu/ranking/individual.html">INDIVIDUAL</a></li>
                        <li><a href="admin/menu_submenu/ranking/cla.html">CLÃ</a></li>
                        <li><a href="admin/menu_submenu/ranking/meu_ranking.html">MEU RANKING</a></li>
                    </ul>
                </li>
                <li><a href="#">ARSENAIS</a>
                    <ul class="submenu">
                        <li><a href="admin/menu_submenu/arsenais/colecionaveis.html">COLECIONÁVEIS</a></li>
                        <li><a href="admin/menu_submenu/arsenais/ranking.html">RANKING</a></li>
                        <li><a href="admin/menu_submenu/arsenais/meu_arsenal.html">MEU ARSENAL</a></li>
                    </ul>
                </li>
                <li><a href="#">COMUNIDADE</a>
                    <ul class="submenu">
                        <li><a href="#">FÓRUM</a></li>
                        <li><a href="https://web.facebook.com/operationzero" target="_blank" rel="noopener noreferrer">FACEBOOK</a></li>
                        <li><a href="https://x.com/i/flow/login" target="_blank" rel="noopener noreferrer">TWITTER</a></li>
                        <li><a href="https://www.youtube.com/operationzero" target="_blank" rel="noopener noreferrer">YOUTUBE</a></li>
                        <li><a href="#">TWITCH</a></li>
                        <li><a href="#">DISCORD</a></li>
                    </ul>
                </li>
                <li><a href="#">CAMPEONATOS</a>
                    <ul class="submenu">
                        <li><a href="#">CNOZ</a></li>
                        <li><a href="#">OZWC</a></li>
                        <li><a href="#">OZIC</a></li>
                    </ul>
                </li>
                <li><a href="#">DOWNLOAD</a>
                    <ul class="submenu">
                        <li><a href="#">JOGO</a></li>
                        <li><a href="#">WALLPAPER</a></li>
                    </ul>
                </li>
                <li><a href="#">SUPORTE</a>
                    <ul class="submenu">
                        <li><a href="#">REGRAS DO JOGO</a></li>
                        <li><a href="#">SUPORTE DO JOGO</a></li>
                        <li><a href="#">BANIMENTOS</a></li>
                    </ul>
                </li>
                <li><a href="#">LOJA</a>
                    <ul class="submenu">
                        <li><a href="#">ATIVAR PINCODE</a></li>
                        <li><a href="#">COMPRAR MOEDAS</a></li>
                        <li><a href="#">MERCADO ELITE</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div id="divBusca">
        <form action="/search" method="POST">
            <input type="text" id="txtBusca" name="query" placeholder="Buscar..." required>
            <button type="submit" id="btnBusca"><i class='bx bx-search-alt-2'></i></button>
        </form>
    </div>

    <div class="container">
        <div class="box-column">
            <div class="box-header">
                <h5><a href="#">Atualizações <span class="num">862</span></a></h5>
                <a href="#" class="add-btn" title="Ver todas as atualizações">+</a>
            </div>
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="red">Game</span>
                    <p>Nova atualização adicionando novas armas, mapas e efetuando ajustes</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>10 Out</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 5318</li>
                    </div>
                </div>
            </a>
    
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="orange">Otimização</span>
                    <p>Otimização de alguns mapas corrigidos, otimizado a taxa de disparo de algumas</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>20 set</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 3412</li>
                    </div>
                </div>
            </a>
    
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="blueviolet">Correções</span>
                    <p>Correção do novo sistema de Mute, bugs de armas e mapas</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>03 Set</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 1604</li>
                    </div>
                </div>
            </a>
        </div>
    
        <div class="box-column">
            <div class="box-header">
                <h5><a href="#">Eventos <span class="num">1726</span></a></h5>
                <li><a href="#" class="add-btn" title="Ver todas as atualizações">+</a></li>
            </div>
    
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="blue">Rank Up</span>
                    <p>Equipem as armas do Arsenal OZNC 2021 e recebam um bônus de EXP & GOLD</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>15 Out</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 7391</li>
                    </div>
                </div>
            </a>
    
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="green">Recompensa Diária</span>
                    <p>Abram o jogo, acessem um servidor e acumulem minutos em partidas para</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>05 Out</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 2403</li>
                    </div>
                </div>
            </a>
    
            <a href="#" class="box-link">
                <div class="box">
                    <span class="tag" id="yellow">Logue e Ganhe</span>
                    <p>Abram o jogo e acessem um servidor para receberem Tokens no Logue e Ganhe</p>
                    <div class="box-footer">
                        <div class="date">
                            <li><i class='bx bxs-calendar'></i></li>
                            <span>8 May</span>
                        </div>
                        <li class="comment"><i class='bx bxs-comment'></i> 2832</li>
                    </div>
                </div>
            </a>
        </div
    </div>
    <div id="forumSections">
    <div class="header-container">
        <h3>Discussões Gerais</h3>
        <button class="botao-criar-topico" onclick="openTopicForm()">Criar Tópico</button>
    </div>
    
    <div id="topicForm" style="display:none;">
        <h2>Criar Novo Tópico</h2>
        <form method="POST" action="topics.php">
            <input type="text" name="titulo" placeholder="Título do Tópico" required>
            <textarea name="conteudo" placeholder="Conteúdo do Tópico" required></textarea>
            <button type="submit" name="criar_topico">Criar Tópico</button>
        </form>
        <button onclick="closeTopicForm()">Cancelar</button>
    </div>

    <section class="section">
        <h2 class="section-title">
            <img src="admin/img/banner1.png" alt="Discussão Geral" class="section-icon">
            Discussão Geral
        </h2>
        <p>Aqui você discute sobre assuntos gerais do jogo. Pesquise nas outras áreas antes de criar um tópico aqui e seja bem-vindo!</p>
        <p class="moderators">Moderadores: Gamemaster, Moderador, Colaborador</p>
        <div class="stats">
            <div>TÓPICOS: <span id="generalTopicsCount">22813</span></div>
            <div>MENSAGENS: <span id="generalMessagesCount">95429</span></div>
            <div class="latest-message">ÚLTIMA MENSAGEM: "PLASE WAIT" por HaChMaNn em 16 Nov 2024, 10:02</div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">
            <img src="admin/img/banner2.png" alt="Dicas e Tutoriais" class="section-icon">
            Dicas e Tutoriais
        </h2>
        <p>Aqui os usuários com maior conhecimento disponibilizam sua experiência com os demais. Leia sempre e fique por dentro!</p>
        <p class="moderators">Moderadores: Gamemaster, Moderador, Colaborador</p>
        <div class="stats">
            <div>TÓPICOS: <span id="tutorialsTopicsCount">441</span></div>
            <div>MENSAGENS: <span id="tutorialsMessagesCount">1892</span></div>
            <div class="latest-message">ÚLTIMA MENSAGEM: "Guia fácil para noobs..." por Takeo_Takeshi em 12 Nov 2024, 16:33</div>
        </div>
    </section>
</div>

<script>
    function openTopicForm() {
        document.getElementById('topicForm').style.display = 'block';
    }

    function closeTopicForm() {
        document.getElementById('topicForm').style.display = 'none';
    }
</script>

    <script src="admin/js/main.js"></script>
</body>
</html>