<?php

namespace AppsWithLove\Statamic\ExtendedSection\Fieldtypes;

use Statamic\Fieldtypes\Section;

class ExtendedSectionFieldtype extends Section
{
    protected $icon = 'section';

    protected function configFieldItems(): array
    {
        return [
            'background' => [
                'display' => __('Background'),
                'type' => 'select',
                'default' => 'grey',
                'options' => [
                    'grey' => 'default',
                    'red' => 'Red',
                    'green' => 'Green',
                    'blue' => 'Blue',
                    'orange' => 'Orange',
                    'pink' => 'Pink',
                    'purple' => 'Purple',
                    'brown' => 'Brown',
                    'grey-30' => 'Light grey',
                    'grey-50' => 'Grey',
                    'grey-80' => 'Dark grey',
                    'black' => 'Black',
                    'carbon' => 'Carbon',
                    'stripes' => 'Grey Stripes',
                    'danger' => 'Danger',
                    'rainbow' => 'Rainbow',
                ]
            ],
        ];
    }
}
