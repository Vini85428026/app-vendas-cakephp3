<h2>Visualizar posts</h2>

<h2><?=$post->titulo ?></h2>
<small><?=$post->created ?></small>
<p><?=$post->texto ?></p>
<br/>

<h5><?= $this->Html->link('Voltar a lista', ['controller'=>'Posts', 'action'=>'index']) ?></h5>