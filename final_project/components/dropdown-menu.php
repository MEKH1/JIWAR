<?php 
// include "../includes/card_edit.php" ?>
<?php
function Dropdown1($id){
?>
<div class="dropdown">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
</button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
    <li id="profile_user">  
    <li><?php 
               echo  "<a  class='dropdown-item'  href='../includes/card_edit.php?cardid= {$id}'>  Edit </a>";
               ?>
    <li> <?php 
               echo  "<a  class='dropdown-item'  href='../includes/card_delete.php?cardid= {$id}'>  Delete </a>";
               ?>
    

</li>
    
  </ul>
</div>
<?php
}
?>



<?php
function Dropdown2($id){
?>
<div class="dropdown">
  <button  class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
</button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
    <li> <?php 
               echo  "<a  class='dropdown-item'  href='../includes/card_report.php?cardid= {$id}'> Report </a>";
               ?></li>
  </ul>
</div>

<?php
}
?>

