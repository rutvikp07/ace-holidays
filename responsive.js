burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navList = document.querySelector('.nav-list')

burger.addEventListener('click', () => {

    navList.classList.toggle('v-class');
    navbar.classList.toggle('h-nav');
})

book_btn = document.querySelector('.f_submit')
            book_btn.addEventListener('click', function () {
                alert('Your request is noted. We will contact you soon. Thank you');
            })
