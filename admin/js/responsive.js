var contentDiv = document.getElementById('content');
var sideNav = document.getElementById('side-nav');



function showMenu(){
    contentDiv.classList.toggle('content-active')
    sideNav.classList.toggle('sidenav-active')
    
}

function mobileView(){

    sideNav.classList.toggle('mobile-active');
    console.log('cecel')
}   