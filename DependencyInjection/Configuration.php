<?php

namespace Kamran\CodeMirrorBundle\DependencyInjection;

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
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('kamran_code_mirror');
        $rootNode
            ->children()
              ->arrayNode('mode_path')->isRequired()
                ->requiresAtLeastOneElement()
                ->prototype('scalar')->end()
              ->end()
              ->arrayNode('theme_path')->isRequired()
                ->requiresAtLeastOneElement()
                 ->prototype('scalar')->end()
              ->end()
              ->arrayNode('parameters')
                ->prototype('scalar')->end()
              ->end()
              
            ->end();

        return $treeBuilder;
    }
}
