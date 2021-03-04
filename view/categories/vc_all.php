<main>
    <h1>Chat</h1>
    <div>
    <?php foreach($categories as $cat):?>
    <div>
        <strong><?=$cat['cat_name']?></strong><br>
        <a href="<?=BASE_URL?>category/<?=$cat['id_cat']?>">Edit/Delete category</a>
    </div>
    <hr>
    <?php endforeach;?>
    </div>
</main>