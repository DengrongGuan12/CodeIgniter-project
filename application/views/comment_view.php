<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
	<h1><?=$heading?></h1>
	<?php if($query->num_rows() > 0):?>
	<?php foreach($query->result() as $row):?>
	<h3><?=$row->body?></h3>
	<p><?=$row->author?></p>
	
	<hr>
	<?php endforeach;?>
<?php endif;?>
	<p><?=anchor('blog','Back to blog');?></p>
	<?=form_open('blog/comment_insert');?>
	<?=form_hidden('entry_id',$this->uri->segment(3));?>
	<p><textarea name="body" rows="10"></textarea></p>
	<p><input type="text" name="author"></p>
	<p><input type="submit" value="Submit Comment"></p>

</body>
</html>