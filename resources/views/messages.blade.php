<html>
<body>
<form action="{{route("message.store")}}" method="post">
    @csrf
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="message" placeholder="message">
    <button type="submit">envoyer</button>
</form>
</body>
</html>
