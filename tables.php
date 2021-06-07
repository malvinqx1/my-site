<head><meta charset = "UTF-8"></head>
<?php 
	require 'connection.php';
	mysqli_select_db($link, 'Int') or die('Невозможно подключиться к базе данных.');
	//$posts = mysqli_query($link, "SELECT * FROM Clothing");

	
if (mysqli_query($link, "CREATE TABLE Robot (
Id INT  NOT NULL ,
Namerobot varchar(50) NOT NULL,
Discription varchar(10000) NOT NULL,
Photo varchar(40) NOT NULL,
Discription2 varchar(10000) NOT NULL,
Photo2 varchar(40) NOT NULL,
Id_Create int UNSIGNED NOT NULL,
PRIMARY KEY(Id),
FOREIGN KEY (Id_Create) REFERENCES `Createrobot`(Id_Create) ON DELETE CASCADE
)
;"))
{
	echo '<br> Таблица Robot создана';
}
else
{	echo '<br> Ошибка при создании'.mysqli_error($link);}

if (mysqli_query($link, "CREATE TABLE Createrobot (
	Id_Create INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Photo varchar(15) NOT NULL,
	Author varchar(15) NOT NULL,
	Namerobot varchar(15) NOT NULL,
	Comments varchar(15) NOT NULL,
	PRIMARY KEY(Id_Create)
	)
	;"))
	{
		echo '<br> Таблица createrobot создана';
	}
	else
	{	echo '<br> Ошибка при создании'.mysqli_error($link);}
	

/*if(mysqli_query($link, "CREATE VIEW BrandClothing AS
		SELECT ID_Clothing, Brand.ID_Brand,  Brand.Наименование AS `Название`, Clothing.Наименование AS `Наименование`, `Фото`, `Описание`,`Цена`
		FROM Brand INNER JOIN Clothing ON Clothing.ID_Brand=Brand.ID_Brand;")){
	echo '<br> Записи добавлены в таблицу товаров.';
}
else {
		echo "Ошибка представление: ".mysqli_error($link);
	}
mysqli_close($link);*/
?>
	