<?php

/**
 * English translations - Automations Module
 */

return [
    'title' => 'Automações',
    'create' => 'Nova Automação',
    'edit' => 'Editar Automação',
    'delete' => 'Excluir Automação',
    'logs' => 'Logs de Execução',

    'no_rules' => 'Nenhuma automação',
    'no_rules_hint' => 'Crie sua primeira automação para responder automaticamente a eventos.',
    'create_first' => 'Criar primeira automação',

    'basic_info' => 'Informações Básicas',
    'name_placeholder' => 'Ex.: Boas-vindas a novos assinantes',
    'description_placeholder' => 'Descrição (opcional)',

    'when' => 'QUANDO',
    'if' => 'SE',
    'then' => 'ENTÃO',

    'trigger' => 'Disparador',
    'trigger_event' => 'Evento Disparador',
    'actions_count' => 'Ações',
    'executions' => 'Execuções',

    'filter_by_list' => 'Filtrar por lista',
    'filter_by_message' => 'Filtrar por mensagem',
    'filter_by_form' => 'Filtrar por formulário',
    'filter_by_tag' => 'Filtrar por tag',

    'add_condition' => 'Adicionar condição',
    'no_conditions_hint' => 'Sem condições - a automação será acionada para toda ocorrência do evento.',
    'all_conditions' => 'Todas as condições devem ser atendidas',
    'any_condition' => 'Qualquer condição pode ser atendida',
    'value' => 'Valor',

    'add_action' => 'Adicionar ação',
    'no_actions_hint' => 'Adicione ao menos uma ação para executar.',
    'select_tag' => 'Selecionar tag',
    'select_list' => 'Selecionar lista',
    'select_message' => 'Selecionar mensagem',
    'select_funnel' => 'Selecionar funil',
    'select_field' => 'Selecionar campo',
    'webhook_url' => 'URL do Webhook',
    'admin_email' => 'Email do administrador',
    'email_subject' => 'Assunto do email',
    'notification_message' => 'Mensagem de notificação',
    'new_value' => 'Novo valor',

    'rate_limiting' => 'Limitação de Taxa',
    'limit_per_subscriber' => 'Limitar execuções por assinante',
    'max' => 'Máximo',
    'times' => 'vezes',
    'per_hour' => 'por hora',
    'per_day' => 'por dia',
    'per_week' => 'por semana',
    'per_month' => 'por mês',
    'ever' => 'sempre',

    'activate_immediately' => 'Ativar imediatamente',

    'confirm_duplicate' => 'Deseja duplicar esta automação?',
    'confirm_delete' => 'Tem certeza que deseja excluir esta automação? Esta ação não pode ser desfeita.',

    'triggers' => [
        'subscriber_signup' => 'Assinatura do assinante',
        'subscriber_activated' => 'Assinante ativado',
        'email_opened' => 'Email aberto',
        'email_clicked' => 'Link clicado',
        'subscriber_unsubscribed' => 'Assinante cancelou inscrição',
        'email_bounced' => 'Email retornou (bounce)',
        'form_submitted' => 'Formulário enviado',
        'tag_added' => 'Tag adicionada',
        'tag_removed' => 'Tag removida',
        'field_updated' => 'Campo atualizado',
    ],

    'actions' => [
        'send_email' => 'Enviar email',
        'add_tag' => 'Adicionar tag',
        'remove_tag' => 'Remover tag',
        'move_to_list' => 'Mover para lista',
        'copy_to_list' => 'Copiar para lista',
        'unsubscribe' => 'Cancelar inscrição',
        'call_webhook' => 'Chamar webhook',
        'start_funnel' => 'Iniciar funil',
        'update_field' => 'Atualizar campo',
        'notify_admin' => 'Notificar administrador',
    ],

    'log_status' => [
        'success' => 'Sucesso',
        'partial' => 'Sucesso parcial',
        'failed' => 'Falhou',
        'skipped' => 'Ignorado',
    ],
];
