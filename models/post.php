<?php 

namespace app\model;

use yii\db\ActiveRecord;


class post extends ActiveRecord
{
	public static function tableName()
	{
		return 'lektureprepod';
	}



}