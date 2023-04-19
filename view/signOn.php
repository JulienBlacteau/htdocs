<?php ob_start(); ?> 

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>Hello !
            </h3>
            <p class="text-muted"> Please sign on to join us! </p> 
            <form action="/index.php?action=signOn" method="post">
                <div class="mb-3">
                    <label for="pseudo" class="form-label text-muted small text-uppercase">pseudo</label>
                    <input type="text" class="form-control" id="email" name="pseudo"required />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-muted small text-uppercase">Email</label>
                    <input type="email" class="form-control" id="password" name="email" required />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted small text-uppercase">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign on</button>
                </div>

            </form>
            
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?> 

<?php require( __DIR__ . '/base.php'); ?>
