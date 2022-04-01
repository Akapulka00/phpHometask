# phpHometask
## Занятие 1

### Домашнее задание

1. Задайте высоту, длину и ширину прямоугольного параллелепипеда и найти его площадь.

2. В переменной n хранится двузначное число. Найти сумму цифр числа n и вывести результат в консоль.

   Например, для числа 56 вывод будет: Значение n равно 56, сумма его цифр равна 11 для числа 23 вывод будет: Значение n
   равно 23, сумма его цифр равна 5

3. Поменять значение двух переменных, не используя третью
   (использовать арифметические операторы).

let a = 7; let b = 3; // код console.log(a, b); // 3 7

## Занятие 2


### Домашнее задание

1. ***Задача на if***. Дана целочисленная переменная count - количество верных ответов. В зависимости от значения этой
   переменной вывести в консоль оценку:
    1) 100 - 90 правильных ответов - отлично
    2) 89 - 60 правильных ответов - хорошо
    3) 59 - 40 правильных ответов - удовлетворительно
    4) 39 - 0 правильных ответов - попробуйте еще раз


2. ***Задача на switch***. Пользователь вводит 3 значения:
    1) первый операнд
    2) второй операнд
    3) оператор

В зависимости от введенного оператора нужно вывести в консоль результат сложения, вычитания, умножения или деления
чисел, которые ввел пользователь.

3. ***Задача на цикл while***. Получить от пользователя количество тарелок и количество моющего средства. Моющее
   средство расходуется из расчета 0.5 на 1 тарелку. В цикле выводить сколько моющего средства осталось после мытья
   каждой тарелки. В конце вывести сколько тарелок осталось, когда моющее средство закончилось или наоборот.


4. Программа загадывает число в диапазоне [1;9] (задать через Math.random()). Пользователь вводит число с клавиатуры.
   Программа в зависимости от введенного числа выводит в консоль следующее:
    1) "загаданное число больше"
    2) "загаданное число меньше"
    3) "Вы угадали" (программа завершает работу)
    4) если пользователь ввел 0, выводит "выход из программы" (программа завершает работу)

5.* ***Задача на Math.random() и if***. Написать код, который будет проверять попало ли случайно сгенерированное целое
число из отрезка [10;500] в интервал (25;200) и выводить результат в консоль.

Примеры работы программы:

      Число 345 не содержится в интервале (25;200)
      Число 110 содержится в интервале (25;200)

6.* Пользователь!!! загадывает число в диапазоне от [1 до 100]. Программа пытается его угадать. Программа может задавать
пользователю вопросы: "Число равно ...?" / "Число больше ...?" / "Число меньше ...?". В зависимости от ответа
пользователя (ДА/НЕТ) программа должна принимать решение: перестать или продолжить угадывать.

## Занятие 3


### Домашнее задание

1. Дан массив:

         let nums = [
            [23, 56, 75, -90, 123],
            [17, 0, -6429, -122],
            [19, 86, 55, -3, 900, 0, 0],
            [4, 9, -2]
         ];

Необходимо увеличить значение каждого элемента массива на 10 и найти среднее арифметическое значений элементов массива.

2. Создать массив из целых чисел, заполнить массив семью рандомными значениями в диапазоне [5; 300]. Поменять элементы с
   максимальным и минимальным значениями местами.


3. Создать массив из целых чисел. Отрицательные элементы массива перенести (удалить из исходного и добавить в новый) в
   новый массив.


4. Дан массив логинов `["Xodahe", "Gixath", "Qexeme", "Bolyky", "Fifiwu"]`. Написать программу, которая будет
   запрашивать у пользователя логин до тех пор, пока он не введет логин из массива


5. Дан массив логинов `["Xodahe", "Gixath", "Qexeme", "Bolyky", "Fifiwu"]`. Написать программу, которая запрашивает у
   пользователя логин и помещает его в массив, если там еще нет такого логина. Если логин в массиве уже есть, программа
   должна попросить пользователя придумать другой логин и так до тех пор, пока он не придумает уникальный логин.

## Занятие 4


### Домашнее задание (4)

1. Напишите функцию, которая в зависимости от переданного в нее целочисленного аргумента count, будет возвращать слово "
   товар" в правильной форме ("12 товаров", но "22 товара", "1 товар", "97 товаров" и тд).

2. Напишите функцию range, принимающую три аргумента:
   два обязательных: начало и конец диапазона, третий аргумент - необязательный (если он не передан, то равен единице) –
   шаг для построения массива.

Функция возвращает массив, который содержит все числа из диапазона, включая начальное и конечное. Например, вызов
функции range(1, 10, 2) должен будет вернуть массив [1, 3, 5, 7, 9]

