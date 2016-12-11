<?php

class AplAdmin
{
    public static function getArticles(){
        $content = '<strong>Lorem Ipsum</strong> é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.<br><br>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do \'de Finibus Bonorum et Malorum\' (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, \'Lorem Ipsum dolor sit amet...\' vem de uma linha na seção 1.10.32.<br><br>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de \'de Finibus Bonorum et Malorum\' de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.';
        $articles = [];

        $articles[] = new Article( 1,
            'Flamengo tem novo artilheiro',
            $content,
            'http://imguol.com/c/esporte/39/2016/09/20/o-atacante-emerson-sheik-durante-treino-do-flamengo-1474412535965_615x300.jpg',
            'Flamengo fez um investimento promissor no novo atacante de 18 anos',
            1795,
            45,
            '5 min' );

        $articles[] = new Article( 2,
            'Corinthians na Europa',
            $content,
            'http://imguol.com/c/esporte/b1/2016/11/28/fabio-carille-conversa-com-oswaldo-de-oliveira-1480358216984_615x300.jpg',
            'Corinthians está participando da copa Audi junto a outros grandes clubes da Europa',
            2589,
            122,
            '3 min' );

        $articles[] = new Article( 3,
            'Artilheiro francês no Brasil',
            $content,
            'http://cdn.record.xl.pt/2016-12/img_770x433$2016_12_09_13_50_34_1195022.jpg',
            'De férias em Manguinhos - ES. Zidane Pensa em comprar casa no balneário',
            1688,
            26,
            '8 min' );

        $articles[] = new Article( 4,
            'Novo técnico no coxa',
            $content,
            'http://www.gazetadopovo.com.br/ra/grande/Pub/GP/p4/2016/12/10/Esportes/Imagens/Cortadas/treino%20coxa%20458%20albari%20rosa-8045-kmcE-U201285752750k9C-1024x683@GP-Web.jpg', 'Curitiba contratou um novo técnico para a temporada 2017 do brasileirão',
            2130,
            49,
            '4 min' );

        $articles[] = new Article( 5,
            'Santos tenta negociação milhonária',
            $content,
            'http://imguol.com/c/esporte/1f/2016/03/27/camarones-joel-do-santos-comemora-seu-gol-contra-o-sao-paulo-em-classico-na-vila-belmiro-pelo-campeonato-paulista-1459120201592_615x300.jpg', 'Santos tenta vender suas duas novas jóias por valores ainda não praticados no Brasil',
            7559,
            655,
            '6 min' );

        $articles[] = new Article( 6,
            'Desportiva Ferroviária inícia trabalhos',
            $content,
            'http://s2.glbimg.com/PyquA5F-53Mx7K6x1yEnJYoCXzU=/322x0:1132x1080/300x400/s.glbimg.com/es/ge/f/original/2016/12/09/15387360_1367078876676185_200371169_o.jpg', 'A Desportiva Ferroviária iniciou os trabalhos para a temporada 2017 do Capixabão',
            988,
            6,
            '2 min' );

        return $articles;
    }
}