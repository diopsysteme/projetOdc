<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>login</title>
    <link rel="stylesheet" href="projet.css">
    <script src="https://kit.fontawesome.com/729c991e7f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login">
        <div class="logo"><img src="logoS.png" alt=""></div>
        <form action="template2.php" method="POST">
            <div class="contLog">
                <?php if(isset($_SESSION["error"])) {?>
                    <div class="error"><span class="textIntern"><?=$_SESSION["error"]?></span></div>
                <?php }?>
                <div class="left"><span >Email</span> <span class="red">*</span></div>
                <div class="input">
                    <input type="mail" name="mail"  placeholder="Enter email address "> 
                    <span class="red" style="position: absolute;left:29%;"> *</span>
                </div>
                <div class="left"><span >Password</span><span class="red"> *</span></div>
                <div class="input">
                    <input type="password" name="password"  placeholder="Enter your password"><span class="red" style="position: absolute;left:30%;"> *</span>
                    <span class="icon"><i class="fa-solid fa-eye-slash"></i></span>
                </div>
                <section class="diop"></section>
            </div>
            <div class="rembFog">
                <span><input type="checkbox" class="textIntern" id="5" name="remember"><label for="5">Remember me</label></span>
                <span><a href="#" class="textIntern">Forgot password?</a></span>
            </div>
                <button type="submit" name="login" class="btn">Log In</button>
        </form>
    </div>
</body>
</html>
<style>
  
</style>