<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
		<title>Вход</title>
	</head>
	<body>
		<h2 style="text-align: center; padding-top: 100px;">Вход</h2>
		<form action="/functions/admin/admin.php" method="post" style="text-align: center; padding-top: 50px;">
			<div id = "form_group">
				<input type="text" name = "login" placeholder="Введите логин">
				<input type="password" name = "password" placeholder="Введите пароль">
				<button type="submit" class = "btn btn_primary">Вход</button>
			</div>
		</form>
	</body>
</html>

<style>

    @font-face {
        font-family: "Evolventa-Regular";
        src: url(./admin/fonts/Evolventa-Regular.otf);
    }

    body {
        background-color: #F3FAF9;
    }

    button {
        background-color: #0D244F;
    }

    h2 {
        color: #0D244F;
        margin-bottom: 0px;
        font-size: 28px;
    }

    input {
        width: 460px;
        height: 30px;
        font-size: 13px;
        background: white;
        border-radius: 25px;
        border: none;
        padding: 10px 20px;
        margin-bottom: 10px;
    }

    button {
        width: 500px;
        height: 50px;
        background-color: #0D244F;
        border: none;
        border-radius: 25px;
        margin: 10px 0 10px 0;
        font-size: 18px;
        font-family: "Evolventa-Regular";
        color: white;
        transition:transform 0.3s ease-out;
    }

    button:hover {
        cursor: pointer;
        transform:scale(1.05);
    }

    #form_group {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: center;
        justify-content: center;
    }

    @media only screen and (max-width: 640px) {
        h2 {
            font-size: 30px;
        }

        input {
            width: 310px;
            height: 30px;
            font-size: 13px;
        }

        button {
            width: 350px;
            height: 50px;
            font-size: 18px;
        }

    }
</style>