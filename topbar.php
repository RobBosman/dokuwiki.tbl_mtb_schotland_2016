<?php
/**
 * Topbar
 */
// must be run from within DokuWiki
if (!defined('DOKU_INC'))
  die();
?>

<div id="top-tabs">
  <a class="tab-home" href="<?php echo DOKU_REL; ?>">
    <img src="<?php echo DOKU_TPL; ?>/images/icon-home.png">
  </a>
  <div id="tab-main" class="tab-menu">
    <ul>
      <li><a href="<?php echo DOKU_REL; ?>wiki/tracks">Tracks</a></li>
      <li><a href="<?php echo DOKU_REL; ?>wiki/agenda">Agenda</a></li>
      <li><a href="<?php echo DOKU_REL; ?>wiki/wie">Wie</a></li>
    </ul>
  </div>
  <div id="tab-members" class="tab-menu">
    <ul>
      <li><a href="<?php echo DOKU_REL; ?>wiki/todo">TODO</a></li>
      <li class="contains-img">
        <a href="<?php echo DOKU_REL; ?>wiki/members-only">
          <img src="<?php echo DOKU_TPL; ?>images/vault-36.png" alt="Members only">
        </a>
      </li>
    </ul>
  </div>
</div>
