<?php include('header.php') ?>

  <h1>Admin <?= $titre ?></h1>
	
	<h3><a href="index.php?page=lesboss_detail&id=<?=$admins['id']?>"><?=$admins['nom']?></a></h3>
	
	<div class="detail">
        <p><span class="detailtitle">Login :</span> <?=$admins['login']?></p>
        <p><span class="detailtitle">Access :</span> <?=$admins['access']?></p>
        
   </div> 

<!-- 	<table>
		<tr>
			<td class="tabtitle">Login</td>
			<td class="tabtitle">Access</td>
		</tr>
		<tr>
			<td class="tabrow"></td>
			<td class="tabrow"></td>
		</tr>
	</table> -->

    <a href="index.php?page=lesboss_modifier&id=<?=$idadmins?>"><button class="form" type="button" name="button">Modifier</button></a>
    <a href="index.php?page=lesboss_supprimer&id=<?=$idadmins?>"><button class="form" type="button" name="button">Supprimer</button></a>

</body>
</html>
