<?php

namespace Kanboard\Plugin\Force2FA\Helper;

use Kanboard\Core\Base;

class Force2FAHelper extends Base
{
    public function checkAndRedirect()
    {
        $user = $this->userSession->getAll();
        if(($user && $user['id'] != 1) &&
            $this->router->getController() != "TwoFactorController" &&
            $this->configModel->get('force2fa', '0') == 1 &&
            $user['twofactor_activated'] == 0) {

            return true;
        }
    }
}
