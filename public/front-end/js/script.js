$(document).ready(function () {
    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
        });
    }

    $('.slide').owlCarousel({
        loop: true,
        nav: true,
        navText: ["<img src='/front-end/icons/icon-left.png'>","<img src='/front-end/icons/icon-right.png'>"],
        autoPlay: 5000,
        stopOnHover: true,
        singleItem: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            1200: {
                items: 1,
            },

        }
    });
    $('.destination').owlCarousel({
        loop: true,
        nav: true,
        navText: ["<img src='/front-end/icons/icon-0-left.png'>","<img src='/front-end/icons/icon-0-right.png'>"],
        autoPlay: 5000,
        margin: 5,
        stopOnHover: true,
        singleItem: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 5,
            },

        }
    })
});
