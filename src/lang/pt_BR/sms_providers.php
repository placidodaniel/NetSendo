<?php

return [
    'title' => 'Provedores de SMS',
    'subtitle' => 'Configure gateways de SMS para envio de mensagens de texto.',
    'add_new' => 'Adicionar Novo',
    'add_first' => 'Adicionar Primeiro Provedor',
    'default' => 'Padrão',
    'sent_today' => 'Enviados Hoje',
    'test_connection' => 'Testar Conexão',
    'set_as_default' => 'Definir como Padrão',

    'info' => [
        'title' => 'Informações de Configuração',
        'twilio' => 'Requer Account SID, Auth Token e ID do Remetente.',
        'smsapi' => 'Requer Token de API (OAuth).',
    ],

    'status' => [
        'active' => 'Ativo',
        'inactive' => 'Inativo',
        'error' => 'Erro',
        'not_tested' => 'Não Testado',
    ],

    'empty' => [
        'title' => 'Nenhum Provedor de SMS',
        'description' => 'Adicione seu primeiro provedor de SMS para começar a enviar mensagens.',
    ],

    'modal' => [
        'add_title' => 'Adicionar Provedor de SMS',
        'edit_title' => 'Editar Provedor de SMS',
        'provider' => 'Provedor',
    ],

    'notifications' => [
        'created' => 'Provedor de SMS adicionado com sucesso.',
        'updated' => 'Provedor de SMS atualizado com sucesso.',
        'deleted' => 'Provedor de SMS excluído com sucesso.',
        'set_default' => 'Provedor de SMS definido como padrão.',
    ],
];
