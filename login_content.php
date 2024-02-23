<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <form id="login_form">
        <input type="email" name="email_input" id="email_input" require>
        <input type="password" name="password_input" id="password_input" require>
        <button value="submit">login</button>
    </form>
</body>
<script>
    $(document).ready(()=>{
        $("#login_form").on('submit', e=>{
            e.preventDefault();
            var email = $("#email_input").val();
            var password = $("#password_input").val();
            $.ajax({
                url: 'includes/loginClass_inc.php',
                type: 'POST',
                data: {
                    email : email,
                    password : password
                },
                cache: false,
                success: res=>{
                    console.log(res);
                }
            })
        })
    })
</script>
</html>