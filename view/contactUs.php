<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>Contact Us !
            </h3>
            <p class="text-muted">What is your request ?</p>
            <form action="./loginView.php" method="post">
                <div class="mb-3">
                    <label for="category" class="form-label text-muted small text-uppercase">What can we help you with?</label>
                    <select required="required" class="form-control" id="category" name="category">
                        <option>Help & Support</option>
                        <option>Hacked Account</option>
                        <option>Trust & Safety</option>
                        <option>Billing</option>
                        <option>Community Programs</option>
                        <option>Bug Reporting</option>
                        <option>Translation Error</option>
                        <option>Creator Support</option>
                        <option>Developer Compliante</option>
                        <option>Developer Support</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="email" class="form-label text-muted small text-uppercase">Your email address</label>
                    <input type="email" required="required" class="form-control" id="email" name="email"/>
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label text-muted small text-uppercase">Write your text</label>
                    <textarea type="text" required="required" class="form-control" id="text" rows="3" name="text"></textarea>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-primary btn-lg btn-block w-100" data-bs-toggle="modal" data-bs-target="#modalWindow">
                    Submit & Return to the homepage</button>
                </div>

                <div class="modal fade" id="modalWindow" aria-labelledby="modal exemple" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Congratulations !</h3>
                            </div>
                            <div class="modal-body">
                                <p>Your request has been taken into account, we will answer you as soon as possible</p>
                            </div>
                            <div class="modal-footer">
                                <a href="./loginView.php" class="text-muted">Return to the homepage</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>