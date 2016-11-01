<?php

namespace frontend\models\query;

/**
 * This is the ActiveQuery class for [[\frontend\models\Note]].
 *
 * @see \frontend\models\Note
 */
class NoteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \frontend\models\Note[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \frontend\models\Note|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}