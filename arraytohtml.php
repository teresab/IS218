<?php
$profile = array (
array("Full Name"=>"Teresa Bembury", "Age"=>40 , "Occupation"=>"Multimedia Designer"),
array("Full Name"=>"Elysa Bembury", "Age"=>20 , "Occupation"=>"Student"),
array("Full Name"=>"Sky Bembury", "Age"=>20 , "Occupation"=>"Multimedia Designer")
);
?>

<?php if (count($profile) > 0): ?>
<table>
<thead>
<tr>
<th><?php echo implode('</th><th>', array_keys(current($profile))); ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($profile as $row): array_map('htmlentities', $row); ?>
<tr>
<td><?php echo implode('</td><td>', $row); ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php endif; ?>
