<!DOCTYPE html>
<html>
        <?php include 'include.php'; ?>
    <br/>    
    <h1>お問い合わせ</h1>
    <br/>
        <form method="post" action="phpWebPage02.php">
                *お名前
                <br/>
                <input name="nickname" type="text" style="width:100px">
                <br/>            
                メールアドレス
                <br/>
                <input name="email" type="text" style="width: 200px">
                <br/>
                *お問い合わせ内容
                <br>
		<textarea name="naiyou" cols="60" rows="5"></textarea>
            <br/>
            <input type="submit" value="送信">
        </form>
        <br/><br/>
    <?php include 'footer.php'; ?>
    </body>
</html>
