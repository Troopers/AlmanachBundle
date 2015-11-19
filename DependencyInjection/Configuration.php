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

            $this->addContainer($frameworkNode);
            $this->addLabel($frameworkNode);
            $this->addAlert($frameworkNode);
            $this->addTitle($frameworkNode);
            $this->addInlineText($frameworkNode);
            $this->addTransformText($frameworkNode);
            $this->addAlignmentText($frameworkNode);
            $this->addList($frameworkNode);
            $this->addTab($frameworkNode);
            $this->addTabTitle($frameworkNode);
            $this->addTabContent($frameworkNode);
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

    private function addContainer(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('container')
                    ->children()
                        ->arrayNode('class')
                            ->children()
                                ->scalarNode('container')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addLabel(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('label')
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

    private function addAlert(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('alert')
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
                        ->arrayNode('border')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('round')->end()
                                ->scalarNode('radius')->end()
                                ->scalarNode('dismissible')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTitle(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('title')
                    ->children()
                        ->arrayNode('size')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('h1')->end()
                                ->scalarNode('h2')->end()
                                ->scalarNode('h3')->end()
                                ->scalarNode('h4')->end()
                                ->scalarNode('h5')->end()
                                ->scalarNode('h6')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addInlineText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('inlineText')
                    ->children()
                        ->arrayNode('inline')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('marked')->end()
                                ->scalarNode('deleted')->end()
                                ->scalarNode('strike')->end()
                                ->scalarNode('inserted')->end()
                                ->scalarNode('underlined')->end()
                                ->scalarNode('small')->end()
                                ->scalarNode('bold')->end()
                                ->scalarNode('italic')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTransformText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('transformText')
                    ->children()
                        ->arrayNode('transform')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('lower')->end()
                                ->scalarNode('upper')->end()
                                ->scalarNode('capital')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addAlignmentText(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('alignmentText')
                    ->children()
                        ->arrayNode('alignment')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('left')->end()
                                ->scalarNode('right')->end()
                                ->scalarNode('center')->end()
                                ->scalarNode('justify')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addList(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('list')
                    ->children()
                        ->arrayNode('order')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('ordered')->end()
                                ->scalarNode('unordered')->end()
                            ->end()
                        ->end()
                        ->arrayNode('decoration')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('inline')->end()
                                ->scalarNode('unstyled')->end()
                                ->scalarNode('disc')->end()
                                ->scalarNode('square')->end()
                                ->scalarNode('circle')->end()
                                ->scalarNode('nothing')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTab(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tab')
                    ->children()
                        ->arrayNode('theme')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('tab')->end()
                                ->scalarNode('pill')->end()
                            ->end()
                        ->end()
                        ->arrayNode('style')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('vertical')->end()
                                ->scalarNode('justify')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTabTitle(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tabTitle')
                    ->children()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTabContent(ArrayNodeDefinition $frameworkNode) {
        $frameworkNode
            ->children()
                ->arrayNode('tabContent')
                    ->children()
                        ->arrayNode('state')
                            ->children()
                                ->scalarNode('default')->end()
                                ->scalarNode('active')->end()
                                ->scalarNode('disabled')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
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



