<!-- File: src/Template/Recipes/index.ctp  (edit links added) -->

<h1>Imadoko recipes</h1>
<p><?= $this->Html->link("Add Recipe", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>mailAddress</th>
        <th>areaName</th>
        <th>status</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

<!-- Here's where we iterate through our $recipes query object, printing out recipe info -->

<?php foreach ($recipes as $recipe): ?>
    <tr>
        <td><?= $recipe->id ?></td>
        <td>
            <?= $this->Html->link($recipe->mailAddress, ['action' => 'view', $recipe->id]) ?>
        </td>
        <td>
            <?= $this->Html->link($recipe->areaName, ['action' => 'view', $recipe->id]) ?>
        </td>
        <td>
            <?= $this->Html->link($recipe->status, ['action' => 'view', $recipe->id]) ?>
        </td>
        <td>
            <?= $recipe->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $recipe->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $recipe->id]) ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>