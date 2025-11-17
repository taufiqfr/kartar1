// Dashboard Karang Taruna - JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initNavigation();
    initAnimations();
    initInteractiveElements();
    initGallery();
    initSubOrganizations();
});

// Smooth scrolling and navigation
function initNavigation() {
    const navLinks = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('section');
    
    // Smooth scrolling for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId.startsWith('#')) {
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Update active nav link
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            }
        });
    });

    // Update active nav link on scroll
    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 100)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
}

// Animations and effects
function initAnimations() {
    // Animate statistics counters
    const stats = document.querySelectorAll('.stat-value');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stat = entry.target;
                const target = parseInt(stat.textContent.replace('+', ''));
                let current = 0;
                const increment = target / 50;
                const hasPlus = stat.textContent.includes('+');
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + (hasPlus ? '+' : '');
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current);
                    }
                }, 30);
                
                observer.unobserve(stat);
            }
        });
    }, observerOptions);

    stats.forEach(stat => {
        observer.observe(stat);
    });

    // Animate sub-organization stats
    const subStats = document.querySelectorAll('.sub-stat-value');
    subStats.forEach(stat => {
        stat.addEventListener('mouseenter', function() {
            const target = parseInt(this.textContent);
            let current = 0;
            const increment = target / 20;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    this.textContent = target;
                    clearInterval(timer);
                } else {
                    this.textContent = Math.floor(current);
                }
            }, 50);
        });
    });

    // Add hover effects to cards
    const cards = document.querySelectorAll('.card, .program-card, .activity, .sub-org-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

// Interactive elements
function initInteractiveElements() {
    // Interactive structure members
    const members = document.querySelectorAll('.member');
    members.forEach(member => {
        member.addEventListener('click', function() {
            const name = this.querySelector('.member-name').textContent;
            const role = this.querySelector('.member-role').textContent;
            
            // Show member details
            showModal(`Detail Anggota`, `
                <div style="text-align: center;">
                    <h3>${name}</h3>
                    <p><strong>Jabatan:</strong> ${role}</p>
                    <p>Informasi detail dan kontak anggota akan ditampilkan di sini.</p>
                </div>
            `);
            
            // Visual feedback
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
                this.style.transform = 'scale(1.05)';
            }, 300);
        });
    });

    // Activity status toggle
    const activityStatuses = document.querySelectorAll('.activity-status');
    activityStatuses.forEach(status => {
        status.addEventListener('click', function() {
            if (this.classList.contains('status-upcoming')) {
                this.classList.remove('status-upcoming');
                this.classList.add('status-ongoing');
                this.textContent = 'Berlangsung';
            } else if (this.classList.contains('status-ongoing')) {
                this.classList.remove('status-ongoing');
                this.classList.add('status-completed');
                this.textContent = 'Selesai';
            } else {
                this.classList.remove('status-completed');
                this.classList.add('status-upcoming');
                this.textContent = 'Akan Datang';
            }
        });
    });

    // Join button functionality
    const joinBtn = document.querySelector('.join-btn');
    if (joinBtn) {
        joinBtn.addEventListener('click', function() {
            // Simulate registration process
            const name = prompt('Masukkan nama lengkap Anda:');
            if (name) {
                const email = prompt('Masukkan email Anda:');
                if (email) {
                    alert(`Terima kasih ${name}! Pendaftaran berhasil. Kami akan menghubungi Anda di ${email} untuk informasi selanjutnya.`);
                    
                    // Animation feedback
                    this.textContent = 'Terdaftar!';
                    this.style.background = 'var(--success)';
                    setTimeout(() => {
                        this.textContent = 'Daftar Sekarang';
                        this.style.background = '';
                    }, 2000);
                }
            }
        });
    }
}

// Gallery functionality
function initGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const caption = this.querySelector('.gallery-caption').textContent;
            const imgSrc = this.querySelector('img').src;
            
            // Create modal view
            const modal = document.createElement('div');
            modal.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 2000;
                cursor: pointer;
            `;
            
            const img = this.querySelector('img').cloneNode();
            img.style.cssText = `
                max-width: 90%;
                max-height: 90%;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            `;
            
            modal.appendChild(img);
            document.body.appendChild(modal);
            
            // Close modal on click
            modal.addEventListener('click', function() {
                document.body.removeChild(modal);
            });
        });
    });
}

// Sub Organizations functionality
function initSubOrganizations() {
    const subOrgButtons = document.querySelectorAll('.sub-org-btn');
    
    subOrgButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.sub-org-card');
            const orgName = card.querySelector('h3').textContent;
            const location = card.querySelector('.sub-org-location').textContent;
            const description = card.querySelector('.sub-org-desc').textContent;
            
            // Show organization details
            alert(`Detail ${orgName}\n\nLokasi: ${location}\n\nDeskripsi: ${description}\n\nFitur detail lengkap akan ditampilkan di halaman khusus.`);
            
            // Animation feedback
            this.textContent = 'Membuka...';
            this.style.background = 'var(--success)';
            setTimeout(() => {
                this.textContent = 'Lihat Detail';
                this.style.background = '';
            }, 1500);
        });
    });
}

// Modal utility function
function showModal(title, content) {
    // Remove existing modal
    const existingModal = document.querySelector('.modal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Create modal
    const modal = document.createElement('div');
    modal.className = 'modal';
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2000;
        padding: 20px;
    `;
    
    const modalContent = document.createElement('div');
    modalContent.style.cssText = `
        background: white;
        padding: 30px;
        border-radius: 15px;
        max-width: 500px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    `;
    
    modalContent.innerHTML = `
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="color: #2c3e50; margin: 0;">${title}</h2>
            <button onclick="this.closest('.modal').remove()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: #666;">×</button>
        </div>
        ${content}
    `;
    
    modal.appendChild(modalContent);
    document.body.appendChild(modal);
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

// Utility functions
function formatDate(date) {
    return new Date(date).toLocaleDateString('id-ID', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

// Make functions globally available for onclick handlers
window.showModal = showModal;