<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = null;
$meilleurEtudiant = null;


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Notes des étudiants</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $etudiant => $note): ?>
                <?php
                $somme += $note;
                $valide = $note >= 10;

                if ($valide) {
                    $nombreValides++;
                }

                if ($meilleureNote === null || $note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= $note ?></td>
                    <td><?= $valide ? 'Validé' : 'Non validé' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php $moyenne = count($notes) > 0 ? $somme / count($notes) : 0; ?>
    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= number_format($moyenne, 2, ',', ' ') ?></p>
    <p>Étudiants ayant validé : <?= $nombreValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?>)</p>
</body>
</html>
?>

