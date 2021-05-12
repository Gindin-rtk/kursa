<?php

namespace app\models;

/**
 * This is the model class for table "work1".
 *
 * @property int $id
 * @property int $user
 * @property resource $file
 */
class Work1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'file'], 'required'],
            [['user'], 'integer'],
            [['file'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'file' => 'File',
        ];
    }
}
