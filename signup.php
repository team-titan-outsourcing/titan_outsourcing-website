<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <title>Signup</title>
</head>
<body>
    <form id="submit">
        <input type="text" name="name_input" id="name_input" require>
        <input type="number" name="number_input" id="number_input" require>
        <input type="email" name="email_input" id="email_input" require>
        <input type="password" name="password_input" id="password_input" require>
        <button value="submit">Sign up</button>
    </form>
</body>
<script>
    $(document).ready(()=>{
        $("#submit").on('submit', e=>{
            e.preventDefault();
            var name = $("#name_input").val();
            var number = $("#number_input").val();
            var email = $("#email_input").val();
            var password = $("#password_input").val();
            $.ajax({
                url: 'includes/signupclass_inc.php',
                type: 'POST',
                data: {
                    name : name,
                    number : number,
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