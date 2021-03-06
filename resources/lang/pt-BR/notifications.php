<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Status do Componente Atualizado',
                'greeting' => 'O status de um componente foi atualizado!',
                'content'  => 'O status de :name mudou de :old_status para :new_status.',
                'action'   => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Status do Componente Atualizado',
                'content' => 'O status de :name mudou de :old_status para :new_status.',
            ],
            'sms' => [
                'content' => 'O status de :name mudou de :old_status para :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Novo incidente reportado',
                'greeting' => 'Um novo incidente foi reportado em :app_name.',
                'content'  => 'O Incidente :name foi reportado',
                'action'   => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Incidente :name reportado',
                'content' => 'Um novo incidente foi relatado em :app_name',
            ],
            'sms' => [
                'content' => 'Um novo incidente foi reportado em :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incidente Atualizado',
                'content' => ':name foi atualizado',
                'title'   => ':name foi atualizado para :new_status',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => ':name atualizado',
                'content' => ':name foi atualizado para :new_status',
            ],
            'sms' => [
                'content' => 'Incidente :name foi atualizado',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Novo Agendamento Criado',
                'content' => ':name foi agendado para :date',
                'title'   => 'Uma nova manuten????o agendada foi criada.',
                'action'  => 'Visualizar',
            ],
            'slack' => [
                'title'   => 'Novo Agendamento Criado!',
                'content' => ':name foi agendado para :date',
            ],
            'sms' => [
                'content' => ':name foi agendado para :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifique a sua inscri????o',
                'content' => 'Clique para verificar sua inscri????o na p??gina de status :app_name.',
                'title'   => 'Verifique sua inscri????o na p??gina de status de :app_name.',
                'action'  => 'Verifique',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Gerenciar inscri????o',
                'content' => 'Clique para gerenciar sua inscri????o na p??gina de status de :app_name.',
                'title'   => 'Clique para gerenciar sua inscri????o na p??gina de status de :app_name.',
                'action'  => 'Gerenciar inscri????o',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping do Cachet!',
                'content' => 'Esta ?? uma notifica????o de teste do Cachet!',
                'title'   => '????',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Seu convite est?? aqui dentro...',
                'content' => 'Voc?? foi convidado para fazer parte da p??gina de status :app_name.',
                'title'   => 'Voc?? foi convidado para fazer parte da p??gina de status :app_name.',
                'action'  => 'Aceitar',
            ],
        ],
    ],
];
