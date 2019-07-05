<?php

class ExportConfig extends DatabaseObject {
  public function getConfiguration() {
    $query = "SELECT * FROM ExportConfig";
    $result = $this->db->processQuery($query, 'assoc');
    return $result;
  }

  public function updateConfiguration($id, $enabled) {
    $query = "UPDATE `ExportConfig` SET `enabled`=$enabled WHERE `id`=$id";
    $result = $this->db->processQuery($query, 'assoc');
  }
}

?>
