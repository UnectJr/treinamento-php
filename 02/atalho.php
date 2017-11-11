<?php
	$loggedIn =  true;
	$arr = [1,2,3,4,5];
?>

<!-- Syntax 1 -->
<div>
<?php if($loggedIn) { ?>
	<h1>Bem Vindo Usuário</h1>
<?php } else { ?>
	<h1>Bem Vindo Convidado</h1>
<?php } ?>
</div>


<!-- Syntax 2 -->
<div>
<?php if($loggedIn): ?>
	<h1>Welcome User</h1>
<?php else: ?>
	<h1>Welcome Guest</h1>
<?php endif; ?>
</div>


<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<div>
<?php for($i = 0;$i < 10;$i++): ?>
	<li><?php echo $i; ?></li>
<?php endfor; ?>
</div>