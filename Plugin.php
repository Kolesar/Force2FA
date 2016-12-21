<?php

namespace Kanboard\Plugin\Force2FA;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('Force2FAHelper', '\Kanboard\Plugin\Force2FA\Helper\Force2FAHelper');
        $this->template->hook->attach('template:config:application', 'Force2FA:config/application');
        $this->template->hook->attach('template:layout:head', 'Force2FA:layout/head');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Force2FA';
    }

    public function getPluginDescription()
    {
        return t('Force all users to use 2FA');
    }

    public function getPluginAuthor()
    {
        return 'Asim Husanović <asim.husanovic@atom.solutions>';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }
}
