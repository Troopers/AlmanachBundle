<?php

namespace AppVentus\AlmanachBundle\Twig;

class AlmanachInlineTextExtension extends \Twig_Extension {

    /**
     * @var AlmanachDisplayExtension $almanachExtension
     */
    protected $almanachExtension;

    public function __construct(AlmanachDisplayExtension $almanachExtension) {
        $this->almanachExtension = $almanachExtension;
    }

    public function getFunctions() {
        return [];
    }

    public function getName() {
        return 'appventus_almanach_inline_text';
    }
}
