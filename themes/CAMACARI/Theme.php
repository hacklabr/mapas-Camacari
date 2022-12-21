<?php

namespace CAMACARI;

use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;
use MapasCulturais\i;

class Theme extends BaseV1\Theme
{

    protected static function _getTexts()
    {
        $app = App::i();
        $self = $app->view;
        $url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        $url_search_events = $self->searchEventsUrl;
        $url_search_projects = $self->searchProjectsUrl;

        return [
            'site: name' => 'Mapa Cultual de Camaçari',
            //    'site: description' => App::i()->config['app.siteDescription'],
            'site: in the region' => 'na CAMAÇARI',
            'site: of the region' => 'da CAMAÇARI',
            'site: owner' => 'CAMAÇARI',
            'site: by the site owner' => 'pela CAMAÇARI',
            //
            'home: title' => i::__("Bem-vind@!"),
            'home: abbreviation' => "plataforma Mapas de Camaçari",
            'home: colabore' => i::__('Participe'),
            'home: welcome' =>  "Bem vindo ao <strong>Mapa Cultural de Camaçari!</strong> <br><br> Essa é uma a plataforma livre, gratuita e colaborativa de mapeamento da Secretaria Municipal de Cultura de Camaçari. Isto quer dizer que o próprio cidadão, agente cultural, seja ele produtor, artista, espaço/instituição cultural ou investidor, é colaborador e responsável pelas informações culturais do nosso município.<br><br> É muito fácil participar! Basta fazer o seu cadastro e começar a inserir suas informações, as informações de seu grupo ou instituição. Essas informações serão disponibilizadas para todo Brasil, criando oportunidades para nossos artistas. A partir deste cadastro, fica mais fácil participar dos editais de fomento às artes da Prefeitura e também divulgar seus eventos, espaços ou projetos.<br><br> Os dados que você adiciona neste Mapa são de fundamental importância na construção de um Sistema de Indicadores Culturais de Camaçari, que é uma base importante para definir as políticas públicas para o desenvolvimento da Cultura em nossa cidade.<br><br> E para você, que é amante da cultura, ficou mais fácil se programar e conhecer as opções culturais que a cidade oferece: shows musicais, espetáculos teatrais e de dança, festivais, manifestações populares, entre outras.",
            //            'home: events' => "Você pode pesquisar eventos culturais nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
            //            'home: agents' => "Você pode colaborar na gestão da cultura com suas próprias informações, preenchendo seu perfil de agente cultural. Neste espaço, estão registrados artistas, gestores e produtores; uma rede de atores envolvidos na cena cultural da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, bandas instituições, empresas, etc.), além de associar ao seu perfil eventos e espaços culturais com divulgação gratuita.",
            //            'home: spaces' => "Procure por espaços culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades artísticas e culturais.",
            //            'home: projects' => "Reúne projetos culturais ou agrupa eventos de todos os tipos. Neste espaço, você encontra leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.",
            //            'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/master/documentation/docs/mc_config_api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',
            //
            //            'search: verified results' => 'Resultados Verificados',
            //            'search: verified' => "Verificados"
        ];
    }

    static function getThemeFolder()
    {
        return __DIR__;
    }

    function _init()
    {
        parent::_init();
        $app = App::i();
        $app->hook('view.render(<<*>>):before', function () use ($app) {
            $this->_publishAssets();
        });

        // impede o download automático dos arquivos privados
        $app->hook('GET(file.privateFile).headers', function (&$headers) {
            if (isset($headers['Content-Disposition']) && strpos($headers['Content-Disposition'], '.pdf')) {
                unset($headers['Content-Description']);
                $headers['Content-Disposition'] = str_replace('attachment; ', '', $headers['Content-Disposition']);
            }
        });
    }

    protected function _publishAssets()
    {
        $this->asset('img/logo-site.png', false);
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }
}
