<main id="signup" class="container">

    <div class="row">
    	<form id="signup-form" class="col-sm-6 col-sm-offset-3 form-horizontal" action="" method="post">
            <div class="alert <?= (!empty($errors))?"alert-danger":"" ?>">
    	        <?php foreach ($errors as $error) : ?>
    	            <p><?= $error ?></p>
    	        <?php endforeach; ?>
    	    </div>
    	    <div class="form-group">
                <h2>Inscription à bonne santé</h2>
    			<label class="control-label" for="firstName">Prénom *</label>
    			<input
                    type="text"
                    id="firstName"
                    class="form-control"
                    name="firstName"
                    value="<?= (isset($_POST["firstName"]))?$_POST["firstName"]:"" ?>"
                    placeholder="votre prenom">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="lastName">Nom *</label>
    			<input
                    type="text"
                    id="lastName"
                    class="form-control"
                    name="lastName"
                    value="<?= (isset($_POST["lastName"]))?$_POST["lastName"]:"" ?>"
                    placeholder="votre nom de famille">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="email">Email *</label>
    			<input
                    type="text"
                    id="email"
                    class="form-control"
                    name="email"
                    value="<?= (isset($_POST["email"]))?$_POST["email"]:"" ?>"
                    placeholder="votre adresse mail valide">
    		</div>
            <div class="form-group">
    			<label class="control-label" for="birth_date">Date d'anniversaire *</label>
    			<input
                    type="date"
                    id="birth_date"
                    class="form-control"
                    name="birth_date"
                    value="<?= (isset($_POST["birth_date"]))?$_POST["birth_date"]:"" ?>"
                    placeholder="votre adresse mail valide">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="password">Mot de passe</label>
    			<input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    value="<?= (isset($_POST["password"]))?$_POST["password"]:"" ?>"
                    placeholder ="8 caractères min">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="confirmPassword">Confirmer le mot de passe</label>
    			<input
                    type="password"
                    id="confirmPassword"
                    class="form-control"
                    name="confirmPassword"
                    value="<?= (isset($_POST["confirmPassword"]))?$_POST["confirmPassword"]:"" ?>"
                    placeholder ="confirmez le mot de passe">
    		</div>
            <div class="form-group">
    			<label class="control-label" for="address">Votre adresse</label>
    			<input
                    type="text"
                    id="address"
                    class="form-control"
                    name="address"
                    value="<?= (isset($_POST["address"]))?$_POST["address"]:"" ?>"
                    placeholder="votre adresse">
    		</div>
            <div class="form-group">
    			<label class="control-label" for="zipcode">code postal</label>
    			<input
                    type="text"
                    id="zipcode"
                    class="form-control"
                    name="zipcode"
                    value="<?= (isset($_POST["zipcode"]))?$_POST["zipcode"]:"" ?>"
                    placeholder="votre code postal">
    		</div>
            <div class="form-group">
    			<label class="control-label" for="city">Ville</label>
    			<input
                    type="text"
                    id="city"
                    class="form-control"
                    name="city"
                    value="<?= (isset($_POST["city"]))?$_POST["city"]:"" ?>"
                    placeholder="votre ville">
    		</div>
                <div class="form-group">
        			<label class="control-label" for="phone">N° de téléphone</label>
        			<input
                        type="text"
                        id="phone"
                        class="form-control"
                        name="phone"
                        value="<?= (isset($_POST["phone"]))?$_POST["phone"]:"" ?>"
                        placeholder="portable ou fixe">
        		</div>

            <p>* champs obligatoires</p>
    	    <button class="pull-right btn btn-warning" type="submit" name="signup">Je m'inscris</button>
    	</form>
    </div>
</main>
