document.addEventListener('DOMContentLoaded', () => {
    // Initialize FAQ animations
    const faqItems = document.querySelectorAll('.faq__item');
    
    // Create a timeline for the initial animation
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.faq',
            start: 'top 80%',
            toggleActions: 'play none none reverse'
        }
    });

    // Animate each FAQ item with a stagger effect
    tl.to(faqItems, {
        opacity: 1,
        y: 0,
        duration: 0.5,
        stagger: 0.1,
        ease: 'power2.out'
    });

    // Handle FAQ item clicks
    faqItems.forEach(item => {
        const question = item.querySelector('.faq__question');
        const answer = item.querySelector('.faq__answer');
        const chevron = item.querySelector('.faq__question i');
        
        // Set initial states
        gsap.set(answer, {
            height: 0,
            opacity: 0,
            y: -10
        });
        
        gsap.set(chevron, {
            rotation: 0
        });

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all other items with a smooth animation
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherAnswer = otherItem.querySelector('.faq__answer');
                    const otherChevron = otherItem.querySelector('.faq__question i');
                    
                    otherItem.classList.remove('active');
                    
                    gsap.to(otherAnswer, {
                        height: 0,
                        opacity: 0,
                        y: -10,
                        duration: 0.4,
                        ease: 'power2.inOut'
                    });
                    
                    gsap.to(otherChevron, {
                        rotation: 0,
                        duration: 0.3,
                        ease: 'power2.inOut'
                    });
                    
                    gsap.to(otherItem.querySelector('.faq__question'), {
                        scale: 1,
                        duration: 0.3,
                        ease: 'power2.inOut'
                    });
                }
            });

            // Toggle current item with advanced animations
            item.classList.toggle('active');
            
            if (!isActive) {
                // Opening animation
                gsap.to(answer, {
                    height: 'auto',
                    opacity: 1,
                    y: 0,
                    duration: 0.5,
                    ease: 'back.out(1.2)'
                });
                
                gsap.to(chevron, {
                    rotation: 180,
                    duration: 0.4,
                    ease: 'power2.inOut'
                });
                
                gsap.to(question, {
                    scale: 1.02,
                    duration: 0.3,
                    ease: 'power2.inOut'
                });
            } else {
                // Closing animation
                gsap.to(answer, {
                    height: 0,
                    opacity: 0,
                    y: -10,
                    duration: 0.4,
                    ease: 'power2.inOut'
                });
                
                gsap.to(chevron, {
                    rotation: 0,
                    duration: 0.3,
                    ease: 'power2.inOut'
                });
                
                gsap.to(question, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.inOut'
                });
            }
        });
    });
}); 