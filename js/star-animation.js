/**
 * Star Rotation Animation
 * Rotates stars 360 degrees when mouse hovers over them
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get all star elements
    const stars = document.querySelectorAll('.star');
    
    // Add event listeners to each star
    stars.forEach(function(star) {
        // Add mouse enter event
        star.addEventListener('mouseenter', function() {
            this.style.transform = 'rotate(360deg)';
            this.style.transition = 'transform 0.6s ease-in-out';
        });
        
        // Add mouse leave event
        star.addEventListener('mouseleave', function() {
            this.style.transform = 'rotate(0deg)';
            this.style.transition = 'transform 0.6s ease-in-out';
        });
    });
    
    // Button grow animation
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(function(button) {
        // Add mouse enter event for grow effect
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.transition = 'transform 0.3s ease-in-out';
        });
        
        // Add mouse leave event to return to normal size
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.transition = 'transform 0.3s ease-in-out';
        });
    });
    
});
