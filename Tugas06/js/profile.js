//scrool section
window.onscroll = () => {
    //sticky header
    let navbar = document.querySelector('navbar')

    navbar.classList.toggle('sticky', window.scrollY > 100)
}