3. Написать код - ответы на следующие вопросы:
    1) как проверить значение на определенный тип данный?
    2) как проверить, что значение переменной было присвоено?
    3) как проверить значение на число?

## Занятие 5

1. [Анонимные стрелочные функции]

### Домашнее задание (5)

1. Отсортировать массив чисел по возрастанию [3, 90, 5, -100, 50, 0, 560, 1]. Использовать метод массивов `sort`

2. Написать функцию проверки на спам.
    1) Функция принимает на вход текст и ...спам-слова (переменное количество аргументов).
    2) Определить по 5ти бальной шкале, как часто в тексте встречается спам.
    3) Результат вернуть из функции. Для того, чтобы преобразовать текст в массив слов используйте метод `split()`.

Например:

       let text = "lorem ipsum dolor";
       let words = text.split(" "); // разбили строку на массив по пробелу
       console.log(words); // ["lorem", "ipsum", "dolor"]

3. На методы массивов из занятия #5. Дан массив:

        let numsArr = [
            [3, 5, -1, 6, 0],
            [56, -9, 111, 6],
            [11, 86, -12],
        ];

    1) Увеличить каждый элемент массива на 10
    2) Создать массив, в который войдут положительные элементы numsArr

## Задачи на выходные (до 9 ноября):

1. Создать функцию, которая принимает на вход число от 1(понедельник) до 7(воскресенье), а возвращает день недели на
   русском языке

2. Написать функцию, котора добавляет в массив значение, только, если его не существует

3. Написать функцию, которая возвращает не более 3 случайных элементов из переданного в нее массива.

4. Написать функцию, которая вернет самое длинное слово в предложении

         let text = "самое длинное слово в предложении";
         // используйте свойство length для определения размера строки (text.length)

5. Создать массив из пересечений использовать методы filter + includes

         let first = ["Апрель", "Июль", "Октябрь", "Май"],
         second = ["Май", "Январь", "Декабрь", "Октябрь"];

         // в итоге должен быть создан массив: ["Октябрь", "Май"]

6. Проверить, есть ли в массиве temps температура больше 500, вывести информацию об этом в консоль. Использовать метод
   из файла functions3.js

         let temps = [
            [344, 241, 521, 344, 121],
            [111, 313, 351, 314],
            [134, 111, 452],
         ];

7. Написать функцию, которая принимает на вход строку и возвращает новую, в которой все буквы строчные, а первая буква
   заглавная.

         Например, дано hello, получаем Hello / дано HeLLO, получаем Hello

## Занятие 7


### Домашнее задание:

1. Написать функцию, которая принимает на вход объект obj (например, goods), число from и число to. Если значение from и
   to не числа, а obj не объект, функция прерывает свою работу и возвращает false. Если данные валидны, функция
   формирует и возвращает новый ОБЪЕКТ с объектами, значения свойств price которых лежат в диапазоне от значения from до
   значения to, не включая to.

2. Написать функцию, которая принимает на вход объект obj (например, goods), название (title) и количество (countToCart)
   . Если значение title не строка, obj не объект, а count не число, функция прерывает свою работу и возвращает false.
   Функция должна найти товар с указанным названием (title): если количество позволяет, то уменьшить значение свойства
   count в переданном объекте на countToCart вернуть true, если не позволяет, то вывести информацию об этом в консоль и
   вернуть false.

         let goods = { 
            piano: { 
               title: "Пианино", 
               price: 3000, 
               count: 25 
            }, 
            guitar: { 
               title: "Гитара", 
               price: 1200, 
               count: 40 
            },
            drum: { 
               title: "Барабаны", 
               price: 2700, 
               count: 12 
            }, 
            flute: { 
               title: "Флейта", 
               price: 900, 
               count: 50 }, 
            harp: { 
               title: "Арфа", 
               price: 3400, 
               count: 5 
            } 
         };

3. Написать функцию, которая принимает на вход объект obj (например, books) и автора (author). Создает и возвращает
   новый массив, в который войдут все книги указанного автора, если такого автора нет, возвращает пустой массив.

         let books = [
            { author: 'Пушкин', title: 'Пир во время чумы'}, 
            { author: 'Толстой', title: 'Война и мир'}, 
            { author: 'Лермонтов', title: 'Тамань'}, 
            { author: 'Гончаров', title: 'Обломов'}, 
            { author: 'Лермонтов', title: 'Герой Нашего Времени'}, 
            { author: 'Пушкин', title: 'Руслан и Людмила'}, 
            { author: 'Лермонтов', title: 'И скучно, и грустно'},
         ];

## Занятие 8

### Домашнее задание

