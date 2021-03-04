<form method="POST">
    <input type="text" name="cat_name" value="<?=$category['cat_name']?>"><br>
    <input type="submit">
</form>
<div class="error-list">
    <?php foreach($validateErrors as $error):?> 
        <p><?=$error?></p>
    <?php endforeach;?>
</div>