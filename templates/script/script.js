const btn_celkem = document.querySelector('#btn-celkem');
const btn_vcera = document.querySelector('#btn-vcera');

let active = 'celkem';
let inactive = 'vcera';

let today = document.querySelector('#date').textContent;
let yesterday = getYesterday(today);

setStyle();

btn_celkem.addEventListener('click', () => switchData('celkem'));
btn_vcera.addEventListener('click', () => switchData('vcera'));

function getYesterday() {
    let t = today.split(': ')[1];
    t = t.split('. ');

    const yesterday = new Date(t[2] + '.' + t[1] + '.' + t[0]);
    yesterday.setDate(yesterday.getDate() - 1);

    return 'Včera: ' + yesterday.getDate() + '. ' + (yesterday.getMonth() + 1) + '. ' + yesterday.getFullYear();
}

function switchData(source) {
    if (source == active) return;

    let temp = active;
    active = inactive;
    inactive = temp;
    setStyle();
    setButtons();

    if (active == 'vcera') {
        document.querySelector('#date').textContent = yesterday;
    } else {
        document.querySelector('#date').textContent = today;
    }
}

function setStyle() {
    // display chosen data
    const inactiveElements = document.querySelectorAll('.data-' + inactive);
    const activeElements = document.querySelectorAll('.data-' + active);

    inactiveElements.forEach((element) => {
        element.classList.add('inactive');
    });

    activeElements.forEach((element) => {
        element.classList.remove('inactive');
    });
}

function setButtons() {
    // sets buttons styles
    const inactiveBtn = document.querySelector('.btn-inactive');
    const activeBtn = document.querySelector('.btn-active');

    inactiveBtn.classList.add('btn-active');
    inactiveBtn.classList.remove('btn-inactive');

    activeBtn.classList.remove('btn-active');
    activeBtn.classList.add('btn-inactive');
}
