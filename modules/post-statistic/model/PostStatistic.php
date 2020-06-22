<?php
/**
 * PostStatistic
 * @package post-statistic
 * @version 0.0.1
 */

namespace PostStatistic\Model;

class PostStatistic extends \Mim\Model
{

    protected static $table = 'post_statistic';

    protected static $chains = [
        'post' => [
            'model' => 'Post\\Model\\Post',
            'field' => 'id'
        ]
    ];

    protected static $q = [];
}