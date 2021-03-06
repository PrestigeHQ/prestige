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
    // Components
    'components' => [
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            0 => 'Unknown',
            1 => 'Operacional',
            2 => 'Problemas de performance',
            3 => 'Indisponibilidade parcial',
            4 => 'Indisponibilidade total',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nenhum incidente reportado',
        'past'         => 'Incidentes anteriores',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', agendada :timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Investigando',
            2 => 'Identificado',
            3 => 'Observando',
            4 => 'Resolvido',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => 'Gerar nova chave de API',
        'revoke'     => 'Revogar a chave de API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ultima Hora',
            'hourly'    => '??ltimas 12 horas',
            'weekly'    => 'Semana',
            'monthly'   => 'M??s',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Subscrever',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notifica????es',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'You\'re currently subscribed to all updates.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'You\'re currently subscribed to the following updates.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Subscrever actualiza????es via email.',
            'subscribed'          => 'Subscreveu as notifica????es por e-mail, por favor verifique o seu e-mail para confirmar a subscri????o.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'A sua subscri????o por e-mail foi confirmada. Obrigado!',
            'manage'              => 'Manage your subscription',
            'unsubscribe'         => 'Remover subscri????o de e-mail.',
            'unsubscribed'        => 'A sua subscri????o de e-mail foi cancelada.',
            'failure'             => 'Algo correu mal com a sua subscri????o.',
            'already-subscribed'  => 'N??o posso subscrever :email pois j?? se encontra subscrito.',
        ],
    ],

    'signup' => [
        'title'    => 'Registrar',
        'username' => 'Usu??rio',
        'email'    => 'E-mail',
        'password' => 'Senha',
        'success'  => 'A sua conta foi criada.',
        'failure'  => 'Aconteceu algo de errado com a inscri????o.',
    ],

    'system' => [
        'update' => 'Existe uma vers??o mais recente do Cachet disponivel. Pode saber mais como actualizar <a href="https://docs.cachethq.io/docs/updating-cachet">aqui</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Fechar',
        'subscribe' => [
            'title'  => 'Subscrever a atualiza????es de componente',
            'body'   => 'Introduza o seu endere??o de email para subscrever a atualiza????es deste componente. Se j?? estiver subscrito ent??o j?? recebe emails para este componente.',
            'button' => 'Subscrever',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Stay up to date with the latest service updates from :app.',
        ],
    ],

    // Other
    'home'            => 'Home',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Sobre este Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed de Estado',

];
