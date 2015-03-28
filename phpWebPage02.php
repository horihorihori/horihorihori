<!DOCTYPE html>
<html>
        <?php include 'include.php'; 
        print "<br/>";
        ?>
    
    <br/>    
    <h1>お問い合わせ</h1>
    <br/>
    
        <?php
        $nickname = $_POST["nickname"];
        $email = $_POST["email"];
        $naiyou = $_POST["naiyou"];
        
        if ($nickname == "") {
            print "名前を入力してください";
            print "<form>";
            print "<input type='button' onclick='history.back()' value='戻る' ";
            print"</form>";
        }else if ($naiyou == "") {
            print "内容を入力してください";
            print "<form>";
            print "<input type='button' onclick='history.back()' value='戻る' ";
            print"</form>";
        }else{
            print "<br/>";
            $nickname = htmlspecialchars($_POST['nickname']);
            $email = htmlspecialchars($_POST["email"]);
            $naiyou = htmlspecialchars($_POST["naiyou"]);
            print $nickname;
            print " 様<br/>";
            print "メールアドレス　";
            print $email;
            print "<br/><br/>";
            print "お問い合わせ内容<br/>";
            print $naiyou;
            print "<br/><br/>";
            //ボタン
            print "<form method='post' action='thanks.php'>";
            print "<input type='button' onclick='history.back()' value='戻る'> ";
            print "<input type='submit' value='OK'>";
            print "<input type='hidden' name='honbun' value='".$nickname."　".$email."　".$naiyou."'>";
            print "</form>";
            
        }
        ?>
        <br/><br/>
    <?php include 'footer.php'; ?>
    </body>
</html>
