<?php

class LangConditionBehavior extends CActiveRecordBehavior
{
    public function beforeValidate($event)
    {
        $model = $this->getOwner();
        $meta  = $model->meta();
        
        if (isset($meta['lang']))
        {   
            $model->lang = $this->defineLang();
        }
    }


    private function defineLang()
    {
        if (Yii::app()->controller instanceof AdminController)
        {
            if (isset(Yii::app()->session["admin_panel_lang"]))
            {
                return Yii::app()->session["admin_panel_lang"];
            }
            else
            {
                return Yii::app()->language;
            }
        }
        else
        {
            return Yii::app()->session["language"];
        }
    }
}
