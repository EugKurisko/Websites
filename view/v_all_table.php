<main>
	<h1>Chat in table</h1>
	<hr>
	<a href="<?=BASE_URL?>">View as list</a>
	<hr>
	<table class="table table-bordered">
		<tbody>
		<?php foreach($messages as $message): ?>
			<tr>
				<td><?=$message['name']?></td>
				<td><?=$message['dt']?></td>
				<td><?=$message['text']?></td>
                <td><a href="<?=BASE_URL?>message/<?=$message['id']?>/<?=$message['id_cat']?>">Read article</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</main>