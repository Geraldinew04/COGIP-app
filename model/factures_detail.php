<?php
$idfacture = $_GET['id'];
$query =
  "SELECT
  facture.id,
  facture.numero,
  facture.date_facturation,
  facture.motif_prestation,
  type_soc.type,
  societe.nom AS nom_societe,
  personne.nom AS nom_contact,
  personne.prenom AS prenom_contact,
  personne.id AS id_personne,
  societe.id AS id_societe
  FROM facture, type_soc, personne, societe
  WHERE facture.societe_id = societe.id
  AND facture.personne_id = personne.id
  AND societe.type_soc_id = type_soc.id
  AND facture.id = $idfacture
  ORDER BY facture.date_facturation";
$stmt = $db->query($query);
$factures = $stmt->fetch();

// Titre de la page
$titre="COGIP : Facture " . $factures['numero'];
 ?>
