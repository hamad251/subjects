<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'subject'        => [
        'title'          => 'Subjects',
        'title_singular' => 'Subject',
        'fields'         => [
            'id'                                  => 'ID',
            'id_helper'                           => ' ',
            'title'                               => 'Title',
            'title_helper'                        => ' ',
            'department'                          => 'Department',
            'department_helper'                   => ' ',
            'purpose'                             => 'Purpose',
            'purpose_helper'                      => ' ',
            'category'                            => 'Category',
            'category_helper'                     => ' ',
            'is_it_urgent'                        => 'Is It Urgent ?',
            'is_it_urgent_helper'                 => ' ',
            'description'                         => 'Description',
            'description_helper'                  => ' ',
            'is_it_board_powers'                  => 'Is it one of the powers of the council?',
            'is_it_board_powers_helper'           => ' ',
            'is_it_board_powers_text'             => 'Powers Text',
            'is_it_board_powers_text_helper'      => ' ',
            'is_it_related'                       => 'Is the subject related to the strategies of the authority?',
            'is_it_related_helper'                => ' ',
            'is_it_financial_related'             => 'Is It Financial Related',
            'is_it_financial_related_helper'      => ' ',
            'is_it_market_effect'                 => 'Is It Market Effect',
            'is_it_market_effect_helper'          => ' ',
            'is_it_edit_related'                  => 'Is It Edit Related',
            'is_it_edit_related_helper'           => ' ',
            'is_it_decision_related'              => 'Is It Decision Related',
            'is_it_decision_related_helper'       => ' ',
            'is_it_public'                        => 'Is It Public',
            'is_it_public_helper'                 => ' ',
            'is_it_related_to_old_subject'        => 'Is It Related To Old Subject',
            'is_it_related_to_old_subject_helper' => ' ',
            'time'                                => 'Time',
            'time_helper'                         => 'الوقت المقترح لمناقشة الموضوع بالدقائق',
            'is_it_department_related'            => 'Is It Department Related',
            'is_it_department_related_helper'     => ' ',
            'created_at'                          => 'Created at',
            'created_at_helper'                   => ' ',
            'updated_at'                          => 'Updated at',
            'updated_at_helper'                   => ' ',
            'deleted_at'                          => 'Deleted at',
            'deleted_at_helper'                   => ' ',
            'status'                              => 'Status',
            'status_helper'                       => ' ',
        ],
    ],
    'userAlert'      => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
];
