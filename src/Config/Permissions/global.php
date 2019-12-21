<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015, 2016, 2017, 2018, 2019  Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [
    'superuser' => [
        'label' => 'web::permissions.global_superuser_label',
    ],
    'queue_manager' => [
        'label' => 'web::permissions.global_queue_manager_label',
    ],
    'standing_builder' => [
        'label'       => 'web::permissions.global_standing_builder_label',
        'description' => 'web::permissions.global_standing_builder_description',
    ],
    'moons_reporter' => [
        'label'       => 'web::permissions.global_moons_reporter_label',
        'description' => 'web::permissions.global_moons_reporter_description',
        'division'    => 'industrial',
    ],
    'moons_reporter_manager' => [
        'label'       => 'web::permissions.global_moons_reporter_manager_label',
        'description' => 'web::permissions.global_moons_reporter_manager_description',
        'division'    => 'industrial',
    ],
];