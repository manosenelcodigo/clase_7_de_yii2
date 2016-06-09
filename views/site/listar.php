<?php
use yii\helpers\Html;
?>
<h1><?= $titulo ?></h1>
<table>
    <tr>
        <th>Profesion</th>
        <th></th>
    </tr>
    
    <?php foreach($profesiones as $key => $value): ?>
    <tr>
        <td><?= $value->profesion ?></td>
        <td>
            <?= Html::a(
                'editar',
                ['/site/editar/' . $value->id]
            ) ?>
            <?= Html::a(
                'eliminar',
                ['/site/eliminar/' . $value->id]
            ) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>