<ul class="nav navbar-nav flex-row">
<li class="dropdown">
	<button class="btn2 btn-primary dropdown-toggle border-0" type="button" data-toggle="dropdown">Menu Facture
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a class="dropdown-item" href="invoice_list.php">Lister les factures</a></li>
		<li><a class="dropdown-item" href="create_invoice.php">Créer une facture</a></li>				  
	</ul>
</li>
<?php 
if($_SESSION['userid']) { ?>
	<li class="dropdown">
		<button class="btn2 btn-secondary dropdown-toggle border-0" type="button" data-toggle="dropdown">Se connecter: <?php echo $_SESSION['user']; ?>
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Compte</a></li>
			<li><a class="dropdown-item" href="logout.php?action=logout">Se déconnecter</a></li>		  
		</ul>
	</li>
<?php } ?>
</ul>
<br /><br /><br /><br />