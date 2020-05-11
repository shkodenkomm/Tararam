<?php
Class Model_SubMenu Extends Model_Base {

    public $id;
    public $id_main_item;
    public $text;
    public $href;
    public $is_active;

    public function fieldsTable(){
        return array(

            'id' => 'Id',
            'id_main_item' => 'Id_Main_Item',
            'text' => 'Text',
            'href' => 'Href',
            'is_active' => 'Is_Active',

        );
    }

}