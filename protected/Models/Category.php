<?php

namespace App\Models;

use T4\Orm\Model;

/**
 * Class Category
 * @package App\Models
 *
 * @property string $title
 */
class Category
    extends Model
{
    protected static $schema = [
        'table' => 'categories',
        'columns' => [
            'title' => ['type' => 'string'],
        ],
    ];

    protected static $extension = ['tree'];

}