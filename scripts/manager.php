<?php
include "scripts/add.php";
include "scripts/getall.php";
include "scripts/search.php";
include "scripts/edit.php";
include "scripts/delete.php";
class Library {
	function getAll() {return getAll();}
	function add($name="Хризалида",$author="Джон Голд",$price=158,$description="Фентези") {add($name,$author,$price,$description);}
	function edit($id=1,$name="Ключи Пангеи",$author="Джон Голд",$price=435,$description="Фентези") {edit($id,$name,$author,$price,$description);}
	function delete($id=4) {delete($id);}
	function search($id=1) {return search($id);}
}
?>