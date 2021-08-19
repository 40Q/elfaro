<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Restaurant extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $restaurant = new FieldsBuilder('restaurant');

        $restaurant
            ->setLocation('post_type', '==', 'restaurant');

        $restaurant
            ->addText('address', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '40%',
                ],
            ])
            ->addText('zip_code', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '20%',
                ],
            ])
            ->addText('city', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '40%',
                ],
            ])
            ->addText('website', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '40%',
                ],
            ])
            ->addText('phone', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '40%',
                ],
            ])
            ->addText('email', [
                'default_value' => '',
                'wrapper' => [
                    'width' => '40%',
                ],
            ]);

        return $restaurant->build();
    }
}
