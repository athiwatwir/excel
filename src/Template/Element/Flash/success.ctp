<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success text-center" onclick="this.classList.add('hidden')"><i class="mdi mdi-checkbox-marked-circle-outline"></i> <?= $message ?></div>
