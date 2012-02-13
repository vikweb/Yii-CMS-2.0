<?php
$this->page_title = t('Управление блоками страниц');

$this->widget('AdminGridView', array(
    'id'          => 'page-part-grid',
    'dataProvider'=> $model->search(),
    'filter'      => $model,
    'columns'     => array(
        'title',
        'name',
        array(
            'name' => 'text',
            'type' => 'raw'
        ),
        array(
            'name'  => 'lang',
            'value' => '$data->language->name'
        ),
        'date_create', array(
            'class'=> 'CButtonColumn',
        ),
    ),
));
?>
