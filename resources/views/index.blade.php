<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
<div class="app">
    <h1>Chat</h1>
    <label>Username</label>
    <input type="text" name="username" id="username" placeholder="Username">

    <div id="messages"></div>

    <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Enter message here...">
        <button type="submit" id="message_send">Send Message</button>
    </form>
</div>

<script type="text/javascript" src="./js/app.js"></script>

</body>
</html>