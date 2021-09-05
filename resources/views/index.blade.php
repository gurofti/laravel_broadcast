<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusher</title>

    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="app">
        <header>
            <h1>Let's Talk!</h1>
            <input type="text" name="username" id="username" placeholder="Please enter a username...">
        </header>

        <div id="messages"></div>

        <form action="" id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message...">
            <button id="message_send">Send Message</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>
