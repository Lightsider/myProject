<?php
    include('include/header.php');
    //echo strrev(base64_encode(strrev(" FROM INFORMATION_SCHEMA.TABLES -- ")));
?>
                    <br>
                    <p> Выберите предмет, работы по которому хотите посмотреть: </p>
                    <br>
                    <table>
                        <tr>
                            <td bgcolor="#7fffd4">
                               <a href="math.php"><p class="yachey">Математика</p></a>
                            </td>
                            <td bgcolor="#7fffd4">
                                <a href="polit.php"><p class="yachey">Политология</p></a>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#7fffd4">
                                <a href="hist.php"><p class="yachey">История</p></a>
                            </td>
                            <td bgcolor="#7fffd4">
                                <a href="ekonom.php"><p class="yachey">Экономика</p></a>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <img src="include/1.jpg">
                    <br>
                    <form action="feedback.php" method="post">
                        <p> Предложения и пожелания оставляйте в форме. Я обязательно их прочитаю и приму к сведенью</p>
                        <p><i>Ваше имя:</i></p>
                        <input type="text" name="name" placeholder="Имя">
                        <p><i> Ваше сообщение: </i></p>
                        <textarea name="message" placeholder="Текст сообщения" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" value="Отправить">
                    </form>

			<?php
include('include/footer.php');
?>