<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="validationapp.css">
    <script src="./validationapp.js"></script>
</head>
<body>
    <img src="\293 assignment2\layer.jpg" alt="">
    <div>
        <form action="" class="form">
            <div class="inputctrl"><p>NAME</p><input type="text" id = "name" placeholder="your name" name="name"></div>
            <div class="inputctrl"><P>EMAIL</P><input type="text" id ="email" placeholder="your email" name="email"></div>
            <div class="inputctrl"><P>PASSWORD:</P><input type="password" id ="password" name="password"></div>
            <div class="inputctrl"><P>PHONE NUMBER</P><input type="text" id = "phonenumber" name="phone"></div>
            <div class="inputctrl"><P>GENDER</P>Male:<input type="radio" name ="gender" id="gender" value="male"> Female: <input type="radio" name ="gender" value="female"> Other:<input type="radio" name ="gender" value="other"></div>
            <div class="inputctrl"><P>LANGUAGE</P><select name="" id=""><option value="" name="language">Select language</option></select></div>
            <div class="inputctrl"><P>ZIP CODE</P> <input type="text" id="zipcode"name="zip"></div>
            <div class="inputctrl"><P>ABOUT</P><textarea name="" id="" cols="30" rows="5">Write about yourself...</textarea name="about"></div>
            <button type="submit" class="register">REGISTER</button>
        </form>
    </div>
</body>
</html>