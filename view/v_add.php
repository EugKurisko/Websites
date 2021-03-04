<form method="post">
    Name: <br><input type="text" name="name" value="<?=$fields['name']?>"><br>
    Text: <br><textarea name="text" value="<?=$fields['text']?>"></textarea><br>
    Category: <br>
    <select name="id_cat">
        <?php foreach($cats as $cat): ?>
            <option value="<?=$cat['id_cat']?>" 
            <?=($cat['id_cat'] == $fields['id_cat'] ? 'selected' : '')?>>
                <?=$cat['cat_name'] ?>
            </option>
        <?php endforeach;?>
    </select>
    <button type="submit" name="submit">Send</button>
    <div class="error-list">
        <?php foreach($validateErrors as $error):?> 
            <p><?=$error?></p>
        <?php endforeach;?>
    </div>
</form>