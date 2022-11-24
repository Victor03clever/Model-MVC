// const activedPage = window.location.pathname;
//activando o nav link
// function load(){
//     const navLinks = document.querySelectorAll('nav a').forEach(link => {
//         link.classList.remove('navActive');
//         if(link.href.includes(`${activedPage}`)){
//             link.classList.add('navActive');
//             console.log(link.href)
//         }else{
//             link.classList.remove('navActive');

//         }
//     });
    
// }

window.addEventListener('scroll', function(){
    const navLinks = document.querySelectorAll('li');
    const section = document.querySelectorAll('section');
    let current='';
    section.forEach(sec =>{
        const secTop = sec.offsetTop;
        const secheight = sec.clientHeight
        if(this.scrollY + 50 >= secTop)
        {
            current= sec.getAttribute('id')
        }

    })

    navLinks.forEach(nav => {
        nav.classList.remove('actived');
        if(nav.classList.contains(current))
        {
            nav.classList.add('actived')
        }
    console.log(nav)

    })
    console.log(current)

})


