<?php
Class Model_MainMenu Extends Model_Base {

    public $id;
    public $text;
    public $href;
    public $is_active;

    public function fieldsTable(){
        return array(

            'id' => 'Id',
            'text' => 'Text',
            'href' => 'Href',
            'is_active' => 'Is_Active',

        );
    }

}