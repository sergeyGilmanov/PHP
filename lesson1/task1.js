console.warn('Task 1 v_1');

function loop(time = 0, callback = null) {
    //очистка от мусора.
    [time, callback] = replaceParam(time, callback);
    if (time === 0 && callback == null) {
        return console.log(`Параметры не переданы используются значения по умолчанию: ${time} и ${callback}`);
    }
    else if (callback == null) {
        return console.log(`В качестве второго аргумента callback не передан 'for' не начнет свою работу`);
    } else {
        for (let i = 0; i < time; i++) {
            callback(i, time);
        }
        if (time === 0) console.log(`Перавый параметр не передан исользуется значение по умочанию: ${time}`);
    }
}

//функция очистки от мусора.
function replaceParam(a, b) {
    if (isNaN(a)) a = 0;
    if (typeof(b) !== 'function' || b == null) b = null;
    return [a, b];
}

loop(5, (a, b) => console.log(`callback вызов: ${++a} из ${b}`));
loop(undefined, (a, b) => console.log(`callback вызов: ${a} из ${b}`));
loop();
loop(5);
loop('text', (a, b) => console.log(`callback вызов: ${a} из ${b}`));
loop('text', 5);
loop(5, 'text');

console.warn('Task 1 v_2');

function loopV_2(times = 0, callback = null) {
    if (callback) {
        for (let i = 0; i < times; i++) {
            callback(i, times);
        }
    }
}

loopV_2(2); // цикл ни разу не сработпет
loopV_2(4, (i, times) => console.log(`callback отработал: ${++i} из ${times}`));

console.warn('Task 2 v_1');

//Создаем функцию расчета плошади

let calculateArea = (...param) => {
    let object = {
            area: 0,
            figure: '',
            input: []
        },
        sides = param.length,
        area = 0;
    for (let item in param) {
        if (param[item] <= 0) {
            return console.log('Одна сторона, меньше или равна нулю!');
        }
    }
    switch (sides) {
        case 2:
            object.figure = (param[0] === param[1]) ? 'Квадрат' : object.figure = 'Прямоугольник';
            area = param[0] * param[1];
            break;
        case 3:
            object.figure = 'Треугольник';
            let a = param[0],
                b = param[1],
                c = param[2],
                pr = (a + b + c) / 2; // Полупериметр треугольника
            area = Math.sqrt(pr * (pr - a) * (pr - b) * (pr - c)); // Площадь треугольника по 3-м сторонам
            break;
        default:
            return console.log('Параметры для такой фигуры не заданы)');
    }
    object.area = area;
    object.input = param;
    return console.log(object);
};

// Проверка функции
calculateArea(5, 5); // Квадрат
calculateArea(12, 25); // Прямоугольник
calculateArea(7, 7, 5); // Треугольник
calculateArea(5, 22, 36, 44, 85); // Параметры для такой фигуры не заданы

console.warn('Task 3 v_1');
    //Создаем класс Human
class Human {
    constructor(name, age, dateOfBirth) {
        this.name = name;
        this.age = age;
        this.dateOfBirth = dateOfBirth;
    }
    // Выводими в консоль класс
    showInfo() {
        console.log(this);
    }
}
    //Создаем класс Employee с наследование от Human
class Employee extends Human {
    constructor(name, age, dateOfBirth, salary, department) {
        super(name, age, dateOfBirth);
        this.salary = salary;
        this.department = department;
    }

    showInfo() {
        super.showInfo();
    }
}
    //Создаем класс Developer с наследование от Employee
class Developer extends Employee {
    constructor(name, age, dateOfBirth, salary, department, manager) {
        super(name, age, dateOfBirth, salary, department);
        this.manager = manager;
    }

    setManager(manager) {
        this.manager = manager;
    }

    showInfo() {
        super.showInfo();
    }
}
    //Создаем класс Manager с наследование от Employee
class Manager extends Employee {
    constructor(name, age, dateOfBirth, salary, department, developers) {
        super(name, age, dateOfBirth, salary, department);
        this.developers = [];
    }
    // Функция добавления Developer
    addDevelopers(developer) {
        this.developers.push(developer);
    }
    // Функция удаления Developer
    delDevelopers(developer) {
        for (let item of this.developers) {
            if (item === developer) {
                this.developers.splice(item, 1);
            }
        }
    }

    showInfo() {
        super.showInfo();
    }
}
// Создаем обьекты из классов
let developer1 = new Developer('John', 20, '12/02/1998', 25000, 'Junior Front-end');
let developer2 = new Developer('Elizabet', 28, '04/09/1990', 160000, 'Senior Back-end');
let developer3 = new Developer('Mike', 18, '02/02/2000', 17000, 'Tester');
let manager1 = new Manager('Peter', 32, '31/03/1987', 30000, 'Manager of Sale');

manager1.addDevelopers(developer1);
manager1.addDevelopers(developer2);
manager1.addDevelopers(developer3);
manager1.delDevelopers(developer2);
developer1.setManager(manager1);
developer2.setManager(manager1);
developer3.setManager(manager1);
developer1.showInfo();
developer2.showInfo();
developer3.showInfo();
manager1.showInfo();

console.warn('Task 4 v_1');
// Создаем функция генератор
function* questionsAboutYou() {
    //вопросы
    yield prompt(`What's your name?`);
    yield prompt(`What's your surname?`);
    yield prompt(`How old are you?`);
    return prompt(`Where are you living?`);
}

let user = {};
let generator = questionsAboutYou();

user.firstName = generator.next().value;
user.lastName = generator.next().value;
user.age = generator.next().value;
user.fromCity = generator.next().value;
console.log(user);

console.warn('Task 5 v_1');
// Создаем пустой массив
let loadingData = [];
// Цикл с промисами
for (let number = 1; number <= 10; number++) {
    let promise = new Promise((resolve, reject) => {
        fetch(`https://jsonplaceholder.typicode.com/users/${number}`)
            .then((resolve) => {
                return resolve.json();
            })
            .then((data) => {
                //Пушим результат запросв в массив loadingData
                loadingData.push(data);
            })
            .catch((reject) => console.error(reject));
    })
}
//Выводим массив с полученными данными
console.log(loadingData);

