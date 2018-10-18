<!-- File: src/Template/Recipes/add.ctp -->

<h1>Add Recipe</h1>
<?php
    echo $this->Form->create($recipe);
    echo $this->Form->control('mailAddress');
    echo $this->Form->control('areaName');
    echo $this->Form->control('status');
    echo $this->Form->control('memo', ['rows' => '3']);
    echo $this->Form->button(__('Save Recipe'));
    echo $this->Form->end();
?>