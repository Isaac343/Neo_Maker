<?php  ?>
<div class="body_container">
  <?php include 'include/navbar.php'; ?>

  <!-- The markup below is for demonstration purposes only -->
  <div style="padding: 1rem;">
    <div id="tab-panel-1" class="tab-1" role="tabpanel" aria-labelledby="tab-link-1" aria-hidden="false">
      <?php include "gear/anvil.php" ?>
    </div>
    <div id="tab-panel-2" class="tab-2" role="tabpanel" aria-labelledby="tab-link-2" aria-hidden="true" hidden>
      <?php include "gear/configu.php" ?>
    </div>
    <div id="tab-panel-3" class="tab-3" role="tabpanel" aria-labelledby="tab-link-3" aria-hidden="true" hidden>
      <?php include "gear/results.php" ?>
    </div>
    <div id="tab-panel-4" class="tab-4" role="tabpanel" aria-labelledby="tab-link-4" aria-hidden="true" hidden>
      <?php include "gear/logout.php" ?>
    </div>
  </div>
</div>
