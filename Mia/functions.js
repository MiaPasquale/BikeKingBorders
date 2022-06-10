console.log("Running");

function checkCookie(){
    //can do various
    document.getElementById('welcome').innerHTML="Welcome, "+getCookie('name');
}