<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<!-- MMM
<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
MMM -->

<h1>[EN] Welcome to aBenchmarking project: variable selection in DEA!</h1>

<p>We propose an algorithmic method of a selection of variables in a model DEA applied to a group of decision units (DMU's). The method is based on an internal measure, which evaluates the contribution of each of the variables. </p>

<p>More information in <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>r-forge project summary page</strong></a> or in <a href="http://knuth.uca.es/moodle/course/view.php?id=74&lang=en">project page</a>.</p>

<p><dl><di>References:</di><dd><a href="http://dx.doi.org/10.1590/0101-7438.2018.038.01.0031">Stepwise selection of variables in DEA using contribution loads. <i>Fernando Fernandez-Palacin, Maria Auxiliadora Lopez-Sanchez, Manuel Munoz-Marquez</i>. Pesquisa Operacional, <b>38</b>:1, pg. 31-52. 2018, DOI: 10.1590/0101-7438.2018.038.01.0031.</a></dd></dl></p>

<h1>[ES] Bienvenido al proyecto aBenchmarking: selecci&oacute;n de variables en AED!</h1>

<p>Proponemos un m&eacute;todo de selecci&oacute;n de variables en un modelo AED o DEA aplicado a un grupo de unidades de decisi&oacute;n o DMU. Este m&eacute;todo est&aacute; basado en una medida interna que eval&uacute;a la contribuci&oacute;n de cada variable al total.</p>

<p>More information in <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>r-forge project summary page</strong></a> or in <a href="http://knuth.uca.es/moodle/course/view.php?id=74&lang=es">project page</a>.</p>

<p><dl><di>Referencias:</di><dd><a href="http://dx.doi.org/10.1590/0101-7438.2018.038.01.0031">Stepwise selection of variables in DEA using contribution loads. <i>Fernando Fernandez-Palacin, Maria Auxiliadora Lopez-Sanchez, Manuel Munoz-Marquez</i>. Pesquisa Operacional, <b>38</b>:1, pg. 31-52. 2018, DOI: 10.1590/0101-7438.2018.038.01.0031.</a></dd></dl></p>

</body>
</html>
