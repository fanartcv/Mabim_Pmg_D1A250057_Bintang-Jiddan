// ==========================================
// ARKNIGHTS ENDFIELD LOGIN PAGE
// JavaScript for animations and validation
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const errorMsg = document.getElementById('errorMsg');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const loginButton = document.querySelector('.login-button');

    // Add entrance animation to login box
    const loginBox = document.querySelector('.login-class');
    setTimeout(() => {
        loginBox.style.opacity = '0';
        loginBox.style.transform = 'translateY(30px)';
        loginBox.style.transition = 'all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)';
        
        requestAnimationFrame(() => {
            loginBox.style.opacity = '1';
            loginBox.style.transform = 'translateY(0)';
        });
    }, 100);

    // Form validation (client-side)
    form.addEventListener('submit', function(e) {
        // Remove default validation for demo purposes
        // Uncomment the following to enable client-side validation
        
        /*
        e.preventDefault();
        
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        // Reset error
        errorMsg.classList.remove('show');
        errorMsg.style.display = 'none';

        // Simple validation
        if (username === '' || password === '') {
            showError('⚠ All fields are required');
            return false;
        }

        if (password.length < 6) {
            showError('⚠ Password must be at least 6 characters');
            return false;
        }

        // If validation passes, submit the form
        // form.submit();
        // Or handle with AJAX
        */
    });

    // Show error message with animation
    function showError(message) {
        errorMsg.textContent = message;
        errorMsg.style.display = 'block';
        errorMsg.classList.add('show');

        // Shake animation
        loginBox.style.animation = 'shake 0.5s ease';
        setTimeout(() => {
            loginBox.style.animation = '';
        }, 500);
    }

    // Input focus effects
    const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateX(2px)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateX(0)';
        });
    });

    // Button ripple effect
    loginButton.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');

        this.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);
    });
});

// Add shake animation CSS dynamically
const style = document.createElement('style');
style.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-10px); }
        75% { transform: translateX(10px); }
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: rippleEffect 0.6s ease-out;
        pointer-events: none;
    }

    @keyframes rippleEffect {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }

    .login-button {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);