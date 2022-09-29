<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

use Yii;

class UploadForm extends Model
{
    /**
     * @var conpolosTxt
     */
    public $conpolosTxt;

    public function rules()
    {
        return [
            [['conpolosTxt'], 'file', 'skipOnEmpty' => false, 'extensions' => 'txt'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->conpolosTxt->saveAs('arquivos/' . $this->conpolosTxt->baseName . '.' . $this->conpolosTxt->extension);
            return true;
        } else {
            return false;
        }
    }
}