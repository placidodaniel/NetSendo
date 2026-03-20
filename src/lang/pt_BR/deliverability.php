<?php

return [
    // Page titles
    'title' => 'Escudo de Entregabilidade',
    'subtitle' => 'Garanta que seus emails cheguem à caixa de entrada, não ao spam',

    // Navigation
    'add_domain' => 'Adicionar Domínio',
    'verified' => 'Verificado',
    'pending_verification' => 'Verificação Pendente',
    'never_checked' => 'Nunca verificado',
    'last_check' => 'Última verificação',
    'refresh' => 'Atualizar',

    // Stats
    'stats' => [
        'domains' => 'Domínios',
        'verified' => 'Verificados',
        'critical' => 'Problemas Críticos',
        'avg_score' => 'Pontuação Média',
    ],

    // Domains
    'domains' => [
        'title' => 'Seus Domínios',
        'empty' => [
            'title' => 'Nenhum domínio adicionado ainda',
            'description' => 'Adicione seu primeiro domínio para começar a monitorar a entregabilidade',
        ],
    ],

    // DMARC Wiz
    'dmarc_wiz' => [
        'title' => 'DMARC Wiz',
        'subtitle' => 'Adicione seu domínio em poucos segundos',
        'step_domain' => 'Domínio',
        'step_verify' => 'Verificar',
        'enter_domain_title' => 'Insira seu domínio',
        'enter_domain_description' => 'Este é o domínio a partir do qual você envia emails',
        'add_record_title' => 'Adicionar registro DNS',
        'add_record_description' => 'Adicione este registro CNAME nas configurações de DNS do seu domínio',
        'dns_propagation_info' => 'As alterações de DNS podem levar até 48 horas para propagar. Você pode verificar a qualquer momento.',
        'add_and_verify' => 'Adicionar e Verificar',
        'add_domain_btn' => 'Adicionar Domínio',
    ],

    // Domain fields
    'domain_name' => 'Nome do domínio',
    'record_type' => 'Tipo de Registro',
    'host' => 'Host',
    'target' => 'Valor Alvo',
    'type' => 'Tipo',

    // Status
    'status_overview' => 'Visão Geral do Status',
    'verification_required' => 'Verificação Necessária',
    'verification_description' => 'Adicione o registro CNAME abaixo nas configurações de DNS para verificar a propriedade do domínio.',
    'add_this_record' => 'Adicionar este registro DNS',
    'verify_now' => 'Verificar Agora',

    // Alerts
    'alerts' => [
        'title' => 'Alertas por Email',
        'description' => 'Seja notificado quando houver problemas com a entregabilidade do seu domínio',
    ],

    // Domain issues
    'domain' => [
        'spf_warning' => 'O registro SPF está com aviso — pode afetar a entregabilidade',
        'dmarc_policy_none' => 'A política DMARC está definida como "none" — emails podem ir para spam',
    ],

    // DNS Issues (detailed)
    'issues' => [
        'spf_missing' => 'Nenhum registro SPF encontrado para este domínio',
        'spf_no_include' => 'O registro SPF não contém o include necessário',
        'spf_no_provider_include' => 'O registro SPF não contém o include do provedor :provider (:required)',
        'spf_permissive' => 'O registro SPF é muito permissivo (+all ou ?all)',
        'dkim_missing' => 'Nenhum registro DKIM encontrado (seletores verificados: :selectors_checked)',
        'dkim_invalid' => 'O registro DKIM é inválido (chave pública ausente)',
        'dmarc_missing' => 'Nenhum registro DMARC encontrado para este domínio',
        'dmarc_none' => 'A política DMARC está definida como "none"',
    ],

    // Test email
    'test_email' => 'Testar seu Email',
    'test_email_description' => 'Execute uma simulação para verificar a entregabilidade antes de enviar',

    // Simulations
    'simulations' => [
        'recent' => 'Simulações Recentes',
        'empty' => 'Nenhuma simulação ainda. Execute seu primeiro teste InboxPassport AI.',
        'history' => 'Histórico de Simulações',
        'no_history' => 'Sem histórico de simulações',
        'no_history_desc' => 'Execute sua primeira simulação InboxPassport AI para ver os resultados aqui.',
    ],

    // InboxPassport
    'inbox_passport' => [
        'title' => 'InboxPassport AI',
        'subtitle' => 'Preveja onde seu email vai parar antes de enviar',
        'how_it_works' => 'Como Funciona',
        'step1_title' => 'Analisar Domínio',
        'step1_desc' => 'Verificamos sua configuração SPF, DKIM e DMARC',
        'step2_title' => 'Escanear Conteúdo',
        'step2_desc' => 'A IA detecta gatilhos de spam, links suspeitos e problemas de formatação',
        'step3_title' => 'Prever Entrega',
        'step3_desc' => 'Obtenha previsão de local de entrega para Gmail, Outlook e Yahoo',
        'what_we_check' => 'O Que Analisamos',
    ],

    // Simulation form
    'select_domain' => 'Selecionar Domínio',
    'no_verified_domains' => 'Nenhum domínio verificado. Adicione um domínio primeiro.',
    'email_subject' => 'Assunto do Email',
    'subject_placeholder' => 'Insira o assunto do seu email...',
    'email_content' => 'Conteúdo do Email (HTML)',
    'content_placeholder' => 'Cole aqui o conteúdo HTML do seu email...',
    'analyzing' => 'Analisando...',
    'run_simulation' => 'Executar InboxPassport AI',

    // Analysis elements
    'spam_words' => 'Palavras de Spam',
    'subject_analysis' => 'Análise do Assunto',
    'link_check' => 'Verificação de Links',
    'html_structure' => 'Estrutura HTML',
    'formatting' => 'Formatação',

    // Results
    'simulation_result' => 'Resultado da Simulação',
    'predicted_folder' => 'Pasta Prevista',
    'provider_predictions' => 'Previsões por Provedor',
    'confidence' => 'confiança',
    'issues_found' => 'Problemas Encontrados',
    'recommendations' => 'Recomendações',
    'run_new_simulation' => 'Executar Nova Simulação',
    'view_history' => 'Ver Histórico',
    'new_simulation' => 'Nova Simulação',

    // Scores
    'score' => [
        'excellent' => 'Excelente',
        'good' => 'Bom',
        'fair' => 'Regular',
        'poor' => 'Ruim',
    ],

    // Folders
    'folder' => [
        'inbox' => 'Caixa de Entrada',
        'promotions' => 'Promoções',
        'spam' => 'Spam',
    ],

    // Table headers
    'subject' => 'Assunto',
    'domain' => 'Domínio',
    'score' => 'Pontuação',
    'folder' => 'Pasta',

    // Actions
    'confirm_delete' => 'Tem certeza de que deseja remover este domínio?',

    // Messages
    'messages' => [
        'domain_added' => 'Domínio adicionado com sucesso. Adicione o registro CNAME para verificar.',
        'cname_verified' => 'Domínio verificado com sucesso!',
        'cname_not_found' => 'Registro CNAME não encontrado. Verifique suas configurações de DNS.',
        'status_refreshed' => 'Status atualizado com sucesso.',
        'domain_removed' => 'Domínio removido com sucesso.',
        'alerts_updated' => 'Configurações de alerta atualizadas.',
        'simulation_complete' => 'Simulação concluída!',
        'gmail_managed_dns' => 'O Gmail gerencia automaticamente SPF/DKIM para sua conta. Nenhuma configuração adicional de DNS é necessária.',
        'domain_not_configured' => 'O domínio :domain não está configurado no DMARC Wiz. Adicione-o para análise completa de entregabilidade.',
        'no_domain_warning' => 'Nenhum domínio configurado. Análise baseada apenas no conteúdo da mensagem.',
    ],

    // Validation
    'validation' => [
        'domain_format' => 'Por favor, insira um nome de domínio válido',
        'domain_exists' => 'Este domínio já foi adicionado',
    ],

    // Localhost/Development Environment Warning
    'localhost_warning' => [
        'title' => 'Ambiente de Desenvolvimento Detectado',
        'description' => 'Você está executando o NetSendo no localhost. A verificação de DNS requer um domínio público. Registros CNAME apontando para localhost não podem ser verificados.',
    ],

    // HTML Analysis Issues
    'html' => [
        'ratio_low' => 'Baixa proporção texto/HTML — seu email tem muito código HTML',
        'hidden_text' => 'Texto oculto detectado (display:none) — isso é um indicador de spam',
        'tiny_font' => 'Tamanho de fonte muito pequeno detectado — isso é um indicador de spam',
        'image_heavy' => 'Email com muitas imagens e pouco texto — adicione mais conteúdo textual',
    ],

    // Subject Analysis Issues
    'subject' => [
        'too_long' => 'O assunto é muito longo (mais de 60 caracteres)',
        'too_short' => 'O assunto é muito curto (menos de 5 caracteres)',
        'all_caps' => 'O assunto contém letras maiúsculas em excesso',
        'exclamations' => 'O assunto contém pontos de exclamação em excesso',
        'questions' => 'O assunto contém pontos de interrogação em excesso',
        'fake_reply' => 'O assunto começa com RE: ou FW:, o que parece uma resposta falsa',
    ],

    // Link Issues
    'links' => [
        'shortener' => 'Encurtador de URL detectado — use URLs completas',
        'suspicious_tld' => 'Extensão de domínio suspeita detectada',
        'ip_address' => 'Endereço IP na URL detectado — use nomes de domínio adequados',
        'too_many' => 'Muitos links no email (mais de 20)',
    ],

    // Formatting Issues
    'formatting' => [
        'caps' => 'O conteúdo contém letras maiúsculas em excesso',
        'symbols' => 'O conteúdo contém símbolos especiais em excesso',
    ],

    // Content Issues
    'content' => [
        'spam_word' => 'Palavra gatilho de spam detectada: ":word"',
    ],

    // Spam Words
    'spam' => [
        'word_detected' => 'Palavra gatilho de spam detectada',
    ],

    // Recommendations
    'recommendations' => [
        'fix_domain' => 'Corrija os problemas de configuração DNS do seu domínio',
        'upgrade_dmarc' => 'Atualize sua política DMARC de "none" para "quarantine" ou "reject"',
        'remove_spam_words' => 'Remova ou substitua palavras gatilho de spam no seu conteúdo',
        'improve_subject' => 'Melhore o assunto — evite maiúsculas e pontuação excessiva',
        'fix_html' => 'Corrija problemas de estrutura HTML — melhore a proporção texto/HTML',
        'fix_links' => 'Corrija problemas de links — evite encurtadores de URL e domínios suspeitos',
        'looks_good' => 'Seu email parece ótimo! Nenhum problema grave detectado',
        'add_domain' => 'Adicione e verifique um domínio no DMARC Wiz para análise completa de entregabilidade',
    ],

    // Upsell for non-GOLD users
    'upsell' => [
        'title' => 'Desbloquear o Escudo de Entregabilidade',
        'description' => 'Maximize a entregabilidade dos seus emails com ferramentas avançadas. Garanta que cada email chegue à caixa de entrada.',
        'feature1' => 'DMARC Wiz — Configuração fácil de domínio',
        'feature2' => 'InboxPassport AI — Teste antes de enviar',
        'feature3' => 'Monitoramento DNS 24/7',
        'feature4' => 'Alertas e recomendações automatizados',
        'cta' => 'Fazer upgrade para GOLD',
    ],

    // DMARC Generator (One-Click Fix)
    'dmarc_generator' => [
        'title' => 'Gerador DMARC',
        'subtitle' => 'Gere o registro DMARC ideal com um clique',
        'initial_explanation' => 'Comece com a política "quarantine" para monitorar sem bloquear emails. Este é um início seguro.',
        'recommended_explanation' => 'Proteção total com política "reject". Use após 7-14 dias de monitoramento sem problemas.',
        'minimal_explanation' => 'Configuração mínima de DMARC com política "quarantine" e relatórios básicos.',
        'upgrade_notice' => 'Após 7-14 dias sem problemas, você pode atualizar com segurança para a política "reject" para máxima proteção.',
        'copy_record' => 'Copiar Registro',
        'current_policy' => 'Política Atual',
        'recommended_policy' => 'Política Recomendada',
        'report_email' => 'Email de Relatório',
        'report_email_hint' => 'Você receberá relatórios DMARC neste endereço',
    ],

    // SPF Generator (One-Click Fix)
    'spf_generator' => [
        'title' => 'Gerador SPF',
        'subtitle' => 'Gere um registro SPF otimizado',
        'optimal_explanation' => 'Registro SPF simplificado com hard fail (-all). Contém apenas os includes necessários para seu provedor.',
        'softfail_explanation' => 'Registro SPF com soft fail (~all). Menos restritivo, mas pode afetar a entregabilidade.',
        'lookup_warning' => 'Seu registro SPF atual excede ou se aproxima do limite de 10 consultas DNS. Recomendamos simplificar.',
        'lookup_count' => 'Contagem de Consultas DNS',
        'max_lookups' => 'Limite Máximo',
        'copy_record' => 'Copiar Registro',
        'current_record' => 'Registro Atual',
        'optimal_record' => 'Registro Otimizado',
        'provider_detected' => 'Provedor Detectado',
    ],

    // DNS Generator Common
    'dns_generator' => [
        'instructions_title' => 'Como Adicionar Registro DNS',
        'step1' => '1. Acesse o painel DNS do seu domínio (ex.: GoDaddy, Cloudflare, Namecheap)',
        'step2' => '2. Adicione um novo registro TXT com os dados acima',
        'step3' => '3. Aguarde a propagação do DNS (até 48h) e clique em "Verificar"',
        'copy_success' => 'Copiado para a área de transferência!',
        'copy_failed' => 'Falha ao copiar. Por favor, copie manualmente.',
        'show_generator' => 'Mostrar Gerador',
        'hide_generator' => 'Ocultar Gerador',
        'one_click_fix' => 'Correção com Um Clique',
    ],
];

