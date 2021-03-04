<form method="post">
    Name: <br><input type="text" name="name" value="<?=$fields['name']?>"><br>
    Text: <br><textarea name="text"><?=$fields['text']?></textarea><br>
    <button type="submit" name="submit">Send</button>
</form>
<div class="error-list">
    <?php foreach($validateErrors as $error):?> 
        <p><?=$error?></p>
    <?php endforeach;?>
</div>