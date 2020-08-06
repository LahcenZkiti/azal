<div class="container">
    <form class="post mb-5" id="login" name="form" action="<?php echo home_url(); ?>/login/" method= "post">
        <div class="form-group">
            <label for="username">Username(test)</label>
            <input id="username" type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>