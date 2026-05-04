<header class="main">
    <h1>User Form</h1>
    <?php if($message): ?> 
        <div class="box confirmation">
            <?= $message ?>
        </div>
    <?php endif; ?>     
    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-8 col-12-xsmall">
                <label>Name:</label>
                <input required type="text" maxlength="100" name="name" id="name" value="<?= $user->getName() ?>" placeholder="Name" />
            </div>
            <div class="col-4 col-12-xsmall">
                <label>Birth date:</label>
                <input type="date" name="birthdate" id="birthdate" value="<?= $user->getBirthDate() ?>" placeholder="Birth date" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>Email:</label>
                <input required type="email" maxlength="100" name="email" id="email" value="<?= $user->getEmail() ?>" placeholder="Email" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>Phone Number:</label>
                <input type="text" maxlength="20" name="phone" id="phone" value="<?= $user->getPhone() ?>" placeholder="Phone Number: (00) 00000-0000" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>Postal Code:</label>
                <input type="text" maxlength="20" name="postalcode" id="postalcode" value="<?= $user->getPostalCode() ?>" placeholder="Postal Code: 00000-000" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>Street:</label>
                <input readonly type="text" name="street" id="street" value="" placeholder="" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>Neighbourhood:</label>
                <input readonly type="text" name="neighbourhood" id="neighbourhood" value="" placeholder="" />
            </div>
            <div class="col-6 col-12-xsmall">
                <label>City:</label>
                <input readonly type="text" name="city" id="city" value="" placeholder="" />
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Save" class="primary" /></li>
                    <li><a href="index.php?<?= http_build_query(['controller' => 'user', 'action' => 'list']) ?>" class="button">Cancel</a></li>
                </ul>
            </div>
        </div>
    </form>
</header>

<script src="views/js/viacep.js"></script>
<script src="views/js/user/postalcodetrigger.js"></script>