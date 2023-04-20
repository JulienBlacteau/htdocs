<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>Create your server
            </h3>
            <form action="/index.php?action=..." method="post">

                <div class="mb-3">
                    <label for="name" class="form-label text-muted small text-uppercase">Name's Server</label>
                    <textarea type="name" required="required" class="form-control" id="name" rows="3" name="text"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">
                    The server is ready !</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>