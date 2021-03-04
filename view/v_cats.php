<?php foreach($messages as $message): ?>
    <p><?=$message['name']?></p>
    <p><?=$message['text']?></p>
    <p><?=$message['dt']?></p>
    <hr>
<?php endforeach;?>