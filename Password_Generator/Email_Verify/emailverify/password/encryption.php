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

if(isset($_POST['text']) && isset($_POST['key'])){
    $encrypted_txt = encrypt_decrypt('encrypt', $_POST['text'], $_POST['key']);
}
?>
<div >
    <form method="POST">

        <p><span style="color: red; font-size: 20px;"> The Copied Password past on textarea  & <br> Click on Encrypt password Button Give <br> the key  value and remember it.</span></p><br>
        <textarea name="text" rows="5" cols="30" placeholder="Write text here (for encryption)" ><?= $_POST['text'] ?></textarea><br/>
        <input name="key" placeholder="key" type="text" value="<?= $_POST['key'] ?>" /><br/><br/>
        <button class="btn">Encrypt Text</button><br/>
      
            <textarea readonly name="encryptedText" id="encryptedText" rows="5" cols="30" class="cointainer"><?= $encrypted_txt ?></textarea><br>
            <button type="button" onclick="copyText()" class="btn">Copy</button>
    </form>
    <form method="post" action="pass_save.html">
        <button class="btn">Stored For Future</button>
    </form>
</div>

<script>
    function copyText() {
        var textarea = document.getElementById("encryptedText");
        textarea.select();
        document.execCommand("copy");
        alert("Copied the text: " + textarea.value);
    }
</script>

</body>
</html>
