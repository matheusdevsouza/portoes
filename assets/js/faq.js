document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq__item');

    faqItems.forEach((item, index) => {
        const question = item.querySelector('.faq__question');
        question.addEventListener('click', () => {
            // Toggle the clicked item
            const isActive = item.classList.contains('active');
            item.classList.toggle('active');

            // If the item is now active, animate it
            if (!isActive) {
                gsap.fromTo(
                    item,
                    { y: 20 },
                    {
                        y: 0,
                        duration: 0.5,
                        ease: 'power2.out',
                        delay: index * 0.1,
                        onStart: () => item.classList.add('animate')
                    }
                );
            }
        });
    });

    // Initial animation for all FAQ items
    gsap.fromTo(
        faqItems,
        { y: 20 },
        {
            y: 0,
            duration: 0.5,
            stagger: 0.1,
            ease: 'power2.out',
            onStart: () => faqItems.forEach(item => item.classList.add('animate'))
        }
    );
});