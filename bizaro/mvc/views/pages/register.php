<section id="register">
    <div class="container">
        <center>
            <h3>Đăng Ký</h3>
        </center>
        <form action="checkregister" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="confirm">Confirm Password</label>
                <input type="password" class="form-control" name="confirm">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3" name="btnRegister">Register</button>
        </form>
    </div>
</section>