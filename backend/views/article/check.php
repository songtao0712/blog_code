

<h2 class="text-center"><b><?=$model->title;?></b></h2>
<hr/>
<h4>作者：<?=$model->author;?></h4>

<h4>添加时间：<?=date('Y/m/d H:i:s',$model->create_at);?></h4>
<hr/>
<p><?=$model->content;?></p>