1. Задача №1
    1) Создать Map
    2) Добавить в Map несколько пар, где ключ - логин пользователя, значение - название города, в котором живет
       пользователь
    3) Написать функцию, которая принимает на вход Map и название города. Функция должна создать и вернуть массив
       логинов, которые соответствуют переданному городу


2. Написать функцию, которая принимает на вход массив слов и возвращает количество одинаковых слов с массиве в виде
   Map (ключ - слово, значение - количество повторений слова)


3. Дана Map, ключи - id пользователей, 
значение - объект и информацией о пользователе, например:



         let customerMap = new Map();
         customerMap.set(45, {name: "Павел", id: 45, age: 23});
         customerMap.set(87, {name: "Олег", id: 87, age: 45});
         customerMap.set(91, {name: "Максим", id: 91, age: 18});
         customerMap.set(99, {name: "Евгения", id: 99, age: 66});
         customerMap.set(101, {name: "Алексей", id: 101, age: 34});
         customerMap.set(112, {name: "Клара", id: 112, age: 39});

Написать функцию, которая принимает на вход Map, ageFrom и ageTo. Функция должна создать и вернуть новую Map, в которую войдут все
покупатели, возраст которых находится в диапазоне от from до to (не включая to)

## Занятие 9



### Домашнее задание
1. Вывести в html информацию о животных. В html вместо значений true / false выводить: Есть / Нет


         let animals = [
            {
               "name": "Люся",
               "age": "1 год",
               "color": "трехцветная",
               "additional_info": {"vaccinations": true, "passport": true}
            },
            {
               "name": "Том",
               "age": "3 месяца",
               "color": "белый",
               "additional_info": {"vaccinations": false, "passport": false}
            },
            {
               "name": "Макс",
               "age": 2,
               "color": "серый",
               "additional_info": {"vaccinations": false, "passport": true}
            },
            {
               "name": "Василий",
               "age": 3,
               "color": "черный",
               "additional_info": {"vaccinations": true, "passport": true}
            }
         ];         


2. Написать функцию generateTable, которая принимает на вход массив объектов и создает таблицу. 
   Функция не должна быть привязана к конкретным названиям свойств. Заголовки ячеек - названия свойств в верхнем регистре.
   Пример того, что должно получиться на изображении [tables.png](lesson9/img/tables.png)


        Массивы для проверки:
        let articles = [
            {
                id: 1,
                title: "JS",
                text: "About JS",
                author: "Max"
            },
            {
                id: 2,
                title: "PHP",
                text: "About PHP",
                author: "Ivan"
            },
            {
                id: 3,
                title: "DataBase",
                text: "About DB",
                author: "Paul"
            },
            {
                id: 4,
                title: "HTML",
                text: "About HTML",
                author: "Paul"
            }
        ];

        let goods = [
            {
                title: "Piano",
                price: 3000,
                count: 25
            },
            {
                title: "Guitar",
                price: 1200,
                count: 40
            },
            {
                title: "Drum",
                price: 2700,
                count: 12
            },
            {
                title: "Flute",
                price: 900,
                count: 50
            },
            {
                title: "Harp",
                price: 3400,
                count: 5
            }
        ];

        Примеры вызова функции:
        generateTable(articles); - генерация таблицы со статьями
        generateTable(goods); - генерация таблицы с товарами

3. Написать функцию generateField(n) по генерации поля размером n x n. Значение n не может быть меньше 3. 
   Для 3х ячеек поля (для выбора ячейки использовать random) добавить атрибут prise. Значение атрибута prise - значение из объекта prises.
   Пример того, что должно получиться при генерации поля 4 Х 4 на изображении [field.png](lesson9/img/field.png).
   

         let prises = {
            headphones: "Наушники",
            book: "Книга",
            postcard: "Открытка"
         };

## Занятия 10, 11, 12

### Домашнее задание:

1. Задача на генерацию игрового поля (часть 2).

Пользователю дается определенное количество попыток, чтобы найти приз, если ему удается найти спрятанный приз 
за указанное количество попыток, то отобразить пользователю его приз, если не удалось, то вывести информацию об этом.
После каждой попытки отображать, сколько попыток осталось. Если пользователь получил приз или закончились попытки, 
он не может продолжить игру (удалить обработчик события).

2. Задача на отображение товаров (вывод информации в html реализован 
в файле lesson9/js/dom.js).

Добавить обработчики событий кнопкам (-) и (+). При каждом нажатии на (+) количество книг должно увеличиваться на 1 
(выводимое в html значение не может быть больше значения свойства count); при каждом нажатии ни (-) количество книг должно уменьшаться на 1 
(выводимое в html значение не может быть меньше 0);

