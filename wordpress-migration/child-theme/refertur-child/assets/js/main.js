/**
 * main.js - refertur-child
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Reveal Animations on Scroll
    const reveals = document.querySelectorAll('.reveal');
    
    const revealOnScroll = () => {
        for (let i = 0; i < reveals.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = reveals[i].getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            }
        }
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check

    // 2. FAQ Accordion Logic (Enhancement)
    const faqQuestions = document.querySelectorAll('.wp-block-spectra-faq__question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            // Optional: close other items
        });
    });

    // 3. Messenger Buttons Analytics (Placeholder)
    const messengerBtns = document.querySelectorAll('.refertur-cta-btn');
    messengerBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const type = btn.classList.contains('tg') ? 'Telegram' : 'WhatsApp';
            console.log(`User clicked ${type} button`);
            // Add GA/Pixel events here
        });
    });
});
