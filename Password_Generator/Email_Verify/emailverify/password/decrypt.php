<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include('function/function.php');
if($_POST['text'] || $_POST['key']){
    $decrypted_txt = encrypt_decrypt('decrypt', $_POST['text'], $_POST['key']);
}
?>
<div>
    <form method="POST">
        <p><span style="color: red; font-size: 20px;"> The Copied Password past on textarea  & <br> Click on Decrypt password Button Give <br> the key value Enter in Key box.</span></p><br>
        <textarea name="text" rows="5" cols="30" placeholder="Write text here (for decryption)"><?= $_POST['text'] ?></textarea><br/>
        <input name="key" placeholder="key" type="text" value="<?= $_POST['key'] ?>" /><br/><br/>
        <button class="btn">Decrypt Text</button><br/>
            <textarea disabled name="decryptedText" id="decryptedText" rows="5" cols="30"><?= $decrypted_txt ?></textarea><br>
            <button type="button" onclick="copyText()" class="btn" >Copy</button>
    </form>
    <form method="post" action="contect.html">
        <button class="btn">Exit</button>
    </form>
</div>

<script>
    function copyText() {
        var textarea = document.getElementById("decryptedText");
        textarea.select();
        document.execCommand("copy");
        alert("Copied the text: " + textarea.value);
    }
</script>
    

</body>
</html>
