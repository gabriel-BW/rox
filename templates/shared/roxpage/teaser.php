
<!-- #teaser: the teaser shows title and elements that summarize the content of the current page -->

  <?php $this->teaserContent() ?>

  <?php
    if (!$this->getSubmenuItems()) {
    } else $this->submenu();
  ?>
