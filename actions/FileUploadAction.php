<?php

namespace yii\redactor\actions;

use Yii;
use yii\base\Action;
use yii\redactor\models\FileUploadModel;

/**
 * @author Dimd <dimd4@mail.ru>
 * @since 1.0
 */
class FileUploadAction extends Action
{
    function run()
    {
        if (isset($_FILES)) {
            $model = new FileUploadModel();
            if ($model->upload()) {
                return $model->getResponse();
            } else {
                return ['error' => 'Unable to save file'];
            }
        }
    }

}
