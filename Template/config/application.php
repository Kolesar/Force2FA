<?= $this->form->label(t('Force user to use Two factor authentication'), 'force2fa') ?>
<?= $this->form->select('force2fa', ["Disable", "Enable"], $values, $errors) ?>
