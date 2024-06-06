<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct access
defined('_JEXEC') or die('restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\Installer;

class com_sppagebuilderInstallerScript
{

    /**
     * method to uninstall the component
     *
     * @return void
     */

    public function uninstall($parent)
    {
        $db = Factory::getDBO();
        $status = new stdClass;
        $status->modules = array();
        $manifest = $parent->getParent()->manifest;

        // Start Uninstall Plugins
        // Please don't remove or update comments
        // it's important for building process in gulpfile
        $plugins = $manifest->xpath('plugins/plugin');
        foreach ($plugins as $plugin)
        {
            $name = (string)$plugin->attributes()->name;
            $group = (string)$plugin->attributes()->group;

            $db = Factory::getDbo();
            $query = $db->getQuery(true);
            $query->select($db->quoteName(array('extension_id')));
            $query->from($db->quoteName('#__extensions'));
            $query->where($db->quoteName('type') . ' = ' . $db->quote('plugin'));
            $query->where($db->quoteName('element') . ' = ' . $db->quote($name));
            $query->where($db->quoteName('folder') . ' = ' . $db->quote($group));
            $db->setQuery($query);
            $extensions = $db->loadColumn();

            if (count((array) $extensions))
            {
                foreach ($extensions as $id)
                {
                    $installer = new Installer;
                    $result = $installer->uninstall('plugin', $id);
                }
                $status->plugins[] = array('name' => $name, 'result' => $result);
            }
        }
        // End Uninstall Plugins

        // Uninstall Modules
        $modules = $manifest->xpath('modules/module');
        foreach ($modules as $module)
        {
            $name = (string)$module->attributes()->module;
            $client = (string)$module->attributes()->client;
            $db = Factory::getDBO();
            $query = "SELECT `extension_id` FROM `#__extensions` WHERE `type`='module' AND element = " . $db->Quote($name) . "";
            $db->setQuery($query);
            $extensions = $db->loadColumn();
            if (count((array) $extensions))
            {
                foreach ($extensions as $id)
                {
                    $installer = new Installer;
                    $result = $installer->uninstall('module', $id);
                }
                $status->modules[] = array('name' => $name, 'client' => $client, 'result' => $result);
            }
        }
    }

    /**
     * method to run after an install/update/uninstall method
     *
     * @return void
     */

    public function postflight($type, $parent)
    {

        if ($type == 'uninstall')
        {
            return true;
        }

        $status = new stdClass;
        $status->modules = array();
        $src = $parent->getParent()->getPath('source');
        $manifest = $parent->getParent()->manifest;

        // Delete Old Modules
        $this->deleteExtension('mod_sppagebuilder_admin_menu');
        $this->deleteExtension('mod_sppagebuilder_icons');

        // Start Install Plugins
        // Please don't remove or update comments
        // it's important for building process in gulpfile
        $plugins = $manifest->xpath('plugins/plugin');
        foreach ($plugins as $plugin)
        {
            $name = (string)$plugin->attributes()->name;
            $group = (string)$plugin->attributes()->group;
            $activate = (string)$plugin->attributes()->activate;
            $path = $src . '/plugins/' . $group . '/' . $name;

            $installer = new Installer;
            $result = $installer->install($path);

            if ($result && $activate == "true")
            {
                $db = Factory::getDbo();
                $query = $db->getQuery(true);
                $fields = array($db->quoteName('enabled') . ' = 1');

                $conditions = array(
                    $db->quoteName('type') . ' = ' . $db->quote('plugin'),
                    $db->quoteName('element') . ' = ' . $db->quote($name),
                    $db->quoteName('folder') . ' = ' . $db->quote($group)
                );

                $query->update($db->quoteName('#__extensions'))->set($fields)->where($conditions);
                $db->setQuery($query);
                $db->execute();
            }
        }
        // End Install Plugins

        // Install Modules
        $modules = $manifest->xpath('modules/module');
        foreach ($modules as $module)
        {
            $name = (string)$module->attributes()->module;
            $client = (string)$module->attributes()->client;
            $path = $src . '/modules/' . $client . '/' . $name;

            $activate = (string)$module->attributes()->activate;
            $position = (isset($module->attributes()->position) && $module->attributes()->position) ? (string)$module->attributes()->position : '';
            $ordering = (isset($module->attributes()->ordering) && $module->attributes()->ordering) ? (string)$module->attributes()->ordering : 0;
            $platform = (isset($module->attributes()->platform) && $module->attributes()->platform) ? (string)$module->attributes()->platform : 'universal';

            $installer = new Installer;
            $result = $installer->install($path);

            if ($client === 'administrator')
            {
                $db = Factory::getDbo();
                $query = $db->getQuery(true);
                $fields = array();

                $fields[] = $db->quoteName('published') . ' = 1';

                if ($position)
                {
                    $fields[] = $db->quoteName('position') . ' = ' . $db->quote($position);
                }

                if ($ordering)
                {
                    $fields[] = $db->quoteName('ordering') . ' = ' . $db->quote($ordering);
                }

                $conditions = array(
                    $db->quoteName('module') . ' = ' . $db->quote($name)
                );

                $query->update($db->quoteName('#__modules'))->set($fields)->where($conditions);
                $db->setQuery($query);
                $db->execute();

                // Retrieve ID
                $db = Factory::getDbo();
                $query = $db->getQuery(true);
                $query->select($db->quoteName(['id']));
                $query->from($db->quoteName('#__modules'));
                $query->where($db->quoteName('module') . ' = ' . $db->quote($name));
                $db->setQuery($query);
                $id = (int) $db->loadResult();

                if ($id)
                {
                    $db = Factory::getDbo();
                    $db->setQuery("INSERT IGNORE INTO #__modules_menu (`moduleid`,`menuid`) VALUES (" . $id . ", 0)");
                    $db->execute();
                }
            }
        }
    }

    private function deleteExtension($extension)
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array('extension_id')));
        $query->from($db->quoteName('#__extensions'));
        $query->where($db->quoteName('type') . ' = ' . $db->quote('module'));
        $query->where($db->quoteName('element') . ' = ' . $db->quote($extension));
        $db->setQuery($query);
        $id = (int) $db->loadResult();

        if (!empty($id))
        {
            $installer = new Installer;
            $installer->uninstall('module', $id);
        }
    }
}
