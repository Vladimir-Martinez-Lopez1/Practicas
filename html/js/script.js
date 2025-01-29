// Pestañas dinámicas
document.querySelectorAll('.pestanas button').forEach(boton => {
    boton.addEventListener('click', () => {
        // Remover la clase 'activo' de todos los botones
        document.querySelectorAll('.pestanas button').forEach(b => b.classList.remove('activo'));
        
        // Agregar la clase 'activo' al botón actual
        boton.classList.add('activo');
        
        // Ocultar todos los contenidos
        document.querySelectorAll('.contenido').forEach(c => c.classList.add('oculto'));
        
        // Mostrar el contenido relacionado con el botón actual
        const id = boton.getAttribute('data-target');
        document.getElementById(id).classList.remove('oculto');
    });
});
 
// Gráfica de Chart.js
const ctx = document.getElementById('chart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
        datasets: [
            {
                label: 'Ingresos',
                data: [0, 1000, 5000, 8000, 4000, 2000, 1000],
                backgroundColor: 'rgba(41, 128, 185, 0.2)',
                borderColor: 'rgba(41, 128, 185, 1)',
                borderWidth: 1
            },
            {
                label: 'Gastos',
                data: [0, 500, 2000, 6000, 3000, 1500, 800],
                backgroundColor: 'rgba(192, 57, 43, 0.2)',
                borderColor: 'rgba(192, 57, 43, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
    },
});
