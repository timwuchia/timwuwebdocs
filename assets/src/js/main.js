// javascript
import "@fortawesome/fontawesome-free/js/all.js";

//styles
import "../sass/styles.scss";

document.addEventListener('DOMContentLoaded', (event) => {
    // accordian
    const accToggleBtns = document.querySelectorAll('.hc-accordian-title .acc-toggle-btn');
    
    for(let btn of accToggleBtns ) {
        function toggleAcc() {
            const accContent = this.parentNode.parentNode.querySelector('.hc-accordian-content');
            this.classList.toggle('rotate');
            accContent.classList.toggle('show');
        }
        btn.addEventListener('click', toggleAcc)
    }
})