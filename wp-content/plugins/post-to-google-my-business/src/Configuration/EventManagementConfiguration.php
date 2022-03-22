<?php

namespace PGMB\Configuration;

use  PGMB\Subscriber\CalendarFeedAjaxSubscriber ;
use  PGMB\DependencyInjection\Container ;
use  PGMB\DependencyInjection\ContainerConfigurationInterface ;
use  PGMB\EventManagement\EventManager ;
use  PGMB\Metabox\Main ;
use  PGMB\Subscriber\AdminPageSubscriber ;
use  PGMB\Subscriber\AuthenticationAdminPostSubscriber ;
use  PGMB\Subscriber\ConditionalNotificationSubscriber ;
use  PGMB\Subscriber\PostEntityListAjaxSubscriber ;
use  PGMB\Subscriber\PostStatusSubscriber ;
use  PGMB\Subscriber\PostTypesSubscriber ;
use  PGMB\Subscriber\SubPostListAjaxSubscriber ;
use  PGMB\Upgrader\UpgradeBackgroundProcess ;
use  PGMB\Upgrader\Upgrader ;
class EventManagementConfiguration implements  ContainerConfigurationInterface 
{
    public function modify( Container $container )
    {
        $container['event_manager'] = $container->service( function ( Container $container ) {
            return new EventManager();
        } );
        $container['setting.delete_gmb_posts'] = $container->service( function ( Container $container ) {
            return $container['wedevs_settings_api']->get_option( 'delete_gmb_posts', 'mbp_misc', 'on' ) === 'on';
        } );
        $container['upgrade_background_process'] = $container->service( function ( Container $container ) {
            return new UpgradeBackgroundProcess( 'mbp' );
        } );
        $container['subscribers'] = $container->service( function ( Container $container ) {
            $subscribers = [
                new AuthenticationAdminPostSubscriber( $container['proxy_auth_api'], $container['user_manager'] ),
                new CalendarFeedAjaxSubscriber( $container['repository.subposts'] ),
                new Upgrader(
                $container['upgrade_background_process'],
                $container['plugin_version'],
                'mbp',
                $container['available_upgrades']
            ),
                new Main(
                $container['wedevs_settings_api'],
                $container['google_my_business_api'],
                $container['plugin_version'],
                $container['component.post_editor'],
                $container['enabled_post_types'],
                $container['plugin_path'],
                $container['plugin_url']
            ),
                new PostStatusSubscriber(
                $container['post_publishing_process'],
                $container['repository.post_entities'],
                $container['default_location'],
                $container['setting.delete_gmb_posts']
            ),
                new SubPostListAjaxSubscriber( $container['repository.subposts'] ),
                new PostEntityListAjaxSubscriber( $container['repository.post_entities'], $container['google_my_business_api'] ),
                new AdminPageSubscriber(
                $container['dashboard_page'],
                $container['admin_pages'],
                $container['plugin_dashicon'],
                $container['notification_manager']
            ),
                new ConditionalNotificationSubscriber( $container['notification_manager'] )
            ];
            $subscribers[] = new PostTypesSubscriber();
            return $subscribers;
        } );
    }

}