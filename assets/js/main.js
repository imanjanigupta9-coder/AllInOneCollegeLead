// assets/js/main.js

document.addEventListener("DOMContentLoaded", () => {
    // 1. Initialize Icons
    lucide.createIcons();

    // 2. Initialize GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".animate-hero", { opacity: 0, y: 50, duration: 1, ease: "power3.out" });
    gsap.from(".animate-hero-form", { opacity: 0, x: 50, duration: 1, delay: 0.2, ease: "power3.out" });

    gsap.utils.toArray('.gsap-fade-up').forEach(element => {
        gsap.from(element, {
            scrollTrigger: {
                trigger: element,
                start: "top 85%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: "power2.out"
        });
    });

    gsap.utils.toArray('.counter').forEach(counter => {
        let target = parseInt(counter.getAttribute('data-target'));
        gsap.to(counter, {
            scrollTrigger: {
                trigger: counter,
                start: "top 90%"
            },
            innerHTML: target,
            duration: 2,
            snap: { innerHTML: 1 },
            ease: "power1.inOut",
            onUpdate: function() {
                counter.innerHTML = Math.ceil(this.targets()[0].innerHTML);
            }
        });
    });

    // 3. Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('shadow-md');
        } else {
            navbar.classList.remove('shadow-md');
        }
    });

    // 4. FIXED: FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('i[data-lucide="chevron-down"]');

        btn.addEventListener('click', (e) => {
            e.preventDefault(); // Prevents default tap behaviors on mobile
            const isOpen = !content.classList.contains('hidden');
            
            // Close all
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-btn i').forEach(i => i.style.transform = 'rotate(0deg)');

            // Open the clicked one if it was closed
            if (!isOpen) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // 5. Toast Notification Logic
    function showToast(message, type = 'success') {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');
        
        const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 'bg-red-50 border-red-200 text-red-800';
        const icon = type === 'success' ? 'check-circle' : 'alert-circle';
        const iconColor = type === 'success' ? 'text-green-500' : 'text-red-500';

        toast.className = `flex items-center gap-3 p-4 rounded-lg border shadow-lg transform transition-all duration-300 translate-x-full opacity-0 ${bgColor}`;
        toast.innerHTML = `
            <i data-lucide="${icon}" class="w-5 h-5 ${iconColor}"></i>
            <p class="text-sm font-medium">${message}</p>
        `;

        container.appendChild(toast);
        lucide.createIcons();

        requestAnimationFrame(() => {
            toast.classList.remove('translate-x-full', 'opacity-0');
        });

        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-x-full');
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }

    // 6. NEW: Modal Popup Logic
    const modal = document.getElementById('admissionModal');
    const modalBackdrop = document.getElementById('modalBackdrop');
    const modalContent = document.getElementById('modalContent');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const openModalBtns = document.querySelectorAll('.open-modal-btn');
    const modalProgramSelect = document.getElementById('modalProgramSelect');

    function openModal(programName = '') {
        // Show Modal Container
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Auto-select the program in the dropdown if available
        if (programName && modalProgramSelect) {
            modalProgramSelect.value = programName;
        }

        // Trigger CSS animations
        requestAnimationFrame(() => {
            modalBackdrop.classList.remove('opacity-0');
            modalBackdrop.classList.add('opacity-100');
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        });
    }

    function closeModal() {
        // Reverse CSS animations
        modalBackdrop.classList.remove('opacity-100');
        modalBackdrop.classList.add('opacity-0');
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        
        // Hide Modal Container after animation completes
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }

    openModalBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const program = btn.getAttribute('data-program');
            openModal(program);
        });
    });

    closeModalBtn.addEventListener('click', closeModal);
    modalBackdrop.addEventListener('click', closeModal); // Close when clicking outside

    // 7. Dynamic Form Submission (Handles both Hero Form & Modal Form)
    const forms = [document.getElementById('admissionForm'), document.getElementById('modalAdmissionForm')];

    forms.forEach(form => {
        if (!form) return;
        
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Find specific button elements inside the currently submitting form
            const submitBtn = form.querySelector('button[type="submit"]');
            const btnSpinner = form.querySelector('.btn-spinner') || form.querySelector('svg');
            const btnIcon = form.querySelector('.btn-icon') || submitBtn.querySelector('i');
            const btnText = form.querySelector('.btn-text') || submitBtn.querySelector('span');

            // UI Loading State
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-80', 'cursor-not-allowed');
            if (btnText) btnText.textContent = "Processing...";
            if (btnIcon) btnIcon.classList.add('hidden');
            if (btnSpinner) btnSpinner.classList.remove('hidden');

            const formData = new FormData(form);

            try {
                const response = await fetch('api/submit.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.status === 'success') {
                    showToast(result.message, 'success');
                    form.reset();
                    
                    // If the modal form was submitted, close the popup automatically
                    if (form.id === 'modalAdmissionForm') {
                        setTimeout(closeModal, 1500);
                    }
                } else {
                    showToast(result.message, 'error');
                }
            } catch (error) {
                showToast('Network error occurred. Please try again.', 'error');
                console.error('Error:', error);
            } finally {
                // Restore UI State
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-80', 'cursor-not-allowed');
                if (btnText) btnText.textContent = "Apply Now";
                if (btnIcon) btnIcon.classList.remove('hidden');
                if (btnSpinner) btnSpinner.classList.add('hidden');
            }
        });
    });
});