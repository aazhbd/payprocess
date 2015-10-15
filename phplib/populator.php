<?php

function teststr(){
	return "hello this is a line";
}

function initdb(){
	$link = mysql_connect("localhost", "root", "") or die("Could not connect : ".mysql_error());
	mysql_select_db("tution_sys") or die("Database Missing");
}

function gettypecombo(){
	$arType[] = "Select One";
	$arType[] = "SINGLE";
	$arType[] = "MULTIPLE";

	$n = count($arType);
	
	$strType="<select name='CType' id='CType'>";

	for($i=0; $i<$n; $i++){
		$strType.="<option>".$arType[$i]."</option>";
	}
	$strType.="</select>";
	return $strType;
}

function showarraytable($artbl){
	echo "<table width=50% border=0 class='textformtable'>\n";
	echo "<tr>
			<td>Fee Type Code</td>
			<td>Field Title</td>
			<td>Field Type</td>
		  </tr>";
	
	while($line = mysql_fetch_array($artbl, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
}

function getlevelcombo($name){
	$arLevel[] = "0";
	$arLevel[] = "1";
	$arLevel[] = "2";
	$arLevel[] = "4";
	$arLevel[] = "5";
	$arLevel[] = "6";
	$arLevel[] = "7";

	$n = count($arLevel);
	$strLevel="<select name='{$name}' id='{$name}'>";
	for($i=0; $i<$n; $i++){
		$strLevel.="<option>".$arLevel[$i]."</option>";
	}
	$strLevel.="</select>";
	return $strLevel;
}

function getClassCombo($name){
	$arClass[] = "1";
	$arClass[] = "2";
	$arClass[] = "4";
	$arClass[] = "5";
	$arClass[] = "6";
	$arClass[] = "7";
	$arClass[] = "8";
	$arClass[] = "9";
	$arClass[] = "9";
	
	$n = count($arClass);
	$strClass="<select name='{$name}' id='{$name}'>";
	for($i=0; $i<$n; $i++){
		$strClass.="<option>".$arClass[$i]."</option>";
	}
	$strClass.="</select>";
	return $strClass;
}

function getLevelComboOptions($name=""){
	$arLevel[] = "Select One";
	$arLevel[] = "Primary";
	$arLevel[] = "Secondary";
	$arLevel[] = "College";

	$n = count($arLevel);

	for($i=0; $i<$n; $i++){
		if (strcmp($name, $arLevel[$i]) == 0)
			$strLevel.="<option selected>".$arLevel[$i]."</option>";
		else 
			$strLevel.="<option>".$arLevel[$i]."</option>";
	}
	return $strLevel;

}

function getmonthcombo($name){
	$mon[] = "Select One";
	$mon[] = "First Month";
	$mon[] = "Usual Month";
	
	$n = count($mon);
	$strmon="<select name='{$name}' id='{$name}'>";

	for($i=0; $i<$n; $i++){
		$strmon.="<option>".$mon[$i]."</option>";
	}
	$strmon.="</select>";
	return $strmon;
}

function enterdatecombo($y, $m, $d){
	$stryear = "<select name='{$y}'>";
		$stryear .= "<option>select</option>";
		for($i=1950; $i<2050; $i++){
		$stryear.="<option>".$i."</option>";
	}
	$stryear.="</select>";
	
/*	$month[]="January";
	$month[]="February";
	$month[]="March";
	$month[]="April";
	$month[]="May";
	$month[]="June";
	$month[]="July";
	$month[]="August";
	$month[]="September";
	$month[]="October";
	$month[]="November";
	$month[]="December";
	$n = count($month);*/
	
	$strmonth = "<select name='{$m}'>";
		$strmonth .= "<option>select</option>";
		for($i=1; $i<13; $i++){
		$strmonth.="<option>".$i."</option>";
	}
	$strmonth.="</select>";


	$strday = "<select name='{$d}'>";
		$strday .= "<option>select</option>";
		for($i=1; $i<32; $i++){
		$strday.="<option>".$i."</option>";
	}
	$strday.="</select>";
	
	$result = $stryear . "-" . $strmonth. "-" . $strday;
	return $result;
}

function SpaceUnderscore($str){
	$i=0;
	while($str{$i}!=NULL){
		if($str{$i}==" ") $str{$i}="_";
		$i++;
	}
	return $str;
}

?>