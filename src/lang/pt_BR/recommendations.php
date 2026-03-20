<?php

return [
    // Recomendações de ganho rápido
    'missing_preheader' => [
        'title' => 'Adicione pré-cabeçalhos aos seus emails',
        'description' => 'Emails sem pré-cabeçalhos perdem espaço valioso de prévia na caixa de entrada. Adicionar pré-cabeçalhos atraentes pode aumentar as taxas de abertura em 5-10%.',
        'action_steps' => [
            'Abra o editor de emails para cada rascunho/email agendado',
            'Adicione um pré-cabeçalho que complemente seu assunto',
            'Mantenha abaixo de 100 caracteres para melhor exibição',
            'Use tokens de personalização para maior engajamento',
        ],
    ],
    'long_subject' => [
        'title' => 'Reduza o tamanho dos seus assuntos',
        'description' => 'Assuntos longos são cortados em dispositivos móveis. Mantê-los abaixo de 50 caracteres garante que sua mensagem seja totalmente visível.',
        'action_steps' => [
            'Revise assuntos com mais de 50 caracteres',
            'Foque na parte mais atrativa da sua mensagem',
            'Use palavras-chave que despertem emoção',
            'Experimente emojis (com moderação) para apelo visual',
        ],
    ],
    'no_personalization' => [
        'title' => 'Personalize o conteúdo dos seus emails',
        'description' => 'Emails personalizados alcançam 26% mais aberturas. Usar nomes de assinantes e dados relevantes cria conexões mais fortes.',
        'action_steps' => [
            'Adicione [[first_name]] ao assunto e saudações',
            'Use [[company]] ou [[city]] para comunicações B2B',
            'Crie blocos de conteúdo dinâmico com base em tags do assinante',
            'Configure valores padrão para dados ausentes',
        ],
    ],
    'spam_content' => [
        'title' => 'Reduza palavras-gatilho de spam',
        'description' => 'Seu conteúdo contém palavras que podem acionar filtros de spam. Limpar a linguagem melhora a entregabilidade.',
        'action_steps' => [
            'Evite LETRAS MAIÚSCULAS e pontos de exclamação em excesso',
            'Substitua palavras como "GRÁTIS", "URGENTE", "AÇÃO IMEDIATA" por alternativas mais suaves',
            'Equilibre conteúdo promocional com conteúdo de valor',
            'Use verificadores de email HTML antes de enviar',
        ],
    ],
    'stale_list' => [
        'title' => 'Limpe suas listas de assinantes',
        'description' => 'Listas com assinantes inativos prejudicam a entregabilidade. A limpeza regular melhora as taxas de abertura e a reputação do remetente.',
        'action_steps' => [
            'Identifique assinantes sem aberturas nos últimos 90 dias',
            'Execute uma campanha de reengajamento antes de remover',
            'Remova bounces permanentes imediatamente',
            'Considere uma política de expiração para usuários inativos há muito tempo',
        ],
    ],
    'poor_timing' => [
        'title' => 'Otimize seus horários de envio',
        'description' => 'Enviar nos horários ideais impacta significativamente as taxas de abertura. Sua janela ideal geralmente é entre 9-11h ou 14-16h no horário local.',
        'action_steps' => [
            'Agende emails entre 9-11h para públicos corporativos',
            'Tente entre 14-16h para públicos consumidores',
            'Terça a quinta geralmente têm melhor desempenho',
            'Evite fins de semana, a menos que tenha dados indicando o contrário',
        ],
    ],
    'over_mailing' => [
        'title' => 'Reduza a frequência de envio',
        'description' => 'Você está enviando com muita frequência para algumas listas. Isso aumenta descadastramentos e reclamações de spam.',
        'action_steps' => [
            'Limite a 2-3 emails por semana por lista',
            'Crie uma central de preferências para opções de frequência',
            'Segmente usuários com alto engajamento para mais conteúdo',
            'Use automações em vez de transmissões manuais quando possível',
        ],
    ],
    'no_automation' => [
        'title' => 'Configure automações de boas-vindas',
        'description' => 'Emails automatizados geram 320% mais receita do que os não automatizados. Comece com uma sequência de boas-vindas.',
        'action_steps' => [
            'Crie uma sequência de boas-vindas com 3-5 emails',
            'Configure automação acionada por novo assinante',
            'Inclua conteúdo de valor antes de ofertas promocionais',
            'Acompanhe o engajamento para identificar leads quentes',
        ],
    ],
    'sms_missing' => [
        'title' => 'Lance campanhas SMS',
        'description' => 'Você tem números de telefone, mas não está usando SMS. Campanhas multicanal melhoram a conversão em 12-15%.',
        'action_steps' => [
            'Crie um follow-up por SMS para campanhas de email importantes',
            'Use SMS para ofertas com prazo limitado',
            'Mantenha as mensagens abaixo de 160 caracteres',
            'Inclua uma chamada para ação clara com link',
        ],
    ],

    // Recomendações estratégicas
    'declining_open_rate' => [
        'title' => 'Reverta a queda nas taxas de abertura',
        'description' => 'Suas taxas de abertura caíram :change% nos últimos 30 dias. Foque na otimização do assunto e na higiene da lista.',
        'action_steps' => [
            'Faça testes A/B de assuntos nas próximas 5 campanhas',
            'Remova assinantes inativos há 90 dias ou mais',
            'Verifique sua reputação de remetente no mail-tester.com',
            'Verifique os registros SPF/DKIM/DMARC',
        ],
    ],
    'low_click_rate' => [
        'title' => 'Melhore as taxas de cliques nos emails',
        'description' => 'Sua taxa de cliques está abaixo de 2%, que é inferior à média do setor. CTAs melhores e uma estrutura de conteúdo adequada podem ajudar.',
        'action_steps' => [
            'Use CTAs em estilo de botão em vez de links de texto',
            'Posicione sua CTA principal acima da dobra',
            'Use linguagem orientada à ação ("Começar" vs "Clique Aqui")',
            'Limite a 1-2 CTAs primárias por email',
        ],
    ],
    'low_segmentation' => [
        'title' => 'Implemente segmentação de assinantes',
        'description' => 'Apenas :percent% dos seus assinantes estão marcados com tags. Uma melhor segmentação leva a 14% mais cliques.',
        'action_steps' => [
            'Crie tags baseadas em interesses a partir do comportamento de clique',
            'Configure automações de tags para ações-chave',
            'Segmente por nível de engajamento (ativo/passivo/frio)',
            'Use blocos de conteúdo dinâmico para diferentes segmentos',
        ],
    ],
];
