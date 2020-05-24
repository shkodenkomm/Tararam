<?php
Class Model_Images Extends Model_Base {

    public $id;
    public $title;
    public $path;
    public $date_upload;
    public $rate;
    public $type;

    public function fieldsTable(){
        return array(

            'id' => 'Id',
            'title' => 'title',
            'path' => 'Text',
            'rate' => 'Href',
            'date_upload' => 'date_upload',
            'type' => 'Type',

        );
    }

}