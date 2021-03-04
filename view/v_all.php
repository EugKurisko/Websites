<main>
    <h1>Chat</h1>
    <a href="<?=BASE_URL?>?view=table">View as table</a>
    <div>
    <?php foreach($messages as $message):?>
    <div>
        <strong><?=$message['name']?></strong><br>
        <em><?=$message['dt']?></em>
        <div>
            <?=$message['text']?>
            <a href="<?=BASE_URL?>message/<?=$message['id']?>/<?=$message['id_cat']?>">Read article</a>
        </div>
    </div>
    <hr>
    <?php endforeach;?>
    </div>
</main>