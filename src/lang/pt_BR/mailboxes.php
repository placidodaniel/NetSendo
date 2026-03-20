<?php

return [
    'title' => 'Caixas de Envio',
    'created' => 'Caixa de envio criada.',
    'updated' => 'Caixa de envio atualizada.',
    'deleted' => 'Caixa de envio excluída.',
    'set_default' => 'Caixa de envio definida como padrão.',

    'types' => [
        'broadcast' => 'Envio único (Broadcast)',
        'autoresponder' => 'Autoresponder (Fila)',
        'system' => 'Sistema',
    ],

    'bounce' => [
        'section_title' => 'Monitoramento de Bounces',
        'section_desc' => 'Monitore uma caixa IMAP dedicada para bounces e marque automaticamente os assinantes como rejeitados.',
        'enabled' => 'Ativar monitoramento de bounce',
        'imap_host' => 'Host IMAP',
        'imap_port' => 'Porta IMAP',
        'imap_encryption' => 'Criptografia',
        'imap_username' => 'Usuário IMAP',
        'imap_password' => 'Senha IMAP',
        'imap_folder' => 'Pasta IMAP',
        'test_connection' => 'Testar Conexão IMAP',
        'test_success' => 'Conexão bem-sucedida com a caixa de bounce',
        'test_failed' => 'Falha ao conectar à caixa de bounce',
        'last_scanned' => 'Última verificação',
        'last_scan_count' => 'Bounces encontrados na última verificação',
        'never_scanned' => 'Nunca verificado',
        'processed' => ':count bounce(s) processado(s)',
    ],
];
