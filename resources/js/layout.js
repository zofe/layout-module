

import * as bootstrap from 'bootstrap';
try {
    window.bootstrap = bootstrap;
} catch (e) {}

function hide_modals() {
    const $modals =  document.querySelectorAll('.modal')
    $modals.forEach(modal => {
        let currentModal = bootstrap.Modal.getInstance(modal)
        if (currentModal) currentModal.hide()
    })
    document.querySelector("body").classList.remove('modal-open');
    document.querySelector("div.modal-backdrop").remove();
}

function show_modal(modal) {
    const instance = new bootstrap.Modal('#'+modal+'Modal');
    instance.show();
}

window.addEventListener('hide-modals', event => {
    hide_modals();
})

window.addEventListener('show-modal', event => {
    show_modal(event.detail[0]);
})


var topToggle = document.getElementById('sidebarToggleTop');
var downToggle = document.getElementById('sidebarToggle');


function toggleSidebar() {
    document.querySelector("body").classList.toggle("sidebar-toggled");
    document.querySelector(".sidebar").classList.toggle("toggled");
}
topToggle.addEventListener('click',(e)=>{
    e.preventDefault();
    toggleSidebar();
})
downToggle.addEventListener('click',(e)=>{
    e.preventDefault();
    toggleSidebar();
})


//menu.classList.toggle('hidden-phone');
