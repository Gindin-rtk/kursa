<?php

namespace app\models;

use yii\db\ActiveRecord;

class LookLecture extends ActiveRecord{

      public static function tableName()
      {
             return 'lektureprepod';

      }
      public static function getAll()
      {
             $data = self::find()->all();
             return $data;
      }

}