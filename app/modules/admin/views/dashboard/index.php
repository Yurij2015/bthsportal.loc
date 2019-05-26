<?php
/* @var $this \yii\web\View */

$this->title = 'Панель адмиинстратора';
$this->params['subheading'] = 'Мотивация сотрудников';
?>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- /.info-box -->
    </div>


</div>

<div class="box box-info">
    <div class="box-header with-border">
        <h3>Метод анализа иерархий</h3>
        <p> Метод анализа иерархий (Analytic Hierarchy Process - AHP), или подход аналитической иерархии предполагает
            декомпозицию проблемы на простые составляющие части и обработку суждений лица, принимающего решения (ЛПР). В
            результате определяется относительная значимость исследуемых альтернатив для всех критериев, находящихся в
            иерархии. Относительная значимость выражается численно в виде векторов приоритетов. Полученные таким образом
            значения векторов являются оценками в шкале отношений и соответствуют так называемым жестким оценкам.</p>
        <p> С помощью расчета производятся вычисление коэффициентов важности для применения средств нематериальной
            мотивации для сотрудников компании.
        </p>

        <br>Постановка задачи, решаемой с помощью метода анализа иерархий, заключается обычно в следующем.
        <br><i>Дано:</i> общая цель решения задачи; критерии оценки альтернатив; альтернативы. <i>Требуется:</i>
        выбрать наилучшую альтернативу.
        <br>Подход AHP состоит из совокупности этапов:
        <br>1. Структуризация задачи виде иерархической структуры с несколькими уровнями: цели – критерии –
        альтернативы.
        <br>2. Попарное сравнение элементов каждого уровня лицом, принимающим решения. Результаты сравнения имеют
        числовой характер.
        <br>3. Вычисление коэффициентов важности для элементов каждого уровня. Проверка согласованности суждений
        ЛПР.
        <br>Подсчет количественной оценки качества альтернатив. Выбор лучшей альтернативы.
        <br>Для установления относительной важности элементов иерархии используется шкала отношений. Данная шкала
        позволяет ЛПР ставить в соответствие степеням предпочтения одного сравниваемого объекта перед другим
        некоторые числа (таблица 2).

        <p>Таблица 1. Шкала отношений
        </p>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td width="130" align="center">Степень значимости
                </td>
                <td width="219" align="center">Определение
                </td>
                <td width="282" align="center">Объяснение
                </td>
            </tr>
            <tr>
                <td width="130" align="center">1
                </td>
                <td width="219"><br>Одинаковая значимость
                </td>
                <td width="282"><br>Два действия вносят одинаковый вклад в достижение цели
                </td>
            </tr>
            <tr>
                <td width="130" align="center">3
                </td>
                <td width="219"><br>Некоторое преобладание значимости одного действия над другим
                </td>
                <td width="282"><br>Существуют соображения в пользу предпочтения одного из действий, однако эти
                    соображения недостаточно убедительны
                </td>
            </tr>
            <tr>
                <td width="130" align="center">5
                </td>
                <td width="219"><br>Существенная или сильная значимость
                </td>
                <td width="282"><br>Имеются надежные данные или логические суждения для того, чтобы показать
                    предпочтительность одного из действий
                </td>
            </tr>
            <tr>
                <td width="130" align="center">7
                </td>
                <td width="219"><br>Очевидная или очень сильная значимость
                </td>
                <td width="282"><br>Убедительное свидетельство в пользу одного действия перед другим
                </td>
            </tr>
            <tr>
                <td width="130" align="center">9
                </td>
                <td width="219"><br>Абсолютная значимость
                </td>
                <td width="282"><br>Свидетельства в пользу предпочтения одного действия перед другим в высшей
                    степени убедительны
                </td>
            </tr>
            <tr>
                <td width="130" align="center">2, 4, 6, 8
                </td>
                <td width="219"><br>Промежуточные значения между двумя соседними суждениями
                </td>
                <td width="282"><br>Ситуация, когда необходимо компромиссное решение
                </td>
            </tr>
            <tr>
                <td width="130" align="center">Обратные величины приведенных выше величин
                </td>
                <td width="219"><br>Если действию i при сравнением с действием j приписывается одно из определенных
                    выше чисел, то действию j при сравнении с действием i приписывается обратное значение
                </td>
                <td width="282"><br>Если согласованность была постулирована при получении N числовых значений для
                    образования матрицы
                </td>
            </tr>
            </tbody>
        </table>

        <br>При использовании указанной шкалы ЛПР, сравнивая два объекта в смысле достижения цели, расположенной на
        вышележащем уровне иерархии, должен поставить число в интервале от 1 до 9 или обратное значение.
        <br>Для этого в иерархии выделяют элементы двух типов: элементы – родители и элементы – потомки. Элементы –
        потомки воздействуют на соответствующие элементы вышестоящего уровня иерархии, являющиеся по отношению к
        первым элементами – родителями. Матрицы парных сравнений строятся для всех элементов – потомков, относящихся
        к определенному родителю. Парные сравнения производятся в терминах доминирования одного элемента над другим
        в соответствии со шкалой отношений.
        <br>Если элемент Е<sub>1</sub> доминирует над элементом Е<sub>2</sub>, то клетка матрицы, соответствующая
        строке Е<sub>1</sub> и столбцу Е<sub>2</sub>, заполняется целым числом, а клетка, соответствующая строке
        Е<sub>2</sub> и столбцу Е<sub>1</sub>, заполняется обратным к нему числом.
        <br>При проведении парных сравнений следует отвечать на вопросы: какой из двух сравниваемых элементов важнее
        или имеет большее воздействие, какой более вероятен и какой предпочтительнее.
        <br>При сравнении критериев обычно спрашивают, какой из критериев более важен; при сравнении альтернатив по
        отношению к критерию – какая из альтернатив более предпочтительна или более вероятна.

        <p><span class="instruction">Теорема 1</span>. В положительной обратносимметрической квадратной матрице
            λ<sub>max</sub>≥n.

        </p>
        <p><span class="instruction">Теорема 2</span>. Положительная обратносимметрическая квадратная матрица А
            согласованна тогда и только тогда, когда λ<sub>max</sub>=n.

        </p>
        <p>Таким образом, для оценки однородности суждений эксперта можно использовать отклонение величины
            максимального собственного значения λ<sub>max</sub> от порядка матрицы n.
            <br>Согласованность суждения оценивается индексом однородности (индексом согласованности) или отношением
            однородности (отношением согласованности) в соответствии со следующими формулами:
            <br><img class="img-online" width="177" height="49"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image001.gif" alt="индекс однородности"
                     title="индекс однородности">
            <br><img class="img-online" width="161" height="53"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image002.gif" alt="отношение однородности"
                     title="отношение однородности">
            <br>M(ио) - среднее значение индекса однородности случайным образом составленной матрицы парных
            сравнений, которое основано на экспериментальных данных. Значение есть табличная величина, входным
            параметром выступает размерность матрицы (таблица 2).

        </p>
        <p>Таблица 2. Среднее значение индекса однородности в зависимости от порядка матрицы
        </p>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td width="56"><br>n
                </td>
                <td width="44"><br>1
                </td>
                <td width="44"><br>2
                </td>
                <td width="44"><br>3
                </td>
                <td width="44"><br>4
                </td>
                <td width="44"><br>5
                </td>
                <td width="44"><br>6
                </td>
                <td width="44"><br>7
                </td>
                <td width="44"><br>8
                </td>
                <td width="44"><br>9
                </td>
                <td width="44"><br>10
                </td>
                <td width="44"><br>11
                </td>
            </tr>
            <tr>
                <td width="56"><br>M(ио)
                </td>
                <td width="44"><br>0
                </td>
                <td width="44"><br>0
                </td>
                <td width="44"><br>0,58
                </td>
                <td width="44"><br>0,90
                </td>
                <td width="44"><br>1,12
                </td>
                <td width="44"><br>1,24
                </td>
                <td width="44"><br>1,32
                </td>
                <td width="44"><br>1,41
                </td>
                <td width="44"><br>1,45
                </td>
                <td width="44"><br>1,49
                </td>
                <td width="44"><br>1,51
                </td>
            </tr>
            </tbody>
        </table>
        В качестве допустимого используется значение OO≤0,10. Если для матрицы парных сравнений OO&gt;0.1, то это
        свидетельствует о существенном нарушении логики суждений, допущенном экспертом при заполнении матрицы,
        поэтому эксперту предлагается пересмотреть данные, использованные для построения матрицы, чтобы улучшить
        однородность.

        <p><span id="instruction">Пример</span>. Рассмотрим матрицу парных сравнений и вычислим приближенное
            значение главного собственного вектора:
            <br><img class="img-online" width="192" height="121"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image003.gif">
            <br>Просуммируем элементы каждой строки и найдем сумму всех элементов матрицы:
            <br><img class="img-onlineg" width="91" height="108"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image004.gif"><img class="img-online"
                                                                                           width="176" height="36"
                                                                                           src="https://axd.semestr.ru/upr/images/hierarchies-image005.gif">
            <br>Нормализуя вектор W<sub>s</sub> делением каждой координаты на величину S, получаем приближенное
            значение главного собственного вектора:
            <br><img class="img-online" width="107" height="89"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image006.gif">
            <br>Приближенное значение максимального собственного значения можно найти по формуле
            λ<sub>max</sub>=e<sup>T</sup>AW, рассмотренной выше:
            <br><img class="img-online" width="265" height="75"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image007.gif">
            <br>При таком вычислении главного собственного вектора и максимального собственного значения может
            оказаться, что согласованная в действительности матрица является несогласованной по вычислениям и
            наоборот.
            <br><b><u>Пример.</u></b> Вычислим отношение согласованности рассматриваемой выше матрицы, взяв в
            качестве максимального собственного значения его точное и приближенное число.
            <br><img class="img-online" width="183" height="49"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image008.gif"><img class="img-online"
                                                                                           width="156" height="53"
                                                                                           src="https://axd.semestr.ru/upr/images/hierarchies-image009.gif">
            <br><img class="img-online" width="181" height="49"
                     src="https://axd.semestr.ru/upr/images/hierarchies-image010.gif"><img class="img-online"
                                                                                           width="156" height="53"
                                                                                           src="https://axd.semestr.ru/upr/images/hierarchies-image011.gif"
                                                                                           data-src="https://axd.semestr.ru/upr/images/hierarchies-image011.gif">
            <br>При большей погрешности метода вычисления главного собственного вектора, отношение согласованности
            матрицы парных сравнений могло оказаться больше <var>0.01</var>.
            <br>Желательно использовать процедуры точного нахождения собственных значений и векторов матриц. Такое
            пожелание превращается в требование в особо ответственных задачах.

        </p>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>