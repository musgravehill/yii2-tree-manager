<?php

namespace musgravehill\tree\manager\actions;

use musgravehill\tree\manager\interfaces\TreeInterface;
use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;

/**
 * Class UpdateNodeAction
 * @package musgravehill\tree\manager\actions
 */
class UpdateNodeAction extends BaseAction
{
    /**
     * Attribute for name in model
     * @var string
     */
    public $nameAttribute = 'name';

    /**
     * Move a node (model) below the parent and in between left and right
     *
     * @param integer $id the primaryKey of the moved node
     * @return array
     * @throws InvalidConfigException
     * @throws Exception
     */
    public function run($id)
    {
        /** @var ActiveRecord|TreeInterface $model */
        $model = $this->findModel($id);

        $name = Yii::$app->request->post('name');
        $model->setAttribute($this->nameAttribute, $name);

        if (!$model->validate()) {
            return $model;
        }

        return $model->update(true, [$this->nameAttribute]);
    }
}