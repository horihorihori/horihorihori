<!DOCTYPE html>
<html>
        <?php include 'include.php'; 
        print "<br/>";
        ?>
    
    <br/>    
    <h1>お問い合わせ</h1>
    <br/>
        <?php
        print "お問い合わせ承りました。";
        
        $honbun = $_POST["honbun"];
        
        $mail_sub = "お問い合わせ";
        $mail_body = $honbun;
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        mb_send_mail("m0112376c9@edu.teu.ac.jp", $mail_sub, $mail_body,"from:horihorihori");
        ?>
        <br/><br/>
    <?php include 'footer.php'; ?>
    </body>    
</html>
