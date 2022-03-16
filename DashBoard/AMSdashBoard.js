const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
        'Absent',
        'Present',
        'Others'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor: [
        'rgb(178,34,34)',
        'rgb(0,128,0)',
        'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
    }]
    },
});
/*
const employee = document.querySelectorAll('.employee')

const displayEmployees =(values) =>
{
    employee.forEach(element)=>
    {
        element.style.display = "none"

    }
}*/