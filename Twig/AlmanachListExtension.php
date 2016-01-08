<?php

namespace AppVentus\AlmanachBundle\Twig;

class AlmanachListExtension extends \Twig_Extension
{
    /**
     * @var AlmanachDisplayExtension
     */
    protected $almanachExtension;

    public function __construct(AlmanachDisplayExtension $almanachExtension)
    {
        $this->almanachExtension = $almanachExtension;
    }

    public function getFunctions()
    {
        return [
        ];
    }

    public function getName()
    {
        return 'appventus_almanach_list';
    }

    public function __call($name, $arguments)
    {
        if (preg_match('/^list(.*)/', $name, $match)) {
            $type = strtolower($match[1]);

        }
        throw new \Exception(sprintf('Method "%s" does not exist.', $name));
    }
}
