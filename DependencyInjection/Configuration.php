<?php

namespace AppVentus\AlmanachBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('almanach');
        $frameworks = ['bootstrap', 'foundation'];

        foreach ($frameworks as $framework) {

            $frameworkNode =
                $rootNode
                    ->children()
                        ->arrayNode($framework);

            $this->addButton($frameworkNode);
            $this->addDropdownButton($frameworkNode);
            $this->addSplitDropdownButton($frameworkNode);
            $this->addButtonGroup($frameworkNode);

            $frameworkNode
                ->end()
                    ->end();

        }

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }

    private function addButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('button')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addDropdownButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('dropdownButton')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addSplitDropdownButton(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('splitDropdownButton')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addButtonGroup(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('buttonGroup')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('primary')->end()
                                ->scalarNode('secondary')->end()
                                ->scalarNode('success')->end()
                                ->scalarNode('information')->end()
                                ->scalarNode('error')->end()
                                ->scalarNode('warning')->end()
                                ->scalarNode('link')->end()
                            ->end()
                        ->end()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('extra_small')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('medium')->end()
                                ->scalarNode('large')->end()
                                ->scalarNode('expanded')->end()
                            ->end()
                        ->end()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                            ->end()
                        ->end()
                        ->arrayNode('group')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('stack')->end()
                                ->scalarNode('stackForSmall')->end()
                                ->scalarNode('vertical')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
