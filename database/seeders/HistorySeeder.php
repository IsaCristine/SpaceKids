<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Exemplo para criar uma história no seeder
        History::factory()->create([
            'title' => 'titulo',

            'category' => 'categoria',
            
            'paragraph1' => 'Escreva o parágrafo 1 aqui',
            
            'paragraph2' => 'Escreva o parágrafo 2 aqui',
            
            'paragraph3' => 'Escreva o parágrafo 3 aqui',
            
            'image' => 'nome da imagem na pasta public/img',
            
            'origin' => 'Origem da História (Autor, popular, etc)'
        ]);
        */

        /*Histórias sobre o Espaço:--------------------*/        
        History::factory()->create([
            'title' => 'O Sol',

            'category' => 'space',

            'paragraph1' => 'Há muito tempo, no frio e escuro espaço, existia
            um rio invisível. Esse rio não era feito de água, mas de gás. Esse gás
            era o hidrogênio.',

            'paragraph2' => 'Certo dia, vendo que tudo era muito escuro e frio, a 
            dona Gravidade, cercada pelo rio invisível, resolveu fazer uma festa.
            Todo o rio foi convidado e, quando ele ficou bem pertinho, o frio foi embora e 
            todos sentiram calor!',

            'paragraph3' => 'Tudo ficou tão quentinho que o rio invisível começou a 
            girar e a brilhar! Ele virou uma enorme bola brilhante: o Sol! 
            Agora é tudo mais divertido, porque temos o Sol para brincar com a gente!',
            
            'image' => 'the_sun.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'Estrela Cadente',

            'category' => 'space',
            
            'paragraph1' => 'Era uma vez, no frio e escuro espaço, uma pedrinha. Ela não era brilhante e não tinha amigos. Todos 
            os outros astros tinham amigos, mas ela não. Ela ficava muito triste. 
            Mas um dia, ela conheceu um amigo muito especial: o Sol!',
            
            'paragraph2' => 'O Sol era muito brilhante e quente. Ele era muito legal e 
            sempre brincava com a pedrinha. Eles se tornaram grandes amigos e 
            passaram a brincar juntos todos os dias.',
            
            'paragraph3' => 'Eles brincavam de pular, de esconder e de... correr! 
            Até hoje, a pedrinha brinca de correr com o Sol. Ela corre tão feliz e tão 
            rápido que, quando ela passa, parece que ela está brilhando e caindo do céu. 
            Ela corre por muitos lugares, mas sempre volta para brincar com seu amigo Sol!',
            
            'image' => 'shooting_star.gif',
            
            'origin' => 'Autores: Isabelly Oliveira e Copilot, o Brabo'
        ]);

        History::factory()->create([
            'title' => 'O Buraco Negro',

            'category' => 'space',
            
            'paragraph1' => 'Era uma vez, uma grande e velha estrela muito comilona. 
            Um dia, a estrela cresceu tanto que explodiu e parou de brilhar!',
            
            'paragraph2' => 'Mesmo sem seu brilho, a velhinha continuava com muita 
            fome. Ela não sabia o que fazer, porque não tinha mais comida. Então, ela teve uma ideia: 
            ela iria engolir tudo que encontrasse pela frente!',
            
            'paragraph3' => 'Ela engoliu muitas coisas, mas nunca parava de sentir fome. 
            Ela engoliu planetas, estrelas, galáxias, até que, um dia, ela engoliu uma 
            galáxia inteira! Ela ficou tão cheia que, enfim, decidiu descansar. Ela adormeceu e adormeceu, 
            até que um dia, desapareceu.',
            
            'image' => 'black_hole.gif',
            
            'origin' => 'Autores: Isabelly Oliveira e Copilot'
        ]);

        History::factory()->create([
            'title' => 'O Sistema Solar',

            'category' => 'space',
            
            'paragraph1' => 'Há muito tempo, no frio e escuro espaço, existia um rio invisível. Esse rio não era feito de água, mas de gás. Esse gás era o hidrogênio.',

            'paragraph2' => 'Certo dia, vendo que tudo era muito escuro e frio, a 
            dona Gravidade, cercada pelo rio invisível, resolveu fazer uma festa.
            Todo o rio foi convidado e, quando ele ficou bem pertinho, o frio foi embora e 
            todos sentiram calor!',

            'paragraph3' => 'Tudo ficou tão quentinho que o rio invisível começou a 
            girar e a brilhar! Ele virou uma enorme bola brilhante: o Sol! 
            Agora é tudo mais divertido, porque temos o Sol para brincar com a gente!',
            
            'image' => 'solar_system.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'O Universo',

            'category' => 'space',
            
            'paragraph1' => 'Há muito tempo, no frio e escuro espaço, existia um rio invisível. Esse rio não era feito de água, mas de gás. Esse gás era o hidrogênio.',

            'paragraph2' => 'Certo dia, vendo que tudo era muito escuro e frio, a 
            dona Gravidade, cercada pelo rio invisível, resolveu fazer uma festa.
            Todo o rio foi convidado e, quando ele ficou bem pertinho, o frio foi embora e 
            todos sentiram calor!',

            'paragraph3' => 'Tudo ficou tão quentinho que o rio invisível começou a 
            girar e a brilhar! Ele virou uma enorme bola brilhante: uma estrela! 
            Assim, o Universo começou a brilhar e a ficar mais divertido!',
            
            'image' => 'universe.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'Júpiter',

            'category' => 'space',
            
            'paragraph1' => 'Em nosso Sistema Solar, há muitos planetas. O maior deles é Júpiter. Ele é muito grande e pesado. Ele é tão grande que, 
            se você colocasse todos os outros planetas do Sistema Solar dentro dele, ainda sobraria espaço!',

            'paragraph2' => 'Júpiter gosta de brincar e tem um enorme bambolê a sua volta! Ele também tem muitos amigos: os satélites. Eles são como 
            pequenas luas que giram ao redor de Júpter. Eles são tão grandes que, se você colocasse todos os outros satélites do Sistema Solar dentro deles, 
            ainda sobraria espaço!',

            'paragraph3' => 'Júpiter também tem muitas nuvens. Elas são tão grandes que, se você colocasse todas as nuvens do Sistema Solar dentro delas, 
            ainda sobraria espaço!',
            
            'image' => 'jupiter.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);
        /*--------------------------------------------*/  


        /*Histórias sobre a Terra:--------------------*/  
        History::factory()->create([
            'title' => 'Aquecimento Global',

            'category' => 'earth',
            
            'paragraph1' => 'Para deixar o Planeta Terra quentinho, existe uma 
            máquina muito especial: o Sol! Ele é muito quente e brilha muito forte. 
            O Sol lança bolinhas de calor na Terra e a Terra guarda algumas dessas bolinhas 
            e as usa para aquecer o Planeta.',
            
            'paragraph2' => 'Com o tempo, o ser humano também quis aquecer a Terra e brincar 
            com o Sol. Ele inventou máquinas que fazem fogo e que aquecem a Terra. Então, o Planeta 
            começou a ficar muito quente.',
            
            'paragraph3' => 'As árvores e os animais não gostaram muito disso. O calor muito forte 
            destrói suas casinhas e bagunça todo o Planeta Terra. Será que o ser humano vai perceber 
            que o Planeta está ficando muito quente? Será que ele vai parar de brincar com fogo?
            Será que ele vai cuidar da nossa casinha?',
            
            'image' => 'global_warming.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'A Chuva',

            'category' => 'earth',
            
            'paragraph1' => 'Era uma vez, uma pequena gotinha de água que vivia na nuvem. 
            Ela era muito feliz, porque tinha muitos amigos. Todos os dias, ela brincava 
            com eles e se divertia muito.',
            
            'paragraph2' => 'Certo dia, ela teve uma ideia: a gotinha queria brincar de abraçar. 
            Toda vez que o senhor Vento levava a gotinha para um de seus amigos, ela abraçava bem forte. 
            Em um certo momento, a gotinha ficou muito cansada de brincar e caiu na terra com todos os 
            seus amiguinhos!',
            
            'paragraph3' => 'Ela ficou muito feliz, porque agora ela tinha novos amiguinhos e, 
            quando o Sol chegasse, ela iria levar todos os seus novos amigos para brincar com os outros!',
            
            'image' => 'the_rain.gif',
            
            'origin' => 'Autor: Copilot'
        ]);

        History::factory()->create([
            'title' => 'A Plantinha',

            'category' => 'earth',
            
            'paragraph1' => 'Era uma vez, uma pequena sementinha que vivia na terrinha a cochilar. 
            Um dia, ela despertou e começou a germinar.',
            
            'paragraph2' => 'Ela crescia e crescia, até que um dia, ela se tornou uma linda 
            plantinha. Ela era tão verdinha...! Mas tadinha, ela estava tão sozinha...',
            
            'paragraph3' => 'Então a plantinha pediu ajuda para o Sol e ele a ajudou a 
            se vestir com uma linda flor. Ela era tão linda que pequenas criaturinhas íam 
            visitá-la para brincar! E, quando saíam de lá, levavam consigo uma sementinha da 
            plantinha, para plantar em outra terrinha e vê-la germinar!',
            
            'image' => 'the_plant.gif',
            
            'origin' => 'Origem da História (Autor, popular, etc)'
        ]);

        History::factory()->create([
            'title' => 'O Magma',

            'category' => 'earth',
            
            'paragraph1' => 'Bem escondidinho no Planeta Terra, existe algo muito 
            vermelho: o Magma. Ele é muito quente e cheio de fogo. Ele fica 
            escondido dentro da Terra, mas às vezes ele sai e faz um buraco 
            no chão. Quando isso acontece, ele é chamado de vulcão.',
            
            'paragraph2' => 'Um dia, o Magma resolveu sair e fazer um buraco no chão. 
            Quando ele estava saindo, ele viu que haviam muitos magmas querendo sair pelo 
            mesmo buraquinho. Então, ele resolveu fazer um buraco maior para que todos os 
            magmas pudessem sair. E assim, ele fez um vulcão!',

            'paragraph3' => 'Agora, o magma pode sair e fazer 
            muitas coisas. Ele pode fazer um monte de pedrinhas, que são chamadas de 
            cinzas. Ele pode fazer um monte de fogo, que é chamado de lava. E ele pode 
            fazer um monte de fumaça, que é chamada de gás. E, quando ele faz tudo isso, 
            ele faz um vulcão!',

            'image' => 'magma.gif',

            'origin' => 'Autor: Isabelly Oliveira e Copilot'
        ]);

        History::factory()->create([
            'title' => 'O Fogo',

            'category' => 'earth',
            
            'paragraph1' => 'Era uma vez, um fogo que vivia na floresta. Ele era muito 
            bravo e gostava de brincar. Ele gostava tanto de brincar, 
            que ele brincava com fogo todos os dias.',
            
            'paragraph2' => 'Um dia, ele brincou com uma plantinha e acabou a queimando. 
            Ele não conseguiu apagar o fogo e, quando ele percebeu, o fogo já tinha 
            queimado tudo!',
            
            'paragraph3' => 'O fogo queimou a floresta inteira e, quando ele percebeu, 
            ele ficou muito triste. Ele não gostou de brincar com quem não era fogo e, desde então, 
            ele nunca mais brincou.',
            
            'image' => 'fire.gif',
            
            'origin' => 'Autor: Isabelly Oliveira e Copilot'
        ]);

        History::factory()->create([
            'title' => 'O Vento',

            'category' => 'earth',
            
            'paragraph1' => 'Era uma vez, um vento que vivia na floresta. Ele era muito 
            alegre e gostava de brincar. Ele gostava tanto de brincar, 
            que ele brincava todos os dias.',
            
            'paragraph2' => 'Um dia, ele brincou com uma plantinha e acabou a derrubando. 
            Ele não conseguiu segurar a plantinha e, quando ele percebeu, a plantinha já tinha 
            caído!',
            
            'paragraph3' => 'Quando ele percebeu, ele ficou muito triste. 
            Assim, ele aprendeu que, às vezes, brincar de soprar forte demais pode ser 
            perigoso.',
            
            'image' => 'wind.gif',
            
            'origin' => 'Autor: Isabelly Oliveira e Copilot'
        ]);

        History::factory()->create([
            'title' => 'O Mar',

            'category' => 'earth',

            'paragraph1' => 'Certo dia, a chuva resolveu fazer uma festa. Ela convidou 
            todos os seus amigos para brincar. Todos os amigos da chuva foram e começaram a dançar .
            A chuva estava tão feliz que não parava de cantar. Ela cantava tão alto que, 
            quando ela percebeu, o mar estava cheio de água!',
            
            'paragraph2' => 'A festa estava tão divertida que a chuva não viu o tempo passar. 
            Assim, ela criou um mar. O mar é muito grande e tem muita água. Ele é tão grande que 
            ele pode até engolir um navio inteiro!',

            'paragraph3' => 'Mas navios, ela não queria naufragar. Então a chuva chamou o Sol 
            para as águas povoar. Trabalhando juntinhos, o mar se encheu de peixinhos, e no meio 
            da festa eles começaram a dançar.',

            'image' => 'sea.gif',

            'origin' => 'Autor: Isabelly Oliveira e Copilot'
        ]);
        /*--------------------------------------------*/ 


        /*Histórias de Fantasia--:--------------------*/
        History::factory()->create([
            'title' => 'O Dragão',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez, um dragão muito bravo que vivia no fundo de um 
            lago. Ele era muito grande e tinha muitas escamas. Ele era muito bravo, porque 
            ninguém nunca o tinha visto.',
            
            'paragraph2' => 'Um dia, um pescador foi pescar no lago e, quando estava 
            pescando, viu o dragão. Ele ficou muito assustado e correu para contar para 
            todos os seus amigos.',
            
            'paragraph3' => 'Todos os seus amigos foram correndo para ver o dragão mas, 
            quando eles chegaram lá, o dragão já tinha sumido. O pescador ficou muito contente, 
            porque ele tinha visto um dragão!',
            
            'image' => 'the_dragon.gif',
            
            'origin' => 'Autor: Copilot'
        ]);  

        History::factory()->create([
            'title' => 'Gato Espacial',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez um gato, que vivia saltando por todos os lados. 
            Certo dia, ele viu um foguete e quis ir com ele. O gatinho pulou e pulou, até que 
            no foguete ele entrou.',
            
            'paragraph2' => 'Quando olhou pela janela, ele viu a Terra! "Que grande!", ele pensou. 
            Ele ficou muito feliz e pulou e pulou, até que a Terra para trás ficou.',

            'paragraph3' => 'O gatinho então saltou para fora, e viu que o Espaço era daora! 
            Ele pulou e pulou, e nunca mais o gatinho parou.',

            'image' => 'space_cat.gif',

            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'O Fotógrafo Alienígena',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez, um fotógrafo alienígena que vivia em um planeta 
            muito distante. Ele era muito curioso e queria conhecer a Terra.',
            
            'paragraph2' => 'Certo dia, o pequeno alienígena entrou eu seu foguete e voou para 
            a Terra. Quando ele chegou, ele ficou muito feliz, porque a Terra era muito bonita! 
            Haviam tantas coisas bonitas para se fotografar, que ele nem sabia por onde começar!',
            
            'paragraph3' => 'Fotografou então o mar, as nuvens e as estrelas no céu. Fotografou 
            as flores, os bichinhos e os grandes vulcões! Depois disso, o pequeno alienígena 
            voltou para seu planeta e mostrou as fotos para todos os seus amigos! 
            Eles ficaram muito felizes, porque agora também podiam ver a beleza da Terra!',
            
            'image' => 'et.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'O Pássaro',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez, um pássaro que vivia em uma árvore. Ele era muito 
            feliz, porque tinha muitos amigos. Certo dia, ele viu um foguete e quis ir com ele.',
            
            'paragraph2' => 'O pássaro pulou e pulou, até que no foguete ele entrou. Quando olhou 
            pela janela, ele viu a Terra! "Que grande!", ele pensou. Ele ficou muito feliz e pulou 
            e pulou, até que a Terra para trás ficou.',
            
            'paragraph3' => 'O pássaro então saltou para fora, e viu que o Espaço era daora! 
            Ele pulou e pulou, e nunca mais o pássaro voltou.',
            
            'image' => 'space_bird.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'O Pequeno Alienígena',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez, um pequeno alienígena que vivia em um planeta muito 
            distante. Ele era muito curioso e queria conhecer a Terra.',
            
            'paragraph2' => 'Certo dia, o pequeno alienígena entrou eu seu foguete e voou para a 
            Terra. Quando ele chegou, ele ficou muito feliz, porque a Terra era muito bonita! 
            Haviam tantas coisas bonitas para se fotografar, que ele nem sabia por onde começar!',
            
            'paragraph3' => 'Fotografou então o mar, as nuvens e as estrelas no céu. Fotografou 
            as flores, os bichinhos e os grandes vulcões! Depois disso, o pequeno alienígena 
            voltou para seu planeta e mostrou as fotos para todos os seus amigos! 
            Eles ficaram muito felizes, porque agora também podiam ver a beleza da Terra!',
            
            'image' => 'alien.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);

        History::factory()->create([
            'title' => 'O Pequeno Unicórnio',

            'category' => 'fantasy',
            
            'paragraph1' => 'Era uma vez, um pequeno unicórnio que vivia em um planeta feito de 
            algodão-doce. Ele era muito alegre e queria fazer uma festa.',
            
            'paragraph2' => 'Certo dia, o pequeno unicórnio decidiu comemorar o seu 
            aniversário com uma grande festa! Ele convidou todos os seus amigos, e eles vieram. 
            Eles dançaram, cantaram e comeram muita comida gostosa!',
            
            'paragraph3' => 'E então, o pequeno unicórnio ficou muito feliz, porque todos os 
            seus amigos estavam felizes também! Eles se divertiram muito, e nunca mais o 
            pequeno unicórnio parou de sorrir.',
            
            'image' => 'unicorn.gif',
            
            'origin' => 'Autor: Isabelly Oliveira'
        ]);
        /*--------------------------------------------*/  


        History::factory()->count(200)->create();
    }
}