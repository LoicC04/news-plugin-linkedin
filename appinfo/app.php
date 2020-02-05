<?php
/**
 * Nextcloud - News Plugin Linkedin
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
 *
 * @author Loic Carney <loic.carney@gmail.com>
 * @copyright 2020 Loic Carney
 */
namespace OCA\NewsPluginLinkedin\AppInfo;
use OCP\App;

if (App::isEnabled('news')&& class_exists('OCA\News\Plugin\Client\Plugin')) {
    \OCA\News\Plugin\Client\Plugin::registerScript('news-plugin-linkedin', 'script');
    \OCA\News\Plugin\Client\Plugin::registerStyle('news-plugin-linkedin', 'style');
}