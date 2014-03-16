<? if(!isset($_POST['scelta'])) {
	$_POST['scelta']=array();
}

?>

<article>
<form action="index.php" target="_blank" method="post" >
<p>Inserisci la ricerca che vuoi effettuare:</p>
<fieldset>
<input type="checkbox" name="scelta[]" value="link" />link


<input type="checkbox" name="scelta[]" value="provenienza" />provenienza


<input type="checkbox" name="scelta[]" value="titolo" />titolo


<input type="checkbox" name="scelta[]" value="categoria" />categoria


<input type="checkbox" name="scelta[]" value="inizioData" />inizioData


<input type="checkbox" name="scelta[]" value="fineData" />fineData

<input type="checkbox" name="scelta[]" value="testoHTML" />testo HTML

</fieldset>

<br/>
<br/>
<br/>
<input type="submit" name="submit" value="invia"/>
</form>
</article>