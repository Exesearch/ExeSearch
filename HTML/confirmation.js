/*
This is javascript to ask user whether they really wanto delete product from table or not.
If user click cancel, this return false, or return true if click ok.
*/
function function1() {
  result=confirm("Are you sure to delete this team?");
  if (result==true){
    return true;
  }else　{
    return false;
  }
}
