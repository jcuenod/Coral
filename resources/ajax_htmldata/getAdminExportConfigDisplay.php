<?php

$exportConfig = new ExportConfig();
$config = $exportConfig->getRawConfiguration();

?>
<div class='adminHeader'>
  <div>
    <div class='adminRightHeader'>
    <?php echo _("Export Configuration");?>
    </div>
  </div>
</div>

<table class='linedDataTable'>
  <tr>
  <th width="100%"><?php echo _("Include in Export");?></th>
  <th><?php echo _("Enabled");?></th>
  </tr>
  <?php

  foreach($config as $option) {
    $translatedName = _($option['shortName']);
    $checked = $option['enabled'] == 1 ? "checked=checked" : "";
    echo "
    <tr>
      <td>{$translatedName}</td>
      <td>
        <input type='checkbox' onclick='javascript:updateExportConfig({$option['ID']})' {$checked} />
      </td>
    </tr>";
  }

  ?>
</table>
<?php

echo _("Please note that exporting parent and child relationships slows down the query dramatically. It may cause your database to run out of memory so it is not recommended for use on large exports.");

?>
