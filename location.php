<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post" action="validation.php">
    <div class="Form">
    <div class="Form-Item">
        <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>国/地域
        </p>
        <input type="text" class="Form-Item-Input" name="country" placeholder="日本 - JP" disabled>
    </div>
    <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>郵便番号</p>
        <input type="text" class="Form-Item-Input" name="post_code" placeholder="例）012-3456" required>
    </div>
    <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>都道府県</p>
        <input type="text" class="Form-Item-Input" name="province" placeholder="例）東京都" required>
    </div>
    <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>市/郡/区</p>
        <input type="text" class="Form-Item-Input" name="city" placeholder="例）渋谷区" required>
    </div>
    <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>番地</p>
        <input type="text" class="Form-Item-Input" name="address_line1" placeholder="例）１丁目１番地" required>
    </div>
    <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Optional">任意</span>建物名、部屋番号</p>
        <input type="text" class="Form-Item-Input" name="address_line2" placeholder="例）１０１号室">
    </div>
    <!-- <div class="Form-Item">
        <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
        <textarea class="Form-Item-Textarea"></textarea>
    </div> -->
    <input type="submit" class="Form-Btn" value="送信する">
    </div>
</form>
    
</body>
</html>