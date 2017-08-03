<?php

namespace musgravehill\tree\manager\interfaces;

use yii\db\ActiveQuery;


/**
 * Interface TreeQueryInterface
 * @package musgravehill\tree\manager\interfaces
 */
interface TreeQueryInterface
{
    /**
     * @return ActiveQuery
     */
    public function roots();
}