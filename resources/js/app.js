import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
Alpine.start();

// Custom SweetAlert2 Toast (Minimalis Modern)
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    customClass: {
        popup: 'rounded-xl shadow-lg border border-gray-100',
        title: 'text-gray-800 font-medium text-sm',
    },
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

// Attach to window so we can use it anywhere (including blade scripts)
window.Swal = Swal;
window.Toast = Toast;

// Global listener for delete confirmation
document.addEventListener('DOMContentLoaded', () => {
    const confirmForms = document.querySelectorAll('.swal-confirm');
    confirmForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444', // Red-500
                cancelButtonColor: '#9ca3af', // Gray-400
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'rounded-lg font-medium px-5 py-2.5',
                    cancelButton: 'rounded-lg font-medium px-5 py-2.5'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
});
