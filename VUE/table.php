<?php ?>
<tbody id="dataList" class=''>
    <?php
    foreach ($companies as $company) : ?>
        <tr class="data-row">
            <td>
                <a href='entrepriseCU.php?etat=read&companyID=<?= $company['companyID'] ?>'>
                    <button class="btn btn-light" type="button"><img src="../assets/images/loupe.png"></button>
            </td>
            <td>
                <companyName><?= $company['companyName'] ?></companyName>
            </td>
            <td>
                <companyActivity><?= $company['companyActivity'] ?></company-activity>
            </td>
            <td class='responsive-hide'>
                <locality><?= $company['locality'] ?></locality>
            </td>
            <td class='responsive-hide'>
                <nbAcceptedInterns value="<?= $company['nbAcceptedInterns'] ?>"><?= (int) $company['nbAcceptedInterns'] ?></nbAcceptedInterns>
            </td>
            <td>
                <reviewPilot><?= $company['reviewPilot'] ?>%</review-pilot>
            </td>
            <td class='responsive-hide'>
                <rating><?= $company['rating'] ?>/4</rating>
            </td>

            <td class='responsive-hide'><a href='delete.php?companyID=<?= $company['companyID'] ?>&type=entreprise'>
                    <button class="btn btn-secondary" type="button"><img src="../assets/images/delete.png"></button> </td>
        </tr>
    <?php endforeach; ?>
</tbody>