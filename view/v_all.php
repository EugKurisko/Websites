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
        <div>
            <?php if($user !== null):?>
                <?php if($user['id_user'] == $message['id_user']):?>
                    <div class="remove">
                        <a href="<?=BASE_URL?>delete/<?=$message['id']?>">Remove</a>
                    </div>
                    <a href="<?=BASE_URL?>edit/<?=$message['id']?>">Edit</a><br>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
    <hr>
    <?php endforeach;?>
    </div>
</main>