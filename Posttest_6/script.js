document.addEventListener("DOMContentLoaded", function() {
    const hamburgerButton = document.getElementById('btn-hamburger');
    const navbarList = document.querySelector('.navbar-list');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const exitIcon = document.getElementById('exit-icon');

    hamburgerButton.addEventListener('click', function() {

        navbarList.classList.toggle('active');

        if (navbarList.classList.contains('active')) {
            hamburgerIcon.style.display = 'none'; 
            exitIcon.style.display = 'block';  
        } else {
            hamburgerIcon.style.display = 'block'; 
            exitIcon.style.display = 'none';       
        }
    });
});

document.getElementById("form-daftar").addEventListener("submit", function(event) {
    var konfirmasi = confirm("Apakah Anda yakin ingin mengirim formulir ini?");
    
    if (!konfirmasi) {
        event.preventDefault(); 
        return; 
    }
    // this.reset();

    setTimeout(function() {
        notif.style.display = "none";
    }, 3000);
});

