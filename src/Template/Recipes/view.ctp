<!-- File: src/Template/Articles/view.ctp -->

<h1><?= h($article->mailAddress) ?></h1>
<h1><?= h($article->areaName) ?></h1>
<h1><?= h($article->status) ?></h1>
<p><?= h($article->memo) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>