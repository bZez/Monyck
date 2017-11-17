<?php
include('views/headers/login.php');
?>

    <h4>
        <a href="<?php $project_name ?>index.php?offer=create">+ Add offer</a>

    </h4>

<?php messageFlash(); ?>

<?php
require('models/offers.php');

foreach (getTicketsOffersReports($bdd) as $of) {
    echo '<hr><h4>#' . $of['id'] . ' ' . $of['title'] . ' <a href="/' . $project_name . '/index.php?offer=edit&id=' . $of['id'] . '">✎</a><br>
              <small>taken by ' . $of['login'] . '</small><br><br>
              ' . $of['status'] . '<br><br>
              Rewarded:<br>' . $of['amount'] . '<br>
              Allowed time<br>' . $of['execTime'] . '<br>
              Insurance:<br>' . $of['insurance'] . '<br><br>
              Explanation: ' . $of['explanation'] . '/5 <br>
              Relation: ' . $of['relation'] . '/5 <br>
              Comitment: ' . $of['comitment'] . '/5<br><br>
              <a href="/' . $project_name . '/index.php?ticket=view&id=' . $of['id_ticket'] . '">View ticket</a></h4>';
}
?>

<?php
include('views/footers/default.php');
?>