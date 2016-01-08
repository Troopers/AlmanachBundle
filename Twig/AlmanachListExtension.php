<?php

namespace AppVentus\AlmanachBundle\Twig;

class AlmanachListExtension extends \Twig_Extension
{
    /**
     * @var AlmanachDisplayExtension
     */
    protected $almanachExtension;

    /**
     * @param string $name
     * @param array  $options
     *
     * @return array
     */
    protected function getListOptions($name, array $options)
    {
        return array_merge($options, [
            'order' => $name,
        ]);
    }

    public function __construct(AlmanachDisplayExtension $almanachExtension)
    {
        $this->almanachExtension = $almanachExtension;
    }

    public function getFunctions()
    {
        return [
            'ul' => new \Twig_Function_Method($this, 'listUnordered', ['is_safe' => ['html']]),
            'ol' => new \Twig_Function_Method($this, 'listOrdered', ['is_safe' => ['html']]),
            'li' => new \Twig_Function_Method($this, 'listItem', ['is_safe' => ['html']]),
        ];
    }

    public function getName()
    {
        return 'appventus_almanach_list';
    }

    public function __call($name, $arguments)
    {
        if (preg_match('/^listItem$/', $name, $match)) {
            if (empty($arguments)) {
                throw new \Exception(sprintf('Method %s waits at least one argument.', $name));
            } elseif (isset($arguments[1]) && !is_array($arguments[1])) {
                throw new \Exception(sprintf('Method %s waits "array" as second argument, "%s" given.', $name, gettype($arguments[1])));
            }

            $content = $arguments[0];
            $options = (isset($arguments[1])) ? $arguments[1] : [];

            return $this->almanachExtension->displayListItem($content, $options);
        } else if (preg_match('/^list(.*)/', $name, $match)) {
            $type = strtolower($match[1]);

            if (empty($arguments)) {
                throw new \Exception(sprintf('Method %s waits at least one argument.', $name));
            } elseif (!is_array($arguments[0])) {
                throw new \Exception(sprintf('Method %s waits "array" as first argument, "%s" given.', $name, gettype($arguments[0])));
            } elseif (isset($arguments[1]) && !is_array($arguments[1])) {
                throw new \Exception(sprintf('Method %s waits "array" as second argument, "%s" given.', $name, gettype($arguments[1])));
            }

            $items = $arguments[0];
            $options = (isset($arguments[1])) ? $arguments[1] : [];
            $options = $this->getListOptions($type, $options);

            return $this->almanachExtension->displayList($items, $options);
        }
        throw new \Exception(sprintf('Method "%s" does not exist.', $name));
    }
}
