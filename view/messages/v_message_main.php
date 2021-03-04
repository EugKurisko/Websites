<div>
    <p><?=$message['name']?></p><br>
    <p><?=$message['text']?></p><br>
    <p><?=$message['dt']?></p><br>
    Category: <a href="<?=BASE_URL?>categories/<?=$message['id_cat']?>"><?=$cat['cat_name']?></a>
</div>
<hr>
<a href="<?=BASE_URL?>">Main page</a>