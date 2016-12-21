<?php
    if($this->Force2FAHelper->checkAndRedirect()) {
        header("Location: " . $this->url->to('TwoFactorController', 'index', array('user_id' => $user['id'])));

        exit();
    }
?>
