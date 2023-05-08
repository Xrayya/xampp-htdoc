<h2>Login</h2>
<form action="index.php?url=Home/authenticate" method="post" style="display: flex; flex-direction: column;">
    <div>
        <label for="nim">NIM: </label>
        <input type="text" id="nim" name="nim">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="Login" style="width: fit-content;">
</form>
