<!-- File: src/Template/Recipes/edit.ctp -->

<h1>Edit Recipe</h1>
<?php
    echo $this->Form->create($recipe);
    echo $this->Form->control('mailAddress');
    echo $this->Form->control('areaName');
    echo $this->Form->control('status');
    echo $this->Form->control('memo', ['rows' => '3']);
    echo $this->Form->button(__('Save Recipe'));
    echo $this->Form->end();
?>