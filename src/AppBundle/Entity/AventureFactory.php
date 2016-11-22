<?php
/**
 * Created by PhpStorm.
 * User: laurentc
 * Date: 18/11/16
 * Time: 16:55
 */

namespace AppBundle\Entity;


use Symfony\Component\OptionsResolver\OptionsResolver;

class AventureFactory {

    public function get($datas) {
        $optionResolver = new OptionsResolver();
        $optionResolver->setRequired(['label']);
        $optionResolver->resolve($datas);

        $aventure = new Aventure();
        $aventure->setLabel($datas['label']);

        return $aventure;
    }
} 