<?php

namespace AppVentus\AlmanachBundle\Twig;

class AlmanachInlineTextExtension extends \Twig_Extension
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
    protected function getInlineTextOptions($name, array $options)
    {
        return array_merge($options, [
            'inline' => $name,
        ]);
    }

    public function __construct(AlmanachDisplayExtension $almanachExtension)
    {
        $this->almanachExtension = $almanachExtension;
    }

    public function getFunctions()
    {
        return [
            'span'   => new \Twig_Function_Method($this, 'inlineTextDefault', ['is_safe' => ['html']]),
            'mark'   => new \Twig_Function_Method($this, 'inlineTextMarked', ['is_safe' => ['html']]),
            'del'    => new \Twig_Function_Method($this, 'inlineTextDeleted', ['is_safe' => ['html']]),
            's'      => new \Twig_Function_Method($this, 'inlineTextStrike', ['is_safe' => ['html']]),
            'ins'    => new \Twig_Function_Method($this, 'inlineTextInserted', ['is_safe' => ['html']]),
            'u'      => new \Twig_Function_Method($this, 'inlineTextUnderlined', ['is_safe' => ['html']]),
            'small'  => new \Twig_Function_Method($this, 'inlineTextSmall', ['is_safe' => ['html']]),
            'strong' => new \Twig_Function_Method($this, 'inlineTextBold', ['is_safe' => ['html']]),
            'em'     => new \Twig_Function_Method($this, 'inlineTextItalic', ['is_safe' => ['html']]),
        ];
    }

    public function getName()
    {
        return 'appventus_almanach_inline_text';
    }

    public function __call($name, $arguments)
    {
        if (preg_match('/^inlineText(.*)/', $name, $match)) {
            $type = strtolower($match[1]);

            if (empty($arguments)) {
                throw new \Exception(sprintf('Method %s waits at least one argument.', $name));
            } elseif (isset($arguments[1]) && !is_array($arguments[1])) {
                throw new \Exception(sprintf('Method %s waits "array" as second argument, "%s" given.', $name, gettype($arguments[1])));
            }

            $content = $arguments[0];
            $options = (isset($arguments[1])) ? $arguments[1] : [];
            $options = $this->getInlineTextOptions($type, $options);

            return $this->almanachExtension->displayInlineText($content, $options);
        }
        throw new \Exception(sprintf('Method "%s" does not exist.', $name));
    }
}
