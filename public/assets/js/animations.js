document.addEventListener('DOMContentLoaded', () => {
    gsap.utils.toArray('.gsap-block').forEach((block) => {
        gsap.from(block, {
            scrollTrigger: {
                trigger: block,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            opacity: 0,
            y: 50,
            duration: 0.8,
        });
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const mainBanner = document.querySelector('.main-banner');

    if (!!mainBanner === false) {
        return;
    }

    const mainBannerDesc = mainBanner.querySelector('.main-banner__desc');
    const mainBannerDesc2 = mainBanner.querySelector('.main-banner__desc2');

    gsap.utils.toArray('.main-banner__title').forEach((block, index) => {
        gsap.fromTo(block, {
            marginLeft: "-30px",
            opacity: 0,
        }, {
            opacity: 1,
            marginLeft: 0,
            duration: 0.5,
            delay: index * 0.4
        });
    });

    gsap.fromTo(mainBannerDesc, {
        marginLeft: "-30px",
        opacity: 0,
    }, {
        opacity: 1,
        marginLeft: 0,
        duration: 1
    });

    gsap.fromTo(mainBannerDesc2, {
        marginLeft: "-30px",
        opacity: 0,
    }, {
        opacity: 1,
        marginLeft: 0,
        duration: 1,
        delay: 0.5
    });

    gsap.utils.toArray('.main-banner__service-btn').forEach((block, index) => {
        gsap.fromTo(block, {
            marginLeft: "-20px",
            opacity: 0,
        }, {
            opacity: 1,
            marginLeft: 0,
            duration: 0.05,
            delay: index * 0.1
        });
    });

    gsap.utils.toArray('.main-banner__monitor img').forEach((block, index) => {
        gsap.fromTo(block, {
            marginRight: "-10px",
            opacity: 0,
        }, {
            opacity: 1,
            marginRight: 0,
            duration: 1,
            delay: index * 0.1,
        });
    });

    gsap.fromTo('.main-banner__monitor', {
        opacity: 0,
    }, {
        opacity: 1,
        duration: 1,
        delay: 0.2,
    });
});


document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        const scrollTop = 20;

        if (window.scrollY > scrollTop && header.classList.contains('header-mobile') === false) {
            header.classList.add('header-mobile');
        } else if (window.scrollY < scrollTop && header.classList.contains('header-mobile')) {
            header.classList.remove('header-mobile');
        }
    });
});