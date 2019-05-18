<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 19:57
 */
print_r('--> profile');

//print_r($profiles);
?>


<table>
    <?php foreach ($profiles as $items) {?>
    <tr>
        <?php foreach ($items as $item) {?>
            <td>
                <?php print_r($item)?>
            </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

