<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Document</title>	
</head>
<body>
 	<h1>
	<?= "Using seperation of concerns: , ".htmlspecialchars($_GET['user'].$greeting);
		?>
	</h1>
	<?= "Using Arrays: "?>
	<ul>
		<?php foreach($names as $name): ?>
			<li><?= $name; ?></li>
		<?php endforeach; ?>
	</ul>
	<?= "Using associated arrays";?>
	<ul>
		<?php foreach($person as $feature => $val):?>
			<li><h1><?=$feature?></h1><?=$val;?></li>
		<?php endforeach; ?>
	</ul>
	<ul>
		<?php foreach ($tasks as $task) : ?>
				<li>
					<?php if($task->isCompleted()): ?>
						<strike>
						<?=$task->getDescription();?>
						</strike>
					<?php else:?>
						<?=$task->getDescription();?>
					<?php endif; ?>
				</li>
		<?php endforeach ?>
	</ul>
</body>
</html>