	<H1>В базе данных хранится список мероприятий (таблица events) и список заявок на
покупку билетов на указанные мероприятия (таблица bids).</H1>
	

	<h3>2. Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</h3>
	<pre>	
	SELECT `name` FROM `bids`  WHERE price=(SELECT MAX(`price`) FROM `bids`)
	</pre>

	<h3>Результат выполнения</h3>
	<p>Николай</p>

	<h3>3. Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок</h3>
	<pre>	
	SELECT e.caption FROM `events` AS `e` 
	LEFT JOIN `bids` AS `b` 
	ON e.id = b.id_event 
	WHERE b.id_event is NULL
	</pre>

	<h3>Результат выполнения</h3>
	<p>Грин Грей (Green Grey)</p>

	<h3>4. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок</h3>
	<pre>	
	SELECT e.caption 
	FROM `events` AS `e` 
	LEFT JOIN `bids` AS `b` 
	ON e.id = b.id_event 
	GROUP BY b.id_event 
	HAVING COUNT(*) > 3
	</pre>

	<h3>Результат выполнения</h3>
	<p>Пусто</p>

	<h3>5. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок</h3>
	<pre>
	SELECT e.caption 
	FROM `events` AS `e` 
	LEFT JOIN `bids` AS `b` 
	ON e.id = b.id_event 
	GROUP BY b.id_event DESC LIMIT 1
	</pre>
	<h3>Результат выполнения</h3>
	<p>Atlas Weekend 2017</p>
    <p>
        <a href="/page" style="padding:20px; text-decoration: none; font-weight: bold">Задание 1 </a>
        <a href="/page3" style="padding:20px; text-decoration: none; font-weight: bold">Задание 3</a>
        <a href="/page4" style="padding:20px; text-decoration: none; font-weight: bold">Задание 4</a>
        <a href="/page6" style="padding:20px; text-decoration: none; font-weight: bold">Задание 6</a>
        <a href="/page7" style="padding:20px; text-decoration: none; font-weight: bold">Задание 7</a>
        <a href="/page9" style="padding:20px; text-decoration: none; font-weight: bold">Задание 9</a>
        <a href="/page10" style="padding:20px; text-decoration: none; font-weight: bold">Задание 10</a>
    <p>