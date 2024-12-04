document.addEventListener('DOMContentLoaded', () => {
    const toggleCalendarButton = document.getElementById('toggleCalendar');
    const calendarModal = document.getElementById('calendarModal');
    const closeCalendarButton = document.getElementById('closeCalendar');

    // show calendar modal
    toggleCalendarButton.addEventListener('click', () => {
        calendarModal.classList.remove('hidden'); 
    });

    // close calendar
    closeCalendarButton.addEventListener('click', () => {
        calendarModal.classList.add('hidden'); 
    });

    //  close the modal when clicked outside
    calendarModal.addEventListener('click', (event) => {
        if (event.target === calendarModal) {
            calendarModal.classList.add('hidden'); 
        }
    });

    const currentDate = new Date();
    let currentYear = currentDate.getFullYear();
    let currentMonth = currentDate.getMonth();

    // func to generate the calendar
    function generateCalendar(year, month) {
        const calendarElement = document.getElementById('calendar');
        const currentMonthElement = document.getElementById('currentMonth');
        
        const firstDayOfMonth = new Date(year, month, 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        calendarElement.innerHTML = '';

        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        currentMonthElement.innerText = `${monthNames[month]} ${year}`;

        const firstDayOfWeek = firstDayOfMonth.getDay();

        const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.className = 'text-center text-black font-semibold';
            dayElement.innerText = day;
            calendarElement.appendChild(dayElement);
        });

        for (let i = 0; i < firstDayOfWeek; i++) {
            const emptyDayElement = document.createElement('div');
            calendarElement.appendChild(emptyDayElement);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement('div');
            dayElement.className = 'text-center py-2 border cursor-pointer text-gray-700 font-semibold';
            dayElement.innerText = day;

            const currentDate = new Date();
            if (year === currentDate.getFullYear() && month === currentDate.getMonth() && day === currentDate.getDate()) {
                dayElement.classList.add('bg-blue-500', 'text-white');
            }

            calendarElement.appendChild(dayElement);
        }
    }

    generateCalendar(currentYear, currentMonth);

    // button to previous or next month
    document.getElementById('prevMonth').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });
});
