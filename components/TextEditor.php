<?php namespace Samuell\ContentEditor\Components;

class TextEditor extends ContentEditor {

    public function componentDetails()
    {
        return [
            'name'        => 'Text Editor',
            'description' => 'Edit your front-end text in page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'file' => [
                'title'       => 'Content file',
                'description' => 'Content block filename to edit, optional',
                'default'     => '',
                'type'        => 'dropdown',
            ]
        ];
    }


}
