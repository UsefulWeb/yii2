<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\LoginHistory]].
 *
 * @see \common\models\LoginHistory
 */
class LoginHistoryQuery extends \yii\db\ActiveQuery
{
    /**
     * Condition with user_id
     * @param $user_id
     * @return $this
     */
    public function withUser($user_id)
    {
        return $this->andWhere(
            'user_id='.$user_id
        );
    }

    /**
     * @inheritdoc
     * @return \common\models\LoginHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\LoginHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}