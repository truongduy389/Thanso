//#region Set max time for input:datetime
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
   dd = '0' + dd;
}
if (mm < 10) {
   mm = '0' + mm;
} 
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("dob").setAttribute("max", today);
//#endregion

//#region Show Mobile Navbar
function showMNav () {
   const mNav = document.getElementById("mNav");
   if(mNav.style.display == "none") {
      mNav.style.display = "block";
   } else {
      mNav.style.display = "none";
   }
}
//#endregion