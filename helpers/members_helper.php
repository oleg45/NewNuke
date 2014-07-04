<?php 
function showAllMembers($members){
  $html = '';
  foreach ($members as $id => $member) {
    $html .= "<p>" . $member["first_name"] . "</p>";
  }
  return $html;
}
?>