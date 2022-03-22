<?php

namespace PGMB\Configuration;

use  PGMB\DependencyInjection\Container ;
use  PGMB\DependencyInjection\ContainerConfigurationInterface ;
use  PGMB\Plugin ;
use  PGMB\PostTypes\GooglePostEntity ;
use  PGMB\PostTypes\GooglePostEntityRepository ;
use  PGMB\PostTypes\SubPost ;
use  PGMB\PostTypes\SubPostRepository ;
class PostTypeConfiguration implements  ContainerConfigurationInterface 
{
    public function modify( Container $container )
    {
        $container['repository.post_entities'] = $container->service( function ( Container $container ) {
            return new GooglePostEntityRepository( new \WP_Query() );
        } );
        $container['repository.subposts'] = $container->service( function ( Container $container ) {
            return new SubPostRepository( new \WP_Query() );
        } );
        $container['enabled_post_types'] = $container->service( function ( Container $container ) {
            $enabled_post_types = array_values( (array) $container['wedevs_settings_api']->get_option( 'post_types', 'mbp_post_type_settings', [ 'post' ] ) );
            return apply_filters( 'mbp_post_types', $enabled_post_types );
        } );
    }

}