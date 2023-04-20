<?php ob_start(); ?>

<div class="container-fluid d-flex h-100 characterBackground">
    <div class="row align-self-center w-100">
        <div class="col-4 mx-auto auth-container">
            <h3>Contact Us !
            </h3>
            <p class="text-muted">What is your request ?</p>
            <form action="/index.php?action=contact" method="post">
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
                    <button type="button" class="btn btn-primary btn-lg btn-block w-100">
                    Submit & Return to the homepage</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>