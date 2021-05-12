<?php

namespace app\models;

/**
 * This is the model class for table "work1".
 *
 * @property int $id
 * @property int $user
 * @property resource $file
 */
class UpFileForm extends \yii\db\ActiveRecord
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
            [['user'], 'string', 'max' => 50],
            [['file'],'file','skipOnEmpty' => false, 'extensions' => 'docx, pdf, '],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'data',
            'file' => 'File',
        ];
    }
//    public function upload()
//    {
//
//        if ($this->validate()) {
//            foreach ($this->files as $file) {
//                $file->saveAs('file/' . $file->baseName . '.' . $file->extension);
//                $model = new UpFileForm();
//                // this part in not working, why ????
//                $filePath = 'file/'  . $file->baseName . '.' . $file->extension;
//                $model-> file = $filePath;
//                $model->save();
//            }
//            return true;
//        } else {
//            return false;
//        }
//    }
        public function upload()
    {
        if ($this->validate()) {
            $this->File->saveAs('uploads/' . $this->File->baseName . '.' . $this->File->extension);
            return true;
        } else {
            return false;
        }
    }
    public function actionDownload() {
        $path = \Yii::getAlias('@uploads') ;
        $file = $path . '/some-file.pdf';

        if (file_exists($file)) {
            return \Yii::$app->response->sendFile($file);
        }
        throw new \Exception('File not found');
    }
}
