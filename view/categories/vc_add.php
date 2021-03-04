<form method="post">
    Name: <br><input type="text" name="cat_name" value="<?=$fields['cat_name']?>"><br>
    <button type="submit" name="submit">Send</button>
    <div class="error-list">
        <?php foreach($validateErrors as $error):?> 
            <p><?=$error?></p>
        <?php endforeach;?>
    </div>
</form>