<?php 
function showAllMembers($members){
  $html = '';
  foreach ($members as $id => $member) {
    $html .= "<p>" . $member["username"] . "</p>";
  }
  return $html;
}
?>