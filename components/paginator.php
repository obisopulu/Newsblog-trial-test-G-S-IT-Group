<?php if ($totalPost > 10){  ?>
<nav class="paginator">
  <ul>
    <li>
      <a href="?page=<?= handleBackButton($p) ?>" class="active-page">
        Prev
      </a>
    </li><!--
    <li>
      <a href="#">1</a>
    </li>
    <li>
      <a href="#">2</a>
    </li>-->
    <li>
      <a href="#"><?= $p ?></a>
    </li>
    <!--
    <li>
      <a href="#">4</a>
    </li>
    <li>
      <a href="#">5</a>
    </li>
    -->
    <li>
      <a href="?page=<?= handleNextButton($p) ?>" class="active-page">
            Next
      </a>
    </li>
  </ul>
</nav>
<?php } ?>