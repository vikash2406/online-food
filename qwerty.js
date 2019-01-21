function validateFirstName()
{
var fname = document.getElementById("firstName").value;
val rel = /^[a-zA-Z\s\'\-]{2,15}$/;
if(rel.test(fname))
{
	document.getElementById("firstNamePrompt").style.color="green";
	document.getElementById("firstNamePrompt").innerHTML="<b>valid</b>";
	return true;
}
else
{
	document.getElementById("firstNamePrompt").style.color="red";
	document.getElementById("firstNamePrompt").innerHTML="<b>Enter 2-15 character</b>";
	return false;;
}


function validateLastName()
{

var fname = document.getElementById("lastName").value;
val rel2 = /^[a-zA-Z\s\'\-]{2,15}$/;
if(rel2.test(fname))
{
	document.getElementById("lastNamePrompt").style.color="green";
	document.getElementById("lastNamePrompt").innerHTML="<b>valid</b>";
	return true;
}
else
{
	document.getElementById("lastNamePrompt").style.color="red";
	document.getElementById("lastNamePrompt").innerHTML="<b>Enter 2-15 character</b>";
	return false;;
}


function validphone()
{
	var p=document.getElementById("phone").value;
	var re3= /^\d{4}-\d{3}-\d{3}$/;
}

</script>



