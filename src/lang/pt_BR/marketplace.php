<?php

return [
    'title' => 'Marketplace',
    'subtitle' => 'Descubra integrações e extensões para potencializar seu email marketing.',
    'active_integrations' => 'Integrações Ativas',
    'active' => 'Ativo',
    'coming_soon' => 'Em breve',
    'soon' => 'Em breve',
    'banner_title' => 'Mais Integrações em Breve',
    'banner_desc' => 'Estamos constantemente trabalhando para adicionar novas integrações que ajudem você a expandir seu negócio.',
    'features' => [
        'one_click' => 'Instalação com um clique',
        'auto_sync' => 'Sincronização automática',
        'no_code' => 'Configuração sem código',
    ],
    'categories' => [
        'ecommerce' => [
            'title' => 'E-commerce',
            'desc' => 'Conecte sua loja',
        ],
        'crm' => [
            'title' => 'CRM',
            'desc' => 'Relacionamento com clientes',
        ],
        'forms' => [
            'title' => 'Formulários e Pesquisas',
            'desc' => 'Geração de leads',
        ],
        'automation' => [
            'title' => 'Automação',
            'desc' => 'Conectar fluxos de trabalho',
        ],
        'payments' => [
            'title' => 'Pagamentos',
            'desc' => 'Processar pagamentos',
        ],
        'analytics' => [
            'title' => 'Análises',
            'desc' => 'Acompanhar desempenho',
        ],
        'ai' => [
            'title' => 'IA e Pesquisa',
            'desc' => 'Ferramentas de inteligência',
        ],
    ],
    'request_title' => 'Não encontrou o que precisa?',
    'request_desc' => 'Diga-nos qual integração você gostaria de ver a seguir. Priorizamos nosso roadmap com base no feedback dos usuários.',
    'request_button' => 'Solicitar Integração',
    'request_modal_title' => 'Solicitar Integração',
    'request_success_title' => 'Solicitação recebida!',
    'request_success_desc' => 'Obrigado pelo seu feedback. Avisaremos quando esta integração estiver disponível.',
    'request_integration_name' => 'Nome da Integração',
    'request_integration_name_placeholder' => 'ex.: Shopify, Salesforce...',
    'request_description' => 'Descrição (Opcional)',
    'request_description_placeholder' => 'Como você gostaria de usar esta integração?',
    'request_priority' => 'Prioridade',
    'priority_low' => 'Baixa',
    'priority_normal' => 'Normal',
    'priority_high' => 'Alta',
    'request_submitted_as' => 'Enviado como',
    'request_submit' => 'Enviar Solicitação',
    'request_error' => 'Falha ao enviar a solicitação. Por favor, tente novamente.',

    'wordpress' => [
        'title' => 'WordPress',
        'hero_title' => 'WordPress',
        'hero_subtitle' => 'Formulários de inscrição profissionais e bloqueio de conteúdo para blogueiros e criadores de conteúdo no WordPress.',
        'hero_description' => 'O plugin NetSendo para WordPress é uma solução completa para blogueiros e criadores de conteúdo. Adicione formulários de inscrição profissionais à sua newsletter, limite a visibilidade de artigos apenas para assinantes e construa sua lista de emails diretamente do WordPress.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'forms' => [
                'title' => 'Formulários de Inscrição',
                'description' => 'Formulários de inscrição profissionais em vários estilos: inline, minimal, card.',
            ],
            'gating' => [
                'title' => 'Bloqueio de Conteúdo',
                'description' => 'Restrinja o acesso ao conteúdo apenas para assinantes.',
            ],
            'blocks' => [
                'title' => 'Blocos Gutenberg',
                'description' => 'Blocos dedicados para fácil edição de conteúdo.',
            ],
            'widget' => [
                'title' => 'Widget de Barra Lateral',
                'description' => 'Widget de formulário de inscrição pronto para qualquer barra lateral.',
            ],
            'gdpr' => [
                'title' => 'Pronto para LGPD/GDPR',
                'description' => 'Caixa de consentimento LGPD/GDPR integrada com texto configurável.',
            ],
            'settings' => [
                'title' => 'Configuração Fácil',
                'description' => 'Painel de configurações simples no admin do WordPress.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'download' => [
                'title' => 'Baixar Plugin',
                'description' => 'Baixe o arquivo zip do plugin para o seu computador.',
            ],
            'install' => [
                'title' => 'Instalar',
                'description' => 'Faça upload e ative o plugin no admin do WordPress.',
            ],
            'configure' => [
                'title' => 'Configurar',
                'description' => 'Insira sua chave de API e URL nas configurações do plugin.',
            ],
            'add_forms' => [
                'title' => 'Adicionar Formulários',
                'description' => 'Use shortcodes ou blocos para adicionar formulários às suas postagens.',
            ],
        ],
        'download_button' => 'Baixar Plugin',
        'shortcodes_title' => 'Shortcodes',
        'shortcodes' => [
            'form_basic' => 'Formulário básico',
            'form_styled' => 'Formulário estilizado',
            'gate_percentage' => 'Bloquear conteúdo após X%',
            'gate_subscribers' => 'Bloquear apenas para assinantes',
        ],
        'api_config_title' => 'Configuração de API',
        'api_url_label' => 'URL da API',
        'api_url_help' => 'Copie esta URL para as configurações do plugin.',
        'api_key_label' => 'Chave de API',
        'api_key_desc' => 'Você precisa de uma chave de API para conectar o plugin.',
        'manage_api_keys' => 'Gerenciar Chaves de API',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'wp' => 'WordPress 5.8 ou superior',
            'php' => 'PHP 7.4 ou superior',
            'account' => 'Conta NetSendo ativa',
        ],
        'content_gate_types_title' => 'Tipos de Bloqueio de Conteúdo',
        'content_gate_types' => [
            'percentage_desc' => 'Ocultar conteúdo após a leitura de uma determinada porcentagem.',
            'subscribers_only_desc' => 'Conteúdo visível apenas para assinantes ativos.',
            'logged_in_desc' => 'Conteúdo visível apenas para usuários logados.',
        ],
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação WordPress',
        'lists_link' => 'Gerenciar Listas',
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação ou entre em contato com o suporte.',
        'documentation_button' => 'Documentação',
    ],

    'woocommerce' => [
        'title' => 'WooCommerce',
        'hero_title' => 'Integração WooCommerce',
        'hero_subtitle' => 'Conecte sua loja e aumente as vendas.',
        'hero_description' => 'Integre sua loja WooCommerce ao NetSendo perfeitamente. Sincronize clientes automaticamente, recupere carrinhos abandonados e acompanhe a receita.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'auto_subscribe' => [
                'title' => 'Inscrição Automática',
                'description' => 'Adicione clientes automaticamente às suas listas de emails durante o checkout.',
            ],
            'cart_recovery' => [
                'title' => 'Recuperação de Carrinho',
                'description' => 'Recupere vendas perdidas com emails automáticos de carrinho abandonado.',
            ],
            'product_settings' => [
                'title' => 'Sincronização de Produtos',
                'description' => 'Mapeie produtos WooCommerce para tags e listas do NetSendo.',
            ],
            'external_pages' => [
                'title' => 'Páginas Externas',
                'description' => 'Rastreie visitas e eventos nas páginas da sua loja.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'download' => [
                'title' => 'Baixar',
                'description' => 'Obtenha o arquivo do plugin.',
            ],
            'install' => [
                'title' => 'Instalar',
                'description' => 'Faça upload para WordPress/WooCommerce.',
            ],
            'configure' => [
                'title' => 'Configurar',
                'description' => 'Conectar API.',
            ],
            'lists' => [
                'title' => 'Mapear Listas',
                'description' => 'Selecionar listas para clientes.',
            ],
        ],
        'download_button' => 'Baixar Plugin',
        'api_config_title' => 'Configuração de API',
        'api_url_label' => 'URL da API',
        'api_url_help' => 'Endpoint para webhooks.',
        'api_key_label' => 'Chave de API',
        'api_key_desc' => 'Gere uma chave para sua loja.',
        'manage_api_keys' => 'Gerenciar Chaves de API',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'wp' => 'WordPress 5.8+',
            'wc' => 'WooCommerce 6.0+',
            'php' => 'PHP 7.4+',
            'account' => 'Conta NetSendo',
        ],
        'docs_link' => 'Documentação WooCommerce',
        'lists_link' => 'Gerenciar Listas',
        'funnels_link' => 'Funis de Vendas',
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Leia o guia ou entre em contato com o suporte.',
        'documentation_button' => 'Documentação',
    ],

    'shopify' => [
        'title' => 'Shopify',
        'hero_title' => 'Integração Shopify',
        'hero_subtitle' => 'Conecte sua loja Shopify e sincronize clientes automaticamente.',
        'hero_description' => 'Integre sua loja Shopify ao NetSendo usando webhooks. Adicione automaticamente clientes às suas listas de emails quando eles fizerem pedidos, criarem contas ou concluírem compras.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'auto_subscribe' => [
                'title' => 'Inscrição Automática',
                'description' => 'Adicione clientes automaticamente às listas de emails quando efetuarem compras.',
            ],
            'customer_sync' => [
                'title' => 'Sincronização de Clientes',
                'description' => 'Sincronize novos registros de clientes diretamente para suas listas.',
            ],
            'order_tracking' => [
                'title' => 'Rastreamento de Pedidos',
                'description' => 'Armazene detalhes de pedidos como campos personalizados para segmentação.',
            ],
            'real_time' => [
                'title' => 'Atualizações em Tempo Real',
                'description' => 'Notificações instantâneas via webhook quando eventos ocorrem.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'api_key' => [
                'title' => 'Gerar Chave de API',
                'description' => 'Crie uma chave de API nas configurações do NetSendo.',
            ],
            'shopify_admin' => [
                'title' => 'Abrir Admin Shopify',
                'description' => 'Acesse Configurações > Notificações > Webhooks.',
            ],
            'create_webhook' => [
                'title' => 'Criar Webhook',
                'description' => 'Adicione a URL do webhook e selecione os eventos a rastrear.',
            ],
            'test' => [
                'title' => 'Testar Conexão',
                'description' => 'Faça um pedido de teste para verificar a integração.',
            ],
        ],
        'webhook_config_title' => 'Configuração de Webhook',
        'webhook_url_label' => 'URL do Webhook',
        'webhook_url_help' => 'Adicione esta URL nas configurações de webhook do Shopify.',
        'api_key_label' => 'Chave de API',
        'api_key_desc' => 'Inclua sua chave de API como token Bearer nos cabeçalhos do webhook.',
        'manage_api_keys' => 'Gerenciar Chaves de API',
        'supported_events' => 'Eventos Suportados',
        'list_id_note_title' => 'Importante: ID de Lista Obrigatório',
        'list_id_note_desc' => 'Adicione netsendo_list_id ao payload do webhook ou use o Shopify Flow para incluí-lo.',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'store' => 'Loja Shopify ativa',
            'account' => 'Conta NetSendo',
            'api_key' => 'Chave de API para autenticação',
        ],
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação de Webhooks Shopify',
        'lists_link' => 'Gerenciar Listas',
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação ou entre em contato com o suporte.',
        'documentation_button' => 'Documentação',
    ],

    'gmail' => [
        'title' => 'Gmail',
        'hero_title' => 'Integração Gmail',
        'hero_subtitle' => 'Conecte suas contas Gmail para gerenciar caixas de entrada de email.',
        'hero_description' => 'Integre o Gmail ao NetSendo para usar suas contas de email Google como caixas de envio. O OAuth 2.0 oferece autenticação segura sem armazenar senhas.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'imap' => [
                'title' => 'Acesso IMAP',
                'description' => 'Leia e sincronize emails da sua caixa de entrada Gmail.',
            ],
            'smtp' => [
                'title' => 'Envio SMTP',
                'description' => 'Envie emails diretamente pelos servidores do Gmail.',
            ],
            'oauth' => [
                'title' => 'OAuth 2.0',
                'description' => 'Autenticação segura sem armazenar senhas.',
            ],
            'tracking' => [
                'title' => 'Rastreamento de Emails',
                'description' => 'Rastreie aberturas e cliques nos emails enviados.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'google_cloud' => [
                'title' => 'Criar Projeto no Google Cloud',
                'description' => 'Acesse o Google Cloud Console e crie um novo projeto.',
            ],
            'enable_api' => [
                'title' => 'Ativar API do Gmail',
                'description' => 'No seu projeto, ative a API do Gmail na Biblioteca de APIs.',
            ],
            'oauth' => [
                'title' => 'Configurar Consentimento OAuth',
                'description' => 'Configure a tela de consentimento OAuth com os escopos necessários.',
            ],
            'configure' => [
                'title' => 'Adicionar Credenciais ao NetSendo',
                'description' => 'Insira o Client ID e o Client Secret em Configurações → Integrações.',
            ],
            'authorize' => [
                'title' => 'Autorizar Conta Gmail',
                'description' => 'Conecte sua conta Gmail pelo fluxo OAuth.',
            ],
        ],
        'go_to_settings' => 'Ir para Contas de Email',
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação da API do Gmail',
        'manage_accounts' => 'Gerenciar Contas de Email',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'google_account' => 'Conta Google',
            'cloud_project' => 'Projeto Google Cloud',
            'oauth_credentials' => 'Credenciais OAuth 2.0',
            'netsendo_account' => 'Conta NetSendo',
        ],
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação para instruções detalhadas de configuração.',
        'documentation_button' => 'Documentação',
    ],

    'google_calendar' => [
        'title' => 'Google Agenda',
        'hero_title' => 'Integração Google Agenda',
        'hero_subtitle' => 'Sincronize tarefas do CRM com o Google Agenda para agendamento perfeito.',
        'hero_description' => 'Sincronização bidirecional entre tarefas do CRM do NetSendo e o Google Agenda. Crie, atualize e acompanhe tarefas em ambas as plataformas automaticamente.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'two_way_sync' => [
                'title' => 'Sincronização Bidirecional',
                'description' => 'As alterações sincronizam automaticamente em ambas as direções.',
            ],
            'task_sync' => [
                'title' => 'Sincronização de Tarefas',
                'description' => 'Tarefas do CRM aparecem como eventos no calendário.',
            ],
            'reminders' => [
                'title' => 'Lembretes',
                'description' => 'Receba notificações sobre tarefas próximas.',
            ],
            'webhooks' => [
                'title' => 'Atualizações em Tempo Real',
                'description' => 'Sincronização instantânea via webhooks do Google.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'google_cloud' => [
                'title' => 'Criar Projeto no Google Cloud',
                'description' => 'Acesse o Google Cloud Console e crie um novo projeto.',
            ],
            'enable_api' => [
                'title' => 'Ativar API do Calendário',
                'description' => 'Ative a API do Google Agenda na Biblioteca de APIs.',
            ],
            'oauth' => [
                'title' => 'Configurar Consentimento OAuth',
                'description' => 'Configure a tela de consentimento OAuth com escopos de calendário.',
            ],
            'configure' => [
                'title' => 'Adicionar Credenciais ao NetSendo',
                'description' => 'Insira o Client ID e o Client Secret em Configurações → Integrações.',
            ],
            'connect' => [
                'title' => 'Conectar Calendário',
                'description' => 'Autorize seu Google Agenda em Configurações → Calendário.',
            ],
        ],
        'go_to_settings' => 'Ir para Configurações do Calendário',
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação da API do Calendário',
        'manage_tasks' => 'Gerenciar Tarefas do CRM',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'google_account' => 'Conta Google',
            'cloud_project' => 'Projeto Google Cloud',
            'calendar_api' => 'API do Calendário Ativada',
            'netsendo_account' => 'Conta NetSendo',
        ],
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação para instruções detalhadas de configuração.',
        'documentation_button' => 'Documentação',
    ],

    'perplexity' => [
        'title' => 'Perplexity AI',
        'hero_title' => 'Perplexity AI',
        'hero_subtitle' => 'Pesquisa aprofundada com IA e citações em tempo real para inteligência de marketing.',
        'hero_description' => 'Integre o Perplexity AI ao NetSendo Brain para desbloquear capacidades de pesquisa aprofundada. Obtenha respostas abrangentes com citações, analise concorrentes, descubra tendências de mercado e gere ideias de conteúdo — tudo com IA avançada que pesquisa a internet em tempo real.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'deep_research' => [
                'title' => 'Pesquisa Aprofundada com Citações',
                'description' => 'Obtenha respostas abrangentes com IA e citações de fontes de toda a web.',
            ],
            'company_intelligence' => [
                'title' => 'Inteligência Empresarial',
                'description' => 'Pesquise empresas em profundidade — produtos, posição de mercado, stack tecnológico e principais contatos.',
            ],
            'trend_analysis' => [
                'title' => 'Análise de Tendências de Mercado',
                'description' => 'Descubra tendências do setor, oportunidades emergentes e dinâmicas de mercado com análise de IA.',
            ],
            'content_research' => [
                'title' => 'Ideias de Pesquisa de Conteúdo',
                'description' => 'Gere ideias de conteúdo para email e SMS baseadas em dados, com inteligência web em tempo real.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'get_key' => [
                'title' => 'Obter Chave de API',
                'description' => 'Cadastre-se em perplexity.ai e gere uma chave de API no painel da sua conta.',
            ],
            'configure' => [
                'title' => 'Configurar nas Configurações do Brain',
                'description' => 'Acesse Configurações do Brain e cole sua chave de API do Perplexity na seção Pesquisa.',
            ],
            'research' => [
                'title' => 'Começar a Pesquisar',
                'description' => 'Peça ao Brain para pesquisar qualquer tópico — ele usará o Perplexity para respostas aprofundadas com citações.',
            ],
        ],
        'api_info' => 'O Perplexity AI usa o modelo Sonar para pesquisa rápida e precisa com citações web.',
        'use_cases_title' => 'Casos de Uso',
        'use_cases' => [
            'competitor' => [
                'title' => 'Análise de Concorrentes',
                'description' => 'Pesquise estratégias, produtos e posicionamento de mercado dos concorrentes.',
            ],
            'enrichment' => [
                'title' => 'Enriquecimento de Dados do CRM',
                'description' => 'Colete automaticamente dados estruturados de empresas para seus contatos no CRM.',
            ],
            'campaigns' => [
                'title' => 'Pesquisa para Campanhas',
                'description' => 'Obtenha insights baseados em dados para melhorar suas campanhas de email e SMS.',
            ],
        ],
        'go_to_settings' => 'Configurar Chave de API',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'account' => 'Conta Perplexity AI',
            'api_key' => 'Chave de API do Perplexity',
            'brain' => 'NetSendo Brain ativado',
        ],
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação da API do Perplexity',
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação para instruções detalhadas de configuração.',
        'documentation_button' => 'Documentação',
    ],

    'serpapi' => [
        'title' => 'SerpAPI',
        'hero_title' => 'SerpAPI',
        'hero_subtitle' => 'Resultados do Google Search e grafos de conhecimento integrados ao seu fluxo de marketing.',
        'hero_description' => 'Conecte o SerpAPI ao NetSendo Brain para resultados rápidos e estruturados do Google Search. Pesquise a web, descubra notícias, acesse grafos de conhecimento e encontre dados de empresas — tudo dentro das conversas do seu Brain.',
        'features_title' => 'Funcionalidades',
        'features' => [
            'google_search' => [
                'title' => 'Resultados do Google Search',
                'description' => 'Acesse resultados estruturados do Google Search com títulos, trechos e links.',
            ],
            'news_search' => [
                'title' => 'Pesquisa de Notícias',
                'description' => 'Encontre os artigos de notícias mais recentes sobre qualquer tópico para conteúdo de marketing oportuno.',
            ],
            'knowledge_graph' => [
                'title' => 'Grafo de Conhecimento',
                'description' => 'Obtenha dados ricos de entidades do Grafo de Conhecimento do Google para insights mais profundos.',
            ],
            'company_lookup' => [
                'title' => 'Busca de Dados de Empresas',
                'description' => 'Encontre rapidamente informações de empresas, sites e principais dados comerciais.',
            ],
        ],
        'setup_title' => 'Configuração',
        'setup_steps' => [
            'get_key' => [
                'title' => 'Obter Chave de API',
                'description' => 'Cadastre-se em serpapi.com e obtenha sua chave de API no painel.',
            ],
            'configure' => [
                'title' => 'Configurar nas Configurações do Brain',
                'description' => 'Acesse Configurações do Brain e cole sua chave do SerpAPI na seção Pesquisa.',
            ],
            'search' => [
                'title' => 'Começar a Pesquisar',
                'description' => 'Peça ao Brain para pesquisar a web — ele usará o SerpAPI para resultados rápidos do Google.',
            ],
        ],
        'search_types_title' => 'Tipos de Pesquisa Suportados',
        'search_types' => [
            'general' => 'Pesquisa Web Geral',
            'news' => 'Pesquisa de Notícias',
            'images' => 'Pesquisa de Imagens',
        ],
        'use_cases_title' => 'Casos de Uso',
        'use_cases' => [
            'competitors' => [
                'title' => 'Monitoramento de Concorrentes',
                'description' => 'Acompanhe a atividade e presença online dos concorrentes em tempo real.',
            ],
            'trends' => [
                'title' => 'Descoberta de Tendências',
                'description' => 'Encontre tópicos em alta e notícias para campanhas de marketing oportunas.',
            ],
            'crm' => [
                'title' => 'Pesquisa de Leads',
                'description' => 'Pesquise rapidamente leads e empresas antes de entrar em contato.',
            ],
        ],
        'go_to_settings' => 'Configurar Chave de API',
        'requirements_title' => 'Requisitos',
        'requirements' => [
            'account' => 'Conta SerpAPI',
            'api_key' => 'Chave de API do SerpAPI',
            'brain' => 'NetSendo Brain ativado',
        ],
        'resources_title' => 'Recursos',
        'docs_link' => 'Documentação do SerpAPI',
        'help_title' => 'Precisa de ajuda?',
        'help_desc' => 'Consulte nossa documentação para instruções detalhadas de configuração.',
        'documentation_button' => 'Documentação',
    ],
];
