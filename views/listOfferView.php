
<h4>
    <a href="<?php $project_path ?>index.php?offer=reported">Reported</a>
    <a href="<?php $project_path ?>index.php?offer=create">+ Add offer</a>

</h4>

<?php messageFlash(); ?>

<?php
require('models/offers.php');

foreach (getTicketsOffers($bdd) as $of) {
    echo '<hr><h2>#' . $of['ido'] . ' ' . $of['title'] . ' <a href="' . $project_path . 'index.php?offer=edit&id=' . $of['ido'] . '">✎</a>
              <a href="' . $project_path . 'index.php?offer=deleteAction&id=' . $of['ido'] . '">×</a></h2>
              '.$of['login'].'
              <h6>' . $of['status'] . '</h6>
              <h2>Reward:<br>' . $of['amount'] . '</h2>
              <h3>Allowed time<br>' . $of['execTime'] . '</h3>
              <h4>Insurance:<br>' . $of['insurance'] . '</h4>
              <h6><a href="' . $project_path . 'index.php?ticket=view&id=' . $of['id_ticket'] . '">View ticket</a></h6>';
              if ($of['status'] === 'CLOSED'){
                  echo '<h6><a href="' . $project_path . 'index.php?offer=report&id=' . $of['ido'] . '">Report this</a></h6>';
              }


}
?>