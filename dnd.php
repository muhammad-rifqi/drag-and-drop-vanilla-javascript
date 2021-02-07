<style>
#drop_zone {
    background-color: #EEE; 
    border: #999 5px dashed;
    width: 290px; 
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
</style>
<script>
function drag_drop(event) {
    event.preventDefault();
    var formdata = new FormData();
	formdata.append("file1", event.dataTransfer.files[0]);
	var ajax = new XMLHttpRequest();
    ajax.open( "POST", "parse.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			console.log(ajax.responseText);
		}
	}
    ajax.send(formdata);
}
</script>
<h1>File Upload Drag and Drop </h1>
<div id="drop_zone" ondrop="drag_drop(event)" ondragover="return false"></div>

<?php 
echo"<h3>Directory : </h3> <hr>";
$scan = scandir('upload'); // this is upload folder
echo"<pre>";
    print_r($scan);
echo"</pre>";
?>