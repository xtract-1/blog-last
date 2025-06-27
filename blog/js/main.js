const navItems = document.querySelector('.nav-items');
const openNavBtn = document.querySelector('#open_nav-btn');
const  closeNavBtn= document.querySelector('#close_nav-btn');


const openNav = () =>{
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display='inline-block';

}
// close dropdown
const closeNav = () => {
    navItems.style.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display='none';

}





openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);


const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide__sidebar-btn');




// showSidebarBar
const showSidebarBar = () => {
    sidebar.style.left = '0';
    showSidebarBtn.style.display = 'none';
    hideSidebarBtn.style.display = 'inline-block';

}
// hideSidebarBar
const hideSidebarBar = () => {
    sidebar.style.left = '-100%';
    showSidebarBtn.style.display = 'inline-block';
    hideSidebarBtn.style.display = 'none';

}









showSidebarBtn.addEventListener('click', showSidebarBar);
hideSidebarBtn.addEventListener('click', hideSidebarBar);
