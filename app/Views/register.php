<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            position: relative;
            height: 100%;
            overflow: hidden;
        }

        img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            color: white;
            text-align: left;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            z-index: 2;
        }

        .rectangle {
            width: 60%;
            border-top: 3px solid #47b2e4;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
            background-color: white;
            width: 300px;
            height: 100vh;
            margin: 0 auto;
            margin-right: 60px;
            padding: 20px;
        }

        .register-form input {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
        }

        .rectangle h1 {
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="<?= base_url('img/bg.jpg') ?>" alt="">
    <div class="content">
        <div class="rectangle">
            <form class="register-form" action="/register/save" method="post">
                <h1>Join Us!</h1>
                <?php if (session()->get('errors')): ?>
                    <div class="error">
                        <?php foreach (session()->get('errors') as $error): ?>
                            <?= $error ?><br>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <input type="text" name="name" placeholder="Username" value="<?= old('name') ?>">
                <input type="text" name="position" placeholder="Position" value="<?= old('position') ?>">
                <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</div>
<script src="your-script.js"></script>
</body>
</html>
