<div class="users form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    

    <?= $this->Form->end() ?>
</div>