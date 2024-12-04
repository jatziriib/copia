const calendarGrid = document.getElementById('calendarGrid');
const monthYear = document.getElementById('monthYear');
const prevMonth = document.getElementById('prevMonth');
const nextMonth = document.getElementById('nextMonth');

let currentDate = new Date();


function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    monthYear.textContent = `${currentDate.toLocaleString('es', { month: 'long' })} ${year}`;
    calendarGrid.innerHTML = '';

    let row = document.createElement('tr');

    
    for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement('td');
        row.appendChild(emptyCell);
    }

    
    for (let day = 1; day <= daysInMonth; day++) {
        if ((firstDay + day - 1) % 7 === 0 && day !== 1) {
            calendarGrid.appendChild(row);
            row = document.createElement('tr');
        }

        const dayCell = document.createElement('td');
        dayCell.classList.add('day');
        dayCell.dataset.date = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        dayCell.innerHTML = `<span>${day}</span>`;
        row.appendChild(dayCell);
    }

    
    while (row.children.length < 7) {
        const emptyCell = document.createElement('td');
        row.appendChild(emptyCell);
    }

    calendarGrid.appendChild(row);
    loadEventos();
}


prevMonth.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonth.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});


async function loadEventos() {
    const response = await fetch('/api/eventos');
    const eventos = await response.json();

    document.querySelectorAll('.day').forEach(dayCell => {
        const date = dayCell.dataset.date;
        const eventosDia = eventos.filter(evento => evento.fecha === date);

        eventosDia.forEach(evento => {
            const eventDiv = document.createElement('div');
            eventDiv.classList.add('event');
            eventDiv.textContent = evento.titulo;
            dayCell.appendChild(eventDiv);
        });
    });
}

renderCalendar();