<?php

namespace PGMB\Configuration;

use  PGMB\BackgroundProcessing\PostPublishProcess ;
use  PGMB\DependencyInjection\Container ;
use  PGMB\DependencyInjection\ContainerConfigurationInterface ;
use  PGMB\Upgrader\Upgrade_2_2_11 ;
use  PGMB\Upgrader\Upgrade_2_2_3 ;
use  PGMB\Upgrader\Upgrade_3_0_0 ;
class BackgroundProcessConfiguration implements  ContainerConfigurationInterface 
{
    public function modify( Container $container )
    {
        $container['post_publishing_process'] = $container->service( function ( Container $container ) {
            $api = $container['google_my_business_api'];
            return new PostPublishProcess( $api, $container['repository.post_entities'], $container['admin_notice_store'] );
        } );
        $container['default_location'] = function ( Container $container ) {
            return $container['wedevs_settings_api']->get_option( 'google_location', 'mbp_google_settings', false );
        };
        $container['available_upgrades'] = [
            '2.2.3'  => function () use( $container ) {
            return new Upgrade_2_2_3( $container['plugin_upgrader'] );
        },
            '2.2.11' => function () use( $container ) {
            return new Upgrade_2_2_11( $container['wedevs_settings_api'], $container['notification_manager'] );
        },
            '3.0.0'  => function () use( $container ) {
            return new Upgrade_3_0_0(
                $container['admin_notice_store'],
                $container['repository.post_entities'],
                $container['proxy_auth_api'],
                $container['user_manager'],
                $container['notification_manager']
            );
        },
        ];
    }